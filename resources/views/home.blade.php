@extends('layouts.app')

@section('title', 'laravel')

@push('css')
    <style>
        body {
            background-color: aliceblue
        }
    </style>
@endpush

@section('content')
    <div class="max-w-4xl mx-auto px-4">
        <x-alert type="dark" class='mb-4'>
            <x-slot name="title">
                Titulo
            </x-slot>
            Contenido de la alerta papu
        </x-alert>
        <h1>Bienvenido a la página principal</h1>
    </div>
@endsection
