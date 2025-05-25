@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Máquinas</h1>

    <div class="flex flex-col flex-wrap justify-start gap-6 w-1/3">
        @foreach ($maquinas as $maquina)
            @php
                $nombreTipoMaquina = 'default';
                foreach ($tipos as $tipo) {
                    if ($maquina->type_id == $tipo->id) {
                        $nombreTipoMaquina = str_replace(' ', '_', strtolower($tipo->name));
                        break;
                    }
                }
            @endphp



            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$nombreTipoMaquina}}</h5>
                        <h6 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$maquina->serial_number}}</h6>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$maquina->status_id}}</p>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>





            <div class="w-24 shadow-md rounded-lg">
                <div class="bg-white shadow-md rounded-lg p-4 flex w-1/3">
                    <!-- Texto: mitad izquierda -->
                    <div class="flex-1 pr-3 overflow-hidden flex flex-col justify-center w-1/3">
                        <h2 class="text-lg font-semibold truncate">{{ $maquina->model }}</h2>
                        <p class="text-sm text-gray-600 truncate">{{ $maquina->serial_number }}</p>
                        <p class="text-sm text-gray-600">Estado: {{ $maquina->status_id }}</p>
                        <a href="#" class="text-indigo-600 text-sm mt-2 hover:underline">Ver más</a>
                    </div>

                    <!-- Imagen: mitad derecha -->
                    <div class="flex-1 flex justify-end items-center overflow-hidden relative"
                        style="min-width: 0; max-width: 6rem; max-height: 6rem;">
                        <img src="{{ asset('storage/imagenes/' . $nombreTipoMaquina . '.jpg') }}" alt="Imagen de máquina"
                            class="object-cover w-full h-full max-w-full max-h-full rounded-md" />
                    </div>
                </div>
            </div>
        @endforeach
    </div>


    <div class="mt-8">
        {{ $maquinas->links() }}
    </div>
@endsection
