<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
<<<<<<< HEAD
use App\Cadena;
use App\Hotel;
use DB;
=======
use DB;
use App\Cadena;
use App\Hotel;
>>>>>>> 8b62a16f2c6645add932ae7d00a1cc5ad6562b5e

class HotelController extends Controller
{
    function vista()
    {
<<<<<<< HEAD
        
        $cadena = App\Cadena::paginate();

        $cadenas=DB::table('cadenas')->join('hotels','hotels.cadena_id','=','cadenas.id')
        ->select('cadenas.cadena_hotelera','hotels.nombre_hotel','hotels.id')
        ->get();
        
        return view('catalogoHoteles.hoteles',compact('cadena','cadenas'));
=======
        $cadena = App\Cadena::all();
        $cadena = App\Cadena::paginate();
        $hotel = App\Hotel::paginate();

        $cadenas = DB::table('cadenas')->join('hotels','hotels.cadena_id','=','cadenas.id')
        ->select('cadenas.cadena_hotelera','hotels.nombre_hotel','hotels.id')
        ->get();
        
        return view('catalogoHoteles.hoteles',compact('cadena','hotel','cadenas'));
>>>>>>> 8b62a16f2c6645add932ae7d00a1cc5ad6562b5e
    }
    function guardarHotel(Request $request)
    {
        $request->validate([
            'nombreHotel'=>'required',
            'cadenaHotelera' => 'required'
        ]);
<<<<<<< HEAD
        
        if(!$request){
        $cadena = App\Cadena::paginate();
=======
        //$cadena = App\Cadena::paginate();
>>>>>>> 8b62a16f2c6645add932ae7d00a1cc5ad6562b5e
        $hotel = App\Hotel::paginate();

        $guardarHotel = new App\Hotel;
        $guardarHotel->cadena_id = $request->cadenaHotelera;
        $guardarHotel->nombre_hotel = $request->nombreHotel;

        $guardarHotel->save();

        return back()->with('mensaje','Se agrego con exito el hotel');
<<<<<<< HEAD
        }else{
            echo 'Te falta selecionar campos';
        }    
    }
=======
    }

    
    
    
>>>>>>> 8b62a16f2c6645add932ae7d00a1cc5ad6562b5e
}
