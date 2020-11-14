@extends('layouts.app')

@section('content')
<div class="row" style="margin:0; height:91vh;">
    <div class="p-3 bg-dark col-2">
        <table class="table table-sm" >
            <thead>
                <tr class="text-white text-center">
                    <th scope="col"><span class="text-strong">Menu</span></th>
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
                                
                                    <p class="border-bottom text-center text-white" style="margin:8px 0 0 0;">Cadenas hoteleras</p>
                                    <p class="border-bottom text-center text-white" style="margin:8px 0 0 0;">Locaciones</p>
                                    <p class="text-center text-white" style="margin:8px 0 0 0;">Hoteles</p>
                                
                        </div>
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