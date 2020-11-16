@extends('layouts.app')

@section('content')
<div class="row" style="margin:0; height:91vh;">
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
                    <td >
                        <div class="btn-group dropright">
                            <p type="button" class="bg-transparent text-white dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Configuración
                            </p>
                            <div class="dropdown-menu bg-secondary rounded-lg" style="padding:0;">
                                
                                    <p class="border-bottom text-center text-white" style="margin:8px 0 0 0;">
                                        <a class="text-decoration-none text-white" href="{{route('catalogoHoteles.cadena')}}">Cadenas hoteleras</a>
                                    </p>
                                    <p class="border-bottom text-center text-white" style="margin:8px 0 0 0;"> 
                                        <a class="text-decoration-none text-white" href="#">Locaciones</a>
                                    </p>
                                    <p class="text-center text-white" style="margin:8px 0 0 0;">
                                        <a class="text-decoration-none text-white" href="#">Hoteles</a>
                                    </p>
                                
                        </div>
                    </td>
                </tr>
                <tr>
                
                <td>
                        <p >
                                Usuarios
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="col-10">
        @yield('body')
    </div>
</div>
@endsection