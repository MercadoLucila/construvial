@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Máquinas</h1>
    <div class="grid grid-cols-1 sm:grid-cols-4 lg:grid-cols-3 gap-6 p-6">
        @foreach ($maquinas as $maquina)
            @php
                $nombreTipoMaquina = 'default';
                foreach ($tipos as $tipo) {
                    if ($maquina->type_id == $tipo->id) {
                        $nombreTipoMaquina = $tipo->name;
                        break;
                    }
                }

                foreach ($estatus as $stat) {
                    if ($maquina->status_id == $stat->id) {
                        $status = $stat->name;
                        $statusDescription = $stat->description;
                    }
                }

                switch ($status) {
                    case 'Disponible':
                        $color = 'bg-green-600';
                        break;
                    case 'Deshabilitada':
                        $color = 'bg-red-600';
                        break;
                    case 'En mantenimiento':
                        $color = 'bg-yellow-600';
                        break;
                    case 'En camino':
                        $color = 'bg-yellow-600';
                        break;
                    default:
                        $color = 'bg-blue-700';
                        break;
                }
            @endphp
            <div class="bg-white rounded-2xl shadow-md p-4 hover:shadow-xl transition duration-300">
                <div class="flex flex-row justify-between items-center h-full">

                    {{-- Columna izquierda: Texto --}}
                    <div class="w-1/2 pr-2 flex flex-col gap-2">
                        <a href="#">
                            <h5 class="text-lg font-bold tracking-tight text-gray-900 dark:text-white mb-1">
                                {{ $nombreTipoMaquina }}
                            </h5>
                            <h6 class="text-base font-semibold tracking-tight text-gray-900 dark:text-white mb-1">
                                {{ $maquina->serial_number }}
                            </h6>
                        </a>
                        <p class="text-sm dark:text-gray-400 mb-2">
                            {{ $status }}
                        </p>
                        <p class="text-sm text-gray-700 dark:text-gray-400 mb-2">
                            {{ $statusDescription }}
                        </p>
                        <p href="#"
                            class="inline-flex items-center px-3 py-1 text-sm font-medium text-white {{ $color }} rounded-md hover:{{ $color }} focus:ring-2 focus:outline-none focus:ring-blue-300 dark:{{ $color }} dark:hover:{{ $color }} dark:focus:ring-blue-800">
                            {{ $status }}
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </p>
                        <div class="flex space-x-4 mt-4">
                            {{-- Botón Editar --}}
                            <a href="{{ route('maquinas.edit', $maquina->id) }}"
                                class="px-4 py-2 bg-yellow-200 text-yellow-800 font-semibold rounded hover:bg-yellow-300 transition">
                                Editar
                            </a>

                            {{-- Botón Eliminar --}}
                            <form action="{{ route('maquinas.destroy', $maquina->id) }}" method="POST"
                                onsubmit="return confirm('¿Estás segura de que querés eliminar esta máquina?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="px-4 py-2 bg-red-200 text-red-800 font-semibold rounded hover:bg-red-300 transition">
                                    Eliminar
                                </button>
                            </form>
                        </div>

                    </div>

                    {{-- Columna derecha: Imagen --}}
                    <div class="w-1/2 pl-2">
                        <img class="w-full h-42 object-cover rounded-md border border-gray-200 shadow-sm dark:border-gray-700"
                            src="{{ asset('storage/imagenes/' . $nombreTipoMaquina . '.jpg') }}"
                            alt="Imagen de {{ $nombreTipoMaquina }}" />
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="mt-8 flex items-center justify-center ml-2">
        {{ $maquinas->links() }}
    </div>
@endsection
