@extends('layouts.menu')

@section('body')

<h1 class="title m-3">Hoteles</h1>

<form action="{{route('guardarHotel')}}" method="POST" class="m-3">
    {{@csrf_field()}}
        <div class="form-group">
            <label class="text-primary p-1 font-weight-bold" for="nameCadena">Nombre del Hotel</label>
            <input type="text" class="form-control" name="nombreHotel" placeholder="Ingrese el nombre de la cadena">
            <label class="text-primary p-1 font-weight-bold" for="cadenasHoteleras">Cadena Hotelera</label>
            <select class="form-control" name="cadenaHotelera" id="cadenasHoteleras">
                <option selected >Seleciona una Cadena</option>
                @foreach($cadena as $item)
                <option value="{{$item->id}}">{{$item->cadena_hotelera}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary btn-lg">Agregar</button>
    </form>

    @if (session('mensaje'))
        <div class="alert alert-success mt-2">
            {{ session('mensaje') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="container mt-3">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th class="text-center" scope="col">ID</th>
                    <th class="text-center" scope="col">Nombre Hotel</th>
                    <th class="text-center" scope="col">Cadena</th>
                    <th class="text-center" scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cadenas as $cadena)
                    <tr>
                        <th class="text-center" scope="row">{{ $cadena->id }}</th>
                        <td class="text-center">{{ $cadena->nombre_hotel }}</td>
                        <td class="text-center">{{ $cadena->cadena_hotelera }}</td>
                        <td><a href="" class="btn btn-warning">Editar</a></td>
                @endforeach
                </tr>

            </tbody>
        </table>
    </div>
@endsection
