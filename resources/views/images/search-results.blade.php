@extends('layouts.app-master')

@section('content')
  @if(isset($noResults) && $noResults)
    <div class="alert alert-warning">
      No se encontraron resultados para su búsqueda.
    </div>
  @else
    <h1>Resultados de la Búsqueda</h1>
    <div class="row">
      @foreach($images as $image)
        <div class="col-md-4">
          <div class="card mb-4">
            <img src="{{ asset('storage/' . $image->filename) }}" class="card-img-top" alt="{{ $image->title }}">
            <div class="card-body">
              <h5 class="card-title">{{ $image->title }}</h5>
              <p class="card-text">{{ $image->description }}</p>
              <a href="{{ route('images.show', $image->id) }}" class="btn btn-primary">Ver Imagen</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  @endif
@endsection
