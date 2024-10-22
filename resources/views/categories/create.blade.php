@extends('layouts.app-master')

@section('content')
<div class="container">
    <h1>Nueva Categoría</h1>
    
    <form action="{{ route('categories.store') }}" method="POST"> <!-- formularion to create an etiqueta-->
        @csrf
        <div class="form-group">
            <label for="name" >Nombre de la Categoría</label>
            <input type="text" name="name"  style="background-color: black" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
</div>
@endsection
