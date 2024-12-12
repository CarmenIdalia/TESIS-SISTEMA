
@extends('adminlte::page')

@section('title', 'Tamaño')

@section('content')
<div class="p-4 container-fluid">
    <div class="mb-4 bg-white rounded-lg shadow-sm">
        <div class="px-6 py-4 border-b border-gray-200">
            <h1 class="text-2xl font-bold text-gray-800">Editar Tamaño</h1>
            <p class="mt-1 text-sm text-gray-600">Modifica los detalles del tamaño según sea necesario</p>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow-sm">
        <div class="p-6">
            <form method="POST" action="{{ route('size.update', $size) }}" role="form">
                @method('PATCH')
                @csrf
                @include('sizes.form')
            </form>
        </div>
    </div>
</div>
@stop

@section('css')
    <style>
        .content-wrapper {
            background-color: #f8fafc;
        }
    </style>
@stop