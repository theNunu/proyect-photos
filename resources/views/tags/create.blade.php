@extends('layouts.app-master')

@section('content')
<div class="container">
    <h1>Nueva Etiqueta</h1>
    <form action="{{ route('tags.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nombre de la Etiqueta</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
</div>
@endsection
