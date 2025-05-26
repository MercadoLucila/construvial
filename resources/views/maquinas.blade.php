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
            @endphp
            <div class="bg-white rounded-2xl shadow-md p-6 hover:shadow-xl transition duration-300">
                <div class="p-5 flex-row">
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
                        <div class="max-width: 150px bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                            <img class="rounded-t-lg" src="{{ asset('storage/imagenes/' . $nombreTipoMaquina . '.jpg') }}" alt="" />
                            </a>
                        </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="mt-8">
        {{ $maquinas->links() }}
    </div>
@endsection 



        
            



            




