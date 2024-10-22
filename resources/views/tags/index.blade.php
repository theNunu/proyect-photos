@extends('layouts.app-master')

@section('content')
<div class="container">
    <h1>Lista de Etiquetas</h1>
    <a href="{{ route('tags.create') }}" class="btn btn-primary mb-3">crea nueva etiqueta</a>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tags as $tag)
                <tr>
                    <td>{{ $tag->name }}</td>
                    <td>
                        <a href="{{ route('tags.edit', $tag) }}" class="btn btn-warning">Editar</a>
                        {{-- <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
