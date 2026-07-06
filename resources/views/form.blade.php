@extends('layouts.app')

@section('content')

<h1>Formulario</h1>

<form action="{{ route('form.store') }}" method="POST">
    @csrf

    <label>
        Nombre:
        <br>
        <input type="text" name="nombre" value="{{ old('nombre') }}" required>
    </label>
    @error('nombre')
        <p style="color: red;">{{ $message }}</p>
    @enderror
    <br>

    <label>
        Correo:
        <br>
        <input type="email" name="correo" value="{{ old('correo') }}" required>
    </label>
    @error('correo')
        <p style="color: red;">{{ $message }}</p>
    @enderror
    <br>
    <br>

    <button type="submit">Enviar</button>
</form>

@endsection
