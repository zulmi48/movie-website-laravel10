@extends('layouts.main')

@section('content')
<div class="container mx-auto px-4 pt-16 pb-10">
    <div id="popular-movies">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular Movies</h2>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
        @foreach ($getPopularMovies as $movie)
        <x-movie-card :movie=$movie :genres=$genres />
        @endforeach
    </div>

    <div id="now-playing-movie">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold mt-10">Now Playing</h2>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
        @foreach ($getNowPlaying as $movie)
        <x-movie-card :movie=$movie :genres=$genres />
        @endforeach
    </div>
</div>
@endsection
