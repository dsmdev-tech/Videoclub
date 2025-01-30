<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Modificar Película') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('catalog.update', $movie->id) }}" method="POST" class="space-y-4">
                        @csrf
                        <!-- Campo oculto para PUT -->
                        @method('PUT')

                        <!-- Título -->
                        <div class="mb-4 flex justify-center">
                            <label for="title" class="block text-sm font-medium text-white">Título</label>
                        </div>
                        <div class="mb-4 flex justify-center">
                            <input value="{{ old('title', $movie->title) }}" type="text" id="title" name="title" class="text-gray-900 font-semibold mt-1 block w-3/4 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        </div>

                        @error('title')
                        <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                        @enderror

                        <!-- Año -->
                        <div class="mb-4 flex justify-center">
                            <label for="year" class="block text-sm font-medium text-white">Año</label>
                        </div>
                        <div class="mb-4 flex justify-center">
                            <input value="{{ old('year', $movie->year) }}" type="text" id="year" name="year" class="text-gray-900 font-semibold mt-1 block w-3/4 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        </div>

                        @error('year')
                        <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                        @enderror

                        <!-- Director -->
                        <div class="mb-4 flex justify-center">
                            <label for="director" class="block text-sm font-medium text-white">Director</label>
                        </div>
                        <div class="mb-4 flex justify-center">
                            <input value="{{ old('director', $movie->director) }}" type="text" id="director" name="director" class="text-gray-900 font-semibold mt-1 block w-3/4 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        </div>

                        @error('director')
                        <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                        @enderror

                        <!-- Poster -->
                        <div class="mb-4 flex justify-center">
                            <label for="poster" class="block text-sm font-medium text-white">Poster</label>
                        </div>
                        <div class="mb-4 flex justify-center">
                            <input value="{{ old('poster', $movie->poster) }}" type="text" id="poster" name="poster" class="text-gray-900 font-semibold mt-1 block w-3/4 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        </div>

                        @error('poster')
                        <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                        @enderror

                        <!-- Resumen -->
                        <div class="mb-4 flex justify-center">
                            <label for="synopsis" class="block text-sm font-medium text-white">Resumen</label>
                        </div>
                        <div class="mb-4 flex justify-center">
                            <textarea id="synopsis" name="synopsis" rows="4" class="text-gray-900 font-semibold mt-1 block w-3/4 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>{{ old('poster', $movie->synopsis) }}</textarea>
                        </div>

                        @error('synopsis')
                        <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                        @enderror

                        <!-- Botón Añadir película -->
                        <div class="pt-10 flex justify-center gap-6">
                            <x-primary-button>
                                <a>
                                    Modificar Película
                                </a>
                            </x-primary-button>

                            <x-primary-button>
                                <a href="{{ url('/catalog') }}">
                                     Volver
                                </a>
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
