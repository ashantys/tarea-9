@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1 class="text-bold display-4 mb-4">Sobre Nosotros</h1>
@stop

@section('content')
<div class="container max-w-2xl mx-auto">
    <p class="text-muted">
        Somos una pequeña marca de ropa mexicana que se enorgullece de crear prendas de alta calidad con un toque único y auténtico. Nuestra inspiración proviene de la rica cultura y el patrimonio de México, y nos esforzamos por reflejar eso en cada una de nuestras creaciones.
    </p>

    <p class="text-muted mt-4">
        Desde nuestros humildes comienzos, nos hemos comprometido a utilizar materiales sostenibles y a trabajar con artesanos locales para crear prendas que no solo se vean hermosas, sino que también sean amigables con el medio ambiente y apoyen a las comunidades locales.
    </p>

    <p class="text-muted mt-4">
        Gracias por su apoyo y por elegir nuestra marca. ¡Estamos emocionados de seguir creando hermosas prendas que celebren la cultura y la belleza de México!
    </p>
    <div class="w-100 mt-5">
        <img src="https://images.pexels.com/photos/1595385/pexels-photo-1595385.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Imagen de nuestra marca" class="img-fluid rounded">
    </div>
</div>
@stop