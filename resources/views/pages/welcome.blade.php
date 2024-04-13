@extends('layouts.app')
@section('title', 'Dashboard')

@section('content_header')
<h1 class="text-bold mb-8">Nuestras colecciones</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 m-2">
            <div class="card">
                <a href="#" class="bg-light hover:bg-lighter text-center rounded p-4">
                    <img src="https://images.pexels.com/photos/4210860/pexels-photo-4210860.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Product 1" class="w-100 h-32 object-cover mb-4">
                    <h3 class="font-weight-bold">Verano</h3>
                    <p class="text-muted">Próximamente</p>
                </a>
            </div>
        </div>

        <div class="col-md-4 m-2">
            <div class="card">
                <a href="#" class="bg-light hover:bg-lighter text-center rounded p-4">
                    <img src="https://images.pexels.com/photos/45982/pexels-photo-45982.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Product 2" class="w-100 h-32 object-cover mb-4">
                    <h3 class="font-weight-bold">Invierno</h3>
                    <p class="text-muted">Próximamente</p>
                </a>
            </div>
        </div>

        <div class="col-md-4 m-2">
            <div class="card">
                <a href="#" class="bg-light hover:bg-lighter text-center rounded p-4">
                    <img src="https://images.pexels.com/photos/4066293/pexels-photo-4066293.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Product 3" class="w-100 h-32 object-cover mb-4">
                    <h3 class="font-weight-bold">Básicos</h3>
                    <p class="text-muted">Próximamente</p>
                </a>
            </div>
        </div>
    </div>
</div>
@stop
