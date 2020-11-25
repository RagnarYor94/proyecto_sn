<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Location;

class LocationController extends Controller
{
    function vista()
    {
        $locaciones = App\Location::paginate(8);
        return view('catalogoHoteles.locaciones',compact('locaciones'));
    }
    function guardarLocacion(Request $request)
    {   
        

        if($request->nombreLocacion != ''){
            $locaciones = App\Location::paginate(8);
            $nuevaLocacion = new App\Location;

            $nuevaLocacion->localidad_nombre = $request->nombreLocacion;

            $nuevaLocacion->save();

            return back()->with('mensaje','Se guardo el mensaje correctamente');
        } else {
            
            $locaciones = App\Location::paginate(8);

            return back()->with('mensajeError', 'Ingrese el campo requerido');
        }
    }
    function editarLocacion($id)
    {
        $locacion = App\Location::FindOrFail($id);

        return view('catalogoHoteles.editarLocaciones', compact('locacion'));
    }
    function actualizarLocacion(Request $request,$id)
    {
        $locacion = App\Location::FindOrFail($id);
        $locacion->localidad_nombre = $request->nameLocacion;
        $locacion->save();

        return redirect('locaciones')->with('mensaje','Locacion actualizada correctamente');
    }
    function eliminarLocacion($id)
    {
        $eliminarLocacion = App\Location::FindOrFail($id);
        $eliminarLocacion->delete();

        return back()->with('mensaje','Locación eliminado correctamente');
    }
}
