<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('¡Explora el Catálogo!') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 ">

                    <div class="grid grid-cols-4 gap-6 p-4">
                        @foreach($movies as $movie)
                            <div class=" min-h-96 text-center bg-gray-400 rounded-lg shadow-md p-4 hover:opacity-75 hover:border-2 hover:border-blue-500 transition-opacity duration-300">
                                <a href="{{ url('/catalog/show/' . $movie->id) }}">
                                    <img
                                        src="{{ $movie['poster'] }}"
                                        alt="poster"
                                        class="h-88 w-full object-cover rounded-md"
                                    />
                                    <h4 class="mt-4 text-lg font-semibold text-gray-700 min-h-[45px]">
                                        {{ $movie['title'] }}
                                    </h4>
                                </a>
                            </div>
                        @endforeach
                    </div>

                    {{ $movies->links() }}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
