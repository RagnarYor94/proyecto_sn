@extends('layouts.app')

@section('content')
<div class="row" style="margin:0;">
    <div class="p-3 bg-dark col-2">
        <table class="table table-sm" >
            <thead>
                <tr class="text-white text-center">
                    <th scope="col"><span class="text-strong">Menu</span></th>
                </tr>
            </thead>
            <tbody class="text-white text-center">
                <tr>
                    <td>Configuracion</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="col-10">
        @yield('body')
    </div>
</div>
@endsection