<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Devolver película') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class=" text-lg font-semibold mb-4 text-center">¿Seguro que quieres devolver la película {{ $movie->title }}?</h3>
                    <div class="flex justify-center gap-5">

                        <!-- Botón "Si" -->
                        <form action="{{ route('catalog.return', $movie->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <x-primary-button class="h-10 ">
                                Sí
                            </x-primary-button>
                        </form>

                        <!-- Botón "No" -->
                        <x-primary-button class="h-10 ">
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
