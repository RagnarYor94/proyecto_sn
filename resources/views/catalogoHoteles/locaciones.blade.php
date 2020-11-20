@extends('layouts.menu')

@section('body')
<h1 class="title mt-3">Locaciones</h1>

<form action="#" method="POST">
    {{@csrf_field()}}
        <div class="form-group">
            <label class="text-primary p-1 font-weight-bold" for="nameLocacion">Nombre de la Locación</label>
            <input type="text" class="form-control" name="nombreCadena" id="nameLocacion" placeholder="Ingrese el nombre de la cadena">
        </div>
        <button type="submit" class="btn btn-primary btn-lg">Agregar</button>
    </form>


    <div class="d-flex flex-wrap bd-highlight mb-3 row-cols-5 mt-2  ">
    
    <div class="col m-1" >
        <div class="row">
        <div class="card border-dark col" style="max-width: 14rem;padding:0;">
        <div class="card-header  bg-secondary text-white">Nombre de la Cadena </div>
        <div class="card-body text-dark">
            <h5 class="card-title"></h5>
            <a href="#">
            
            <button type="button" class="btn btn-warning">Editar</button>
            </a>
            <form action="#" method="POST" class="d-inline">
            @method('DELETE')
            @csrf
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
        </div>
    </div>
    </div>

    
    
    </div>
@endsection