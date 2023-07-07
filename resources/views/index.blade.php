@extends('layouts.main')

@section('content')
<div class="container mx-auto px-4 pt-16">
    <div id="popular-movies">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular Movies</h2>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
        <div class="mt-5">
            <a href="#">
                <img class="h-80 hover:opacity-75 transition-opacity duration-500" src="{{ asset('images/poster1.jpg') }}" alt="">
            </a>
            <div class="mt-2">
                <a href="#" class="text-lg hover:text-gray-400 text-sm">Spiderman</a>
                <div class="flex items-center text-gray-400 mt-2">
                    <span><img src="{{ asset('images/star.png') }}" class="h-4" alt=""></span>
                    <span class="ml-1">75%</span>
                    <span class="mx-2">|</span>
                    <span>Feb 20, 2020</span>
                </div>
                <div class="text-gray-400 text-sm">
                    Action, Sci-FI, Comedy
                </div>
            </div>
        </div>
    </div>

    <div id="now-playing-movie">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold mt-10">Now Playing</h2>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
        <div class="mt-5">
            <a href="#">
                <img class="h-80 hover:opacity-75 transition-opacity duration-500" src="{{ asset('images/poster1.jpg') }}" alt="">
            </a>
            <div class="mt-2">
                <a href="#" class="text-lg hover:text-gray-400 text-sm">Spiderman</a>
                <div class="flex items-center text-gray-400 mt-2">
                    <span><img src="{{ asset('images/star.png') }}" class="h-4" alt=""></span>
                    <span class="ml-1">75%</span>
                    <span class="mx-2">|</span>
                    <span>Feb 20, 2020</span>
                </div>
                <div class="text-gray-400 text-sm">
                    Action, Sci-FI, Comedy
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
