@extends('layouts.menu')

@section('body')

    <h1 class="text-center">Editar Usuario {{ $user->name }}</h1>

    <form
        action="#{{--{{ route('usuarios.update', $user->id) }}--}}"
        method="POST">
        @method('PUT')
        @csrf
        <label for="nombre_rol">Nuevo Rol</label>
        <select name="nombre_rol" id="nombre_rol" class="form-control">
            @foreach ($roles as $petardos)
                <option value="{{ $petardos->nombre_rol }}">{{ $petardos->nombre_rol }}</option>
            @endforeach
        </select>
        {{--<input type="text" class="form-control" name="nombre_rol" id="nombre_rol"
            value="{{ $usuario->nombre_rol }}">--}}
        <label for="name">Nuevo nombre de usuario</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
        <label for="primer_nombre">Primer Nombre</label>
        <input type="text" class="form-control" id="primer_nombre" name="primer_nombre" value="{{ $user->primer_nombre }}">
        <div class=" mt-3">
            <button class="btn btn-warning" type="submit">Enviar nuevos datos</button>
        </div>
    </form>

@endsection
