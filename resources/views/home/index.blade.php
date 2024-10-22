@extends('layouts.app-master')

@section('content')
  {{-- <h1 class="container">Home</h1>
  @auth
    <p>Bienvenido {{ auth()->user()->name ?? auth()->user()->username }}, estas
      autnticado a la pagina</p>
    <p>
      <a href="/logout">Logout</a>
    </p>
  @endauth
  @guest
    <p>para ver el contenido <a href="/login">inicia sesion</a></p>
  @endguest --}}
  <div class="container">
    <h1>Buscar Imágenes</h1>
    
    <!-- Formulario de búsqueda con una sola barra -->
    <form action="{{ route('images.search') }}" method="GET">
    
      <div class="form-group mb-3">
        <input type="text" name="query" class="form-control bg-white text-dark" placeholder="Buscar por imagen, etiqueta o categoría">
      </div>
      <button type="submit" class="btn btn-primary">Buscar</button>
    </form>

    {{-- <!-- Resultados de la búsqueda -->
    @if(isset($images))
      <h2>Resultados de la búsqueda:</h2>
      @if($images->isEmpty())
        <p class="text-danger">No se encontraron resultados.</p>
      @else
        <div class="row">
          @foreach($images as $image)
            <div class="col-md-4">
              <div class="card mb-4">
                <img src="{{ asset('storage/' . $image->filename) }}" class="card-img-top" alt="{{ $image->title }}">
                <div class="card-body">
                  <h5 class="card-title">{{ $image->title }}</h5>
                  <p class="card-text">{{ $image->description }}</p>
                  <p><strong>Categoría:</strong> {{ $image->category->name }}</p>
                  <p><strong>Etiquetas:</strong> 
                    @foreach($image->tags as $tag)
                      {{ $tag->name }}@if(!$loop->last), @endif
                    @endforeach
                  </p>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      @endif
    @endif
  </div> --}}
@endsection
