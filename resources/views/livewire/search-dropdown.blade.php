<div class="relative mt-2 md:mt-0">
    <input wire:model.debounce.500ms="search" type="text"
        class="bg-gray-700 rounded-full w-64 px-4 py-1 pl-8 focus:outline-none focus:shadow-outline"
        placeholder="Search Movie">
    <div class="absolute top-2 left-2">
        <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M15.7955 15.8111L21 21M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z"
                stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
    </div>
    <div wire:loading class="spinner top-0 right-0 mt-4 mr-4"></div>
    @if (strlen($search) >= 3)
        <div class="absolute bg-gray-800 rounded w-64 mt-4 text-sm">
            @if ($searchResults->count() > 0)
                <ul>
                    @foreach ($searchResults as $result)
                        <li class="border-b border-gray-700">
                            <a href="{{ route('movie.show', $result['id']) }}"
                                class="block py-3 px-3 flex items-center hover:bg-gray-700">
                                <img class="w-8" src="https://image.tmdb.org/t/p/w92/{{ $result['poster_path'] }}">
                                <span class="ml-5">{{ $result['title'] }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            @else
                <div class="px-3 py-3">No result for {{ $search }}</div>
            @endif
        </div>
    @endif
</div>
