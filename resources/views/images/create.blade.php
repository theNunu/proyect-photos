@extends('layouts.app-master')

@section('content')
<div class="container mt-5">
    <h1 class="text-center text-white">Subir Nueva Imagen</h1>
    <div class="card border-light" style="background-color: black; border: 1px solid white;">
        <div class="card-body">
            <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title" class="text-white">Título</label>
                    <input type="text" name="title" style="background-color: black" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="image" class="text-white">Seleccionar Imagen</label>
                    <input type="file" name="image" class="form-control-file" id="image" required onchange="previewImage(event)">
                </div>

                <!-- Previsualización de la imagen seleccionada -->
                <div class="form-group mt-3">
                    <img id="image-preview" style="max-width: 300px; display: none; border: 1px solid white;" />
                </div>

                <div class="form-group">
                    <label for="description" class="text-white">Descripción</label>
                    <textarea name="description" class="form-control" style="background-color: black; color: white;"></textarea>
                </div>
                <div class="form-group">
                    <label for="tags" class="text-white" >Etiquetas</label>
                    <select name="tags[]" class="form-control" style="background-color: black">
                        @foreach ($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="category" class="text-white">Categoría</label>
                    <select name="category_id" class="form-control" style="background-color: black">
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <br>

                <button type="submit" class="btn btn-primary">Subir</button>
            </form>
        </div>
    </div>
</div>

<!-- Script para previsualización de la imagen -->
<script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('image-preview');
            output.src = reader.result;
            output.style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
@endsection
