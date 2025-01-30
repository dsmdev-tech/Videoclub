<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Añadir Nueva Película') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('catalog.store') }}" class="space-y-4">
                        @csrf

                        <!-- Título -->
                        <div class="mb-4 flex justify-center">
                            <label for="title" class="block text-sm font-medium text-white">Título</label>
                        </div>

                        <div class="mb-4 flex justify-center">
                            <input type="text" id="title" name="title" value="{{ old('title') }}" class="text-black mt-1 block w-3/4 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" >
                        </div>

                        @error('title')
                            <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                        @enderror

                        <!-- Año -->
                        <div class="mb-4 flex justify-center">
                            <label for="year" class="block text-sm font-medium text-white">Año</label>
                        </div>
                        <div class="mb-4 flex justify-center">
                            <input type="text" id="year" name="year" value="{{ old('year') }}" class="text-black mt-1 block w-3/4 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" >
                        </div>

                        @error('year')
                            <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                        @enderror

                        <!-- Director -->
                        <div class="mb-4 flex justify-center">
                            <label for="director" class="block text-sm font-medium text-white">Director</label>
                        </div>
                        <div class="mb-4 flex justify-center">
                            <input type="text" id="director" name="director" value="{{ old('director') }}" class="text-black mt-1 block w-3/4 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" >
                        </div>

                        @error('director')
                            <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                        @enderror

                        <!-- Poster -->
                        <div class="mb-4 flex justify-center">
                            <label for="poster" class="block text-sm font-medium text-white">Poster</label>
                        </div>
                        <div class="mb-4 flex justify-center">
                            <input type="text" id="poster" value="{{ old('poster') }}" name="poster" class="text-black mt-1 block w-3/4 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" >
                        </div>

                        @error('poster')
                            <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                        @enderror

                        <!-- Resumen -->
                        <div class="mb-4 flex justify-center">
                            <label for="synopsis" class="block text-sm font-medium text-white">Resumen</label>
                        </div>
                        <div class="mb-4 flex justify-center">
                            <textarea id="synopsis" value="{{ old('synopsis')}}" name="synopsis" rows="4" class="text-black mt-1 block w-3/4 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" >{{ old('synopsis') }}</textarea>
                        </div>

                        @error('synopsis')
                            <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                        @enderror

                        <!-- Botón Añadir película -->
                        <div class="pt-10 flex justify-center gap-6">
                            <x-primary-button>
                                Añadir película
                            </x-primary-button>

                            <x-primary-button>
                                <a href="{{ url('/catalog') }}">
                                    < Volver
                                </a>
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
