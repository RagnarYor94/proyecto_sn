<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Cadena;
use App\Hotel;
use DB;

class HotelController extends Controller
{
    function vista()
    {
        
        $cadena = App\Cadena::paginate();

        $cadenas=DB::table('cadenas')->join('hotels','hotels.cadena_id','=','cadenas.id')
        ->select('cadenas.cadena_hotelera','hotels.nombre_hotel','hotels.id')
        ->get();
        
        return view('catalogoHoteles.hoteles',compact('cadena','cadenas'));
    }
    function guardarHotel(Request $request)
    {
        $request->validate([
            'nombreHotel'=>'required',
            'cadenaHotelera' => 'required'
        ]);
        
        if(!$request){
        $cadena = App\Cadena::paginate();
        $hotel = App\Hotel::paginate();

        $guardarHotel = new App\Hotel;
        $guardarHotel->cadena_id = $request->cadenaHotelera;
        $guardarHotel->nombre_hotel = $request->nombreHotel;

        $guardarHotel->save();

        return back()->with('mensaje','Se agrego con exito el hotel');
        }else{
            echo 'Te falta selecionar campos';
        }    
    }
}
