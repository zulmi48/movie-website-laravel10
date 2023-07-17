<div>
    <div class="mt-5">
        <a href="{{ route('movie.show', $movie['id']) }}">
            <img class="h-80 hover:opacity-75 transition-opacity duration-500" src="{{ 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'] }}" alt="">
        </a>
        <div class="mt-2">
            <a href="{{ route('movie.show', $movie['id']) }}" class="text-lg hover:text-gray-400 text-sm">{{ $movie['title'] }}</a>
            <div class="flex items-center text-gray-400 mt-2">
                <span><img src="{{ asset('images/star.png') }}" class="h-4" alt=""></span>
                <span class="ml-1">{{ $movie['vote_average'] }}</span>
                <span class="mx-2">|</span>
                <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('d M, Y') }}</span>
            </div>
            <div class="text-gray-400 text-sm">
                @foreach ($movie['genre_ids'] as $item)
                    {{ $genres->get($item) }} @if (!$loop->last) , @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
