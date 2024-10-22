@extends('layouts.app-master')

@section('content')
<div class="container">
    <h1>Perfil de {{ $user->name }}</h1>
    <h2>Imágenes subidas</h2>
    <div class="row">
        @foreach ($images as $image)
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('storage/' . $image->filename) }}" alt="{{ $image->title }}">
                <div class="card-body">
                    <h5>{{ $image->title }}</h5>
                    <p>{{ $image->description }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection