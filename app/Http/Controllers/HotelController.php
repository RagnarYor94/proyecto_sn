<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use DB;
use App\Cadena;
use App\Hotel;
use App\Location;

class HotelController extends Controller
{
    public function vista()
    {
        
        $cadena = App\Cadena::paginate();
        $locaciones = App\Location::paginate();
        $hotel = App\Hotel::paginate(8);
        
        // $cadenas = DB::table('cadenas')->join('hotels','hotels.cadena_id','=','cadenas.id')
        // ->select('cadenas.cadena_hotelera','hotels.nombre_hotel','hotels.id')
        // ->get();

        // $query = DB::table('locations')->join('hotels','hotels.locacion_id','=','locations.id')
        // ->select('locations.localidad_nombre')
        // ->union($cadenas)
        // ->get(); 

        $query = DB::table('hotels')->join('cadenas','cadenas.id','=','hotels.cadena_id')
        ->join('locations','locations.id','=','hotels.locacion_id')
        ->select('cadenas.cadena_hotelera','hotels.nombre_hotel','hotels.id','locations.localidad_nombre')
        ->get();
        
        return view('catalogoHoteles.hoteles',compact('cadena','hotel','locaciones','query'));
    }
    public function guardarHotel(Request $request)
    {

            $guardarHotel = new App\Hotel;
            $guardarHotel->cadena_id = $request->cadenaHotelera;
            $guardarHotel->nombre_hotel = $request->nombreHotel;
            $guardarHotel->locacion_id =$request->locacionHotelera;

            $guardarHotel->save();

            return back()->with('mensaje','Se agrego con exito el hotel');

    }
    function editarHotel($id)
    {
        
        $hotel = App\Hotel::FindOrFail($id);
        $cadenas = App\Cadena::paginate();
        $locaciones = App\Location::paginate();
        // $db = DB::table('hotels')->where('id',$id)->value('nombre_hotel');
        
        return view('catalogoHoteles.editarHoteles',compact('cadenas','hotel','locaciones'));
    }
     function actualizarHotel(Request $request,$id)
    {
        $hotel = App\Hotel::findOrFail($id);
        $hotel->nombre_hotel = $request->nameHotel;
        $hotel->cadena_id = $request->idCadena;
        $hotel->locacion_id = $request->idLocacion;

        $hotel->save();

        return redirect('hoteles')->with('mensaje','Se actualizo el registro del Hotel.');
    }
     function eliminarHotel($id)
    {
        $eliminarCadena = App\Hotel::findOrFail($id);
        $eliminarCadena->delete();

        return back()->with('mensaje','Se elimino el hotel correctamente');
    }

}