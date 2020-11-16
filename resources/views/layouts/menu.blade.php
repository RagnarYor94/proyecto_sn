@extends('layouts.app')

@section('content')
<div class="row" style="margin:0;">
    <div class="p-3 bg-dark col-2">
        <table class="table table-sm" >
            <thead>
                <tr class="text-white text-center">
                    <div class="dropdown text-center">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Menu
                        </a>

                        <div class="dropdown-menu menu" aria-labelledby="dropdownMenuLink">
                          <a class="dropdown-item text-white" href="#">Cadenas Hoteleras</a>
                          <a class="dropdown-item text-white" href="#">Locaciones</a>
                          <a class="dropdown-item text-white" href="#">Hoteles</a>
                          <a class="dropdown-item text-white" href="{{route('usuarios.index')}}">Usuarios</a>
                          <a class="dropdown-item text-white" href="{{route('roles.index')}}">Roles</a>
                        </div>
                      </div>
                </tr>
            </thead>
            <tbody class="text-white text-center">
                <tr>
                    <div class="dropdown text-center">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Configuracion
                        </a>
                      
                        <div class="dropdown-menu menu" aria-labelledby="dropdownMenuLink">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                      </div>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="col-10">
        @yield('body')
    </div>
</div>
@endsection