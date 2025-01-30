<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Eliminar película') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class=" text-lg font-semibold mb-4 text-center">¿Seguro que quieres eliminar la película {{ $movie->title }}?</h3>
                    <div class="flex justify-center gap-5">

                        <!-- Botón "Sí" -->
                        <form action="{{ route('catalog.destroy', $movie->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <x-primary-button class="h-10 text-white px-4 py-2 rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50">
                                Sí
                            </x-primary-button>
                        </form>

                        <!-- Botón "No" -->
                        <x-primary-button class="h-10 bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50">
                            <a href="{{ route('catalog.show', $movie->id) }}">
                                No
                            </a>
                        </x-primary-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
