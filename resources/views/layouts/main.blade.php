<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie Website</title>
    @vite('resources/css/app.css')
    <livewire:styles />
</head>
<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-4">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <a href="#">
                        <img class="w-10" src="{{ asset('images/watching-a-movie.png') }}" alt="">
                    </a>
                </li>
                <li class="md:ml-16 mt-2 md:mt-0">
                    <a href="#" class="hover:text-gray-300">Movies</a>
                </li>
                <li class="md:ml-6 mt-2 md:mt-0">
                    <a href="#" class="hover:text-gray-300">Tv Shows</a>
                </li>
                <li class="md:ml-6 mt-2 md:mt-0">
                    <a href="#" class="hover:text-gray-300">Actors</a>
                </li>
            </ul>
            <div class="flex flex-col md:flex-row items-center">
                <livewire:search-dropdown />
                <div class="md:ml-4 mt-2 md:mt-0">
                    <a href="#">
                        <img src="{{ asset('images/man.png') }}" alt="avatar" class="rounded-full w-8 h-8">
                    </a>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
    <livewire:scripts />
</body>
</html>
