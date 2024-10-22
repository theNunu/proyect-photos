@extends('layouts.auth-master')

@section('content')
  {{-- <form action="/register" method="POST">
    @csrf
    <input type="email" name="email">
    <input type="text" name="username">
    <input type="password" name="password">
    <input type="password" name="password_confirmation">
    <input type="submit" value="Registrate">
  </form> --}}

  <form action="/register" method="POST">
    @csrf
    <h1>Crea una cuenta</h1>
    @include('layouts.partials.messages')
    <div class="form-floating mb-3">
      <input type="email" placeholder="name@example.com" name="email"
        class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <div id="emailHelp" class="form-text">We'll never share your email with
        anyone else.</div>
    </div>
    <div class="form-floating mb-3">
      <input type="text" placeholder="username" name="username"
        class="form-control" id="exampleInputPassword1">
      <label for="exampleInputPassword1" class="form-label">Username</label>

    </div>
    <div class="form-floating mb-3">
      <input type="password" placeholder="password" name="password"
        class="form-control" id="exampleInputPassword1">
      <label for="exampleInputPassword1" class="form-label">Password</label>
    </div>
    <div class="form-floating mb-3">
      <input type="password" placeholder="password" name="password_confirmation"
        class="form-control" id="exampleInputPassword1">
      <label for="exampleInputPassword1" class="form-label">Password</label>
    </div>

    <div class="mb-3">
      <a href="/login">inicia sesion</a>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
