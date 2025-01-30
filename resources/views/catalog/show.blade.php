<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Detalle de la Película') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900 dark:text-gray-100 flex flex-col items-center">

                    <div class="flex w-full m-5">
                        <!-- Columna de la izquierda: Imagen de la película (35% de ancho) -->
                        <div class="w-[35%] m-5">
                            <img src="{{ $movie['poster'] }}" alt="Imagen de la película" class="w-full h-auto rounded-md mr-4" />
                        </div>

                        <!-- Columna de la derecha: Información de la película (65% de ancho) -->
                        <div class="w-[65%] m-5">
                            <h1 class="text-center text-2xl font-semibold">{{ $movie['title'] }}</h1>
                            <p class="pt-14 pl-10"><strong>Año:</strong> {{ $movie['year'] }}</p>
                            <p class="pt-8 pl-10"><strong>Director:</strong> {{ $movie['director'] }}</p>
                            <p class="pt-8 pl-10"><strong>Resumen:</strong> {{ $movie['synopsis'] }}</p>


                            <div class="m-4 flex flex-wrap space-x-4 justify-start gap-4">
                                <!-- Estado de la película -->
                                @if ($movie->rented)
                                    <p class="pt-8 pb-6 w-full"><strong>Estado:</strong> Película actualmente alquilada</p>

                                    <!-- Botón Devolver -->
                                    <form action="{{ route('catalog.return', $movie->title) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <x-primary-button class="dark:bg-red-700 dark:text-white h-11">
                                            Devolver
                                        </x-primary-button>
                                    </form>
                                @else
                                    <p class="pt-8 pb-6 w-full pl-6"><strong>Estado:</strong> Película disponible</p>

                                    <!-- Botón Alquilar -->
                                    <x-primary-button class="dark:bg-green-700 dark:text-white h-11">
                                        <a href="{{ url('/catalog/rentConfirm/' . $movie->id) }}" class="w-full h-full flex items-center justify-center">
                                            Alquilar Película
                                        </a>
                                    </x-primary-button>
                                @endif

                                <!-- Botón Editar -->
                                <x-primary-button class="dark:bg-amber-300 h-11">
                                    <a href="{{ route('catalog.edit', $movie->id) }}">
                                        Editar
                                    </a>
                                </x-primary-button>

                                <!-- Botón Eliminar -->
                                <form action="{{ route('catalog.destroy', $movie->id) }}" method="POST" onsubmit="return confirm('¿Seguro que quieres eliminar esta película?');">
                                    @csrf
                                    @method('DELETE')
                                    <x-primary-button class="dark:bg-red-500 dark:text-white h-11">
                                        Eliminar
                                    </x-primary-button>
                                </form>

                                <!-- Botón Volver al listado -->
                                <x-primary-button class="h-11">
                                    <a href="{{ route('catalog.index') }}">
                                        &lt; Volver al listado
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

{{--<!-- Botón Alquilar -->
<form action="{{ route('catalog.rent', $movie->id) }}" method="POST">
    @csrf
    @method('PUT')
    <x-primary-button class="dark:bg-green-700 dark:text-white h-11">
        Alquilar Película
    </x-primary-button>
</form>--}}
