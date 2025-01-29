<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Detalle de la Película') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                @if(session('success'))
                    <div class="bg-green-100 text-white p-4 rounded-md mb-4">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="p-6 text-gray-900 dark:text-gray-100 flex flex-col items-center">

                    <div class="flex w-full m-5">
                        <!-- Columna de la izquierda: Imagen de la película (35% de ancho) -->
                        <div class="w-[35%] m-5">
                            <img src="{{ $movie['poster'] }}" alt="Imagen de la película" class="w-full h-auto rounded-md mr-4" />
                        </div>

                        <!-- Columna de la derecha: Información de la película (65% de ancho) -->
                        <div class="w-[65%] m-5">
                            <h1 class="text-center text-2xl font-semibold">{{ $movie['title'] }}</h1>
                            <p class="pt-14"><strong>Año:</strong> {{ $movie['year'] }}</p>
                            <p class="pt-8"><strong>Director:</strong> {{ $movie['director'] }}</p>
                            <p class="pt-8"><strong>Resumen:</strong> {{ $movie['synopsis'] }}</p>


                            <div class="m-4 flex flex-wrap space-x-4 justify-start gap-4">
                                <!-- Estado de la película -->
                                @if ($movie['rented'])
                                    <p class="pt-8 pb-6 w-full"><strong>Estado:</strong> Película actualmente alquilada</p>
                                    <x-primary-button class="dark:bg-red-700 dark:text-white">
                                        Devolver
                                    </x-primary-button>

                                @else
                                    <p class="pt-8 pb-6 w-full"><strong>Estado:</strong> Película disponible</p>
                                    <x-primary-button class="dark:bg-green-700 dark:text-white">
                                         <a href="{{ url('/catalog/rentConfirm/' . $movie->id) }}">
                                             Alquilar Pelicula
                                        </a>
                                    </x-primary-button>

                                @endif
                                <x-primary-button class="dark:bg-amber-300">
                                    <a href="{{ url('/catalog/edit/' . $movie->id) }}">
                                        Editar
                                    </a>
                                </x-primary-button>

                                <x-primary-button>
                                    <a href="{{ url('/catalog') }}">
                                        < Volver al listado
                                    </a>
                                </x-primary-button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
