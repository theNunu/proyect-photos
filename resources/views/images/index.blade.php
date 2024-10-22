@extends('layouts.app-master')

@section('content')
  <!-- Formulario de búsqueda -->
  <div class="container mb-4">
    <form action="{{ route('images.search') }}" method="GET">
      <div class="form-group mb-3">
        <input type="text" name="query" class="form-control bg-white text-dark" placeholder="Buscar por imagen, etiqueta o categoría">
      </div>
      <button type="submit" class="btn btn-primary">Buscar</button>
    </form>
  </div>

  <!-- Contenedor de imágenes subidas -->
  <div class="container">
    <h1>Imágenes Subidas</h1>
    <div class="row">
      @foreach ($images as $image)
        <div class="col-md-4">
          <div class="card mb-4" style="height: 400px; display: flex; flex-direction: column;">
            <!-- Ajusta el tamaño de la tarjeta -->
            <img src="{{ asset('storage/' . $image->filename) }}" class="img-fluid" style="height: 200px; object-fit: cover;" alt="{{ $image->title }}">
            <!-- Imagen fija a 200px de alto -->
            <div class="card-body" style="background-color: #000; color: white; flex-grow: 1;">
              <!-- Fondo negro oscuro y texto blanco -->
              <h5 class="card-title">{{ $image->title }}</h5>
              <p class="card-text">{{ $image->description }}</p>
              <p><strong>Etiquetas:</strong>
                @foreach ($image->tags as $tag)
                  {{ $tag->name }}
                @endforeach
              </p>
              <!-- Mantén el botón al final de la tarjeta -->
              <div style="margin-top: auto;">
                <a href="{{ route('images.show', $image->id) }}" class="btn btn-light" style="background-color: #000; color:white">Ver Imagen y Comentarios</a>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection
