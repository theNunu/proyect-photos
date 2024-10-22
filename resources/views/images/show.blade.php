@extends('layouts.app-master')

@section('content')
  <div class="container">
    <h1>{{ $image->title }}</h1>

    <!-- Imagen en tamaño grande -->
    <div class="image-container">
      <img src="{{ asset('storage/' . $image->filename) }}" class="img-fluid"
        style="height: 200px; object-fit: cover;" class="img-fluid"
        alt="{{ $image->title }}" style="max-width: 100%; height: auto;">
    </div>

    <!-- Descripción de la imagen -->
    <p>{{ $image->description }}</p>

    <!-- Comentarios -->
    <div class="comments-section">
      <h2>Comentarios</h2>

      <!-- Mostrar comentarios -->
      @if ($image->comments->isEmpty())
        <p>Esta imagen no tiene comentarios.</p>
      @else
        @foreach ($image->comments as $comment)
          <div class="comment-box"
            style="border: 1px solid white; padding: 10px; margin-bottom: 10px;">
            <p>esccrito por: <strong>{{ $comment->user->username }}:</strong><br>
              {{ $comment->comment }}</p>
            <p><small>{{ $comment->created_at->diffForHumans() }}</small></p>
          </div>
        @endforeach
      @endif
    </div>

    <!-- Formulario para añadir un comentario -->
    <div class="add-comment">
      <h3>Añadir un comentario</h3>
      <form action="{{ route('comments.store', ['image' => $image->id]) }}"
        method="POST">
        @csrf
        <input type="hidden" name="image_id" value="{{ $image->id }}">
        <div class="form-group">
          <textarea name="comment" class="form-control" rows="3"
            placeholder="Escribe tu comentario"></textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Añadir Comentario</button>
      </form>
    </div>
  </div>
@endsection
