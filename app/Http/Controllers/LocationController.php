<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Locacion;

class LocationController extends Controller
{
    function vista()
    {
        return view('catalogoHoteles.locaciones');
    }
    // function guardarLocacion(Request $request)
    // {
    //     $nuevaLocacion = new App\Locacion;

    //     $nuevaLocacion = 
    // }
}
