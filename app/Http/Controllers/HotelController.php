<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Cadena;
use App\Hotel;

class HotelController extends Controller
{
    function vista()
    {
        $cadena = App\Cadena::paginate();
        $hotel = App\Hotel::paginate();

        return view('catalogoHoteles.hoteles',compact('cadena','hotel'));
    }
    function guardarHotel(Request $request)
    {
        $request->validate([
            'nombreHotel'=>'required',
            'cadenaHotelera' => 'required'
        ]);
        $cadena = App\Cadena::paginate();
        $hotel = App\Hotel::paginate();

        $guardarHotel = new App\Hotel;
        $guardarHotel->cadena_id = $request->cadenaHotelera;
        $guardarHotel->nombre_hotel = $request->nombreHotel;

        $guardarHotel->save();

        return back()->with('mensaje','Se agrego con exito el hotel');
    }
    public function inventado()
    {
        $this->hotel = Hotel::with('hotels')->get();

    }
    public function inventadaDos(){
        return view('catalogoHoteles.hoteles',[
            'detalle_cadena'=> $this->hotel
        ]);
    }
}
