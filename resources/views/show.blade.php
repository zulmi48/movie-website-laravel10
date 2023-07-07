@extends('layouts.main')
@section('content')
<div>
    <div class="border-b border-gray-800" id="movie-info">
        <div class="container mx-auto px-4 py-16 flex flex-col items-center md:flex-row">
            <img src="{{ asset('images/poster1.jpg')}}" class="w-72 md:w-96" alt="">
            <div class="mt-10 md:ml-24">
                <h1 class="text-4xl font-semibold">Spirderman (2022)</h1>
                <div class="flex flex-wrap items-center text-gray-400 mt-2">
                    <span><img src="{{ asset('images/star.png') }}" class="h-4" alt=""></span>
                    <span class="ml-1">75%</span>
                    <span class="mx-2">|</span>
                    <span>Feb 20, 2020</span>
                    <span class="mx-2">|</span>
                    <span>Action, Sci-FI, Drama</span>
                </div>
                <p class="text-gray-300 mt-8">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius minus temporibus itaque, magnam ad alias vero commodi dolor at deserunt earum dolorum numquam nemo fugiat quod? Quasi porro molestiae sint ducimus, accusamus praesentium reprehenderit vero aliquam numquam beatae corporis neque est eum asperiores alias labore cum error quas ex minima.
                </p>

                <div class="mt-12">
                    <h3 class="text-white font-semibold">Featured Cast</h3>
                    <div class="flex mt-4">
                        <div>
                            <span>Boong Joon-ho</span>
                            <div class="text-sm text-gray-400">
                                Screenplay, Director, Story
                            </div>
                        </div>
                        <div class="ml-8">
                            <span>Han Jin-won</span>
                            <div class="text-sm text-gray-400">
                                Screenplay
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-12">
                    <button class="flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-4 py-3 hover:bg-orange-600 transition ease-in-out duration-150">
                        <img class="w-8" src="{{ asset('images/play-button.png') }}" alt="">
                        <span class="ml-2">Play Trailer</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div id="movie-cast" class="border-b border-gray-800">
        <div class="container mx-auto px-4 py-12">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="flex flex-col items-center md:flex-row md:gap-10">
                <div class="mt-5">
                    <a href="#">
                        <img class="h-80 hover:opacity-75 transition-opacity duration-500" src="{{ asset('images/poster1.jpg') }}" alt="">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg hover:text-gray-400 text-lg">Real Name</a>
                        <div class="text-gray-400 text-sm">
                            Movie Name
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <a href="#">
                        <img class="h-80 hover:opacity-75 transition-opacity duration-500" src="{{ asset('images/poster1.jpg') }}" alt="">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg hover:text-gray-400 text-lg">Real Name</a>
                        <div class="text-gray-400 text-sm">
                            Movie Name
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <a href="#">
                        <img class="h-80 hover:opacity-75 transition-opacity duration-500" src="{{ asset('images/poster1.jpg') }}" alt="">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg hover:text-gray-400 text-lg">Real Name</a>
                        <div class="text-gray-400 text-sm">
                            Movie Name
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="movie-cast" class="border-b border-gray-800">
        <div class="container mx-auto px-4 py-12">
            <h2 class="text-4xl font-semibold">Screenshot</h2>
            <div class="mt-5 flex flex-col items-center md:flex-row md:gap-10">
                <a href="#" class="mt-3">
                    <img class="w-96  hover:opacity-75 transition-opacity duration-500" src="{{ asset('images/screenshot1.jpg') }}" alt="">
                </a>
                <a href="#" class="mt-3">
                    <img class="w-96  hover:opacity-75 transition-opacity duration-500" src="{{ asset('images/screenshot1.jpg') }}" alt="">
                </a>
                <a href="#" class="mt-3">
                    <img class="w-96  hover:opacity-75 transition-opacity duration-500" src="{{ asset('images/screenshot1.jpg') }}" alt="">
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
