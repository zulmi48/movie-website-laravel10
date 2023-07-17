@extends('layouts.main')
@section('content')
<div>
    <div class="border-b border-gray-800" id="movie-info">
        <div class="container mx-auto px-4 py-16 flex flex-col items-center md:flex-row">
            <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'] }}" class="w-72 md:w-96" alt="">
            <div class="mt-10 md:ml-24">
                <h1 class="text-4xl font-semibold">{{ $movie['title'] }}</h1>
                <div class="flex flex-wrap items-center text-gray-400 mt-2">
                    <span><img src="{{ asset('images/star.png') }}" class="h-4" alt=""></span>
                    <span class="ml-1">{{ $movie['vote_average'] }}</span>
                    <span class="mx-2">|</span>
                    <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('d M, Y') }}</span>
                    <span class="mx-2">|</span>
                    <span>
                        @foreach ($movie['genres'] as $item)
                            {{ $item['name'] }} @if (!$loop->last) , @endif
                        @endforeach
                    </span>
                </div>
                <p class="text-gray-300 mt-8">
                    {{ $movie['overview'] }}
                </p>

                <div class="mt-12">
                    <h3 class="text-white font-semibold">Featured Cast</h3>
                    <div class="flex mt-4">
                        @foreach ($movie['credits']['crew'] as $crew)
                        @if ($loop->index<3)
                            <div class="mr-8">
                                <span>{{ $crew['name'] }}</span>
                                <div class="text-sm text-gray-400">
                                    {{ $crew['job'] }}
                                </div>
                            </div>
                        @endif
                        @endforeach
                    </div>
                </div>

                @if (count($movie['videos']['results'])>0)
                    <div class="mt-12">
                        <a href="https://www.youtube.com/watch?v={{ $movie['videos']['results'][0]['key'] }}" class="flex inline-flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-4 py-3 hover:bg-orange-600 transition ease-in-out duration-150">
                            <img class="w-8" src="{{ asset('images/play-button.png') }}" alt="">
                            <span class="ml-2">Play Trailer</span>
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div id="movie-cast" class="border-b border-gray-800">
        <div class="container mx-auto px-4 py-12">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="flex flex flex-col items-center sm:grid sm:grid-cols-2 lg:grid-cols-5 md:gap-10">
                @foreach ($movie['credits']['cast'] as $cast)
                    @if ($loop->index<5)
                        <div class="mt-5">
                            <a href="#">
                                <img class="h-80 hover:opacity-75 transition-opacity duration-500" src="{{ 'https://image.tmdb.org/t/p/w500/'.$cast['profile_path'] }}" alt="">
                            </a>
                            <div class="mt-2">
                                <a href="#" class="text-lg hover:text-gray-400 text-lg">{{ $cast['name'] }}</a>
                                <div class="text-gray-400 text-sm">
                                    {{ $cast['character'] }}
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

    <div id="movie-cast" class="border-b border-gray-800">
        <div class="container mx-auto px-4 py-12">
            <h2 class="text-4xl font-semibold">Screenshot</h2>
            <div class="mt-5 flex flex-col items-center md:grid md:grid-cols-3 md:gap-10">
                @foreach ($movie['images'] ['backdrops'] as $images)
                    @if ($loop->index<9)
                        <a href="#" class="mt-5 mr-3">
                            <img class="w-96  hover:opacity-75 transition-opacity duration-500" src="{{ 'https://image.tmdb.org/t/p/w500/'.$images['file_path'] }}" alt="">
                        </a>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
