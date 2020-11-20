@extends('layouts.menu')

@section('body')

    <h1 class="text-center">Crear nuevo Usuario</h1>

    <form method="POST"
        action="#{{--{{ route('usuarios.update', $user->id) }}--}}">
        @csrf
        <label for="nombre_rol">Nuevo Rol</label>
        <select name="nombre_rol" id="nombre_rol" class="form-control">
            @foreach ($roles as $petardos)
                <option value="Selecciona el rol">{{ $petardos->nombre_rol }}</option>
            @endforeach
        </select>
        <label for="name">Nuevo nombre de usuario</label>
        <input type="text" class="form-control" id="name" name="name">
        <label for="primer_nombre">Primer Nombre</label>
        <input type="text" class="form-control" id="primer_nombre" name="primer_nombre">
        <label for="apellido">Apellido</label>
        <input type="text" class="form-control" id="apellido" name="apellido">
        <div class=" mt-3">
            <button class="btn btn-warning" type="submit">Enviar nuevos datos</button>
        </div>
    </form>

@endsection
