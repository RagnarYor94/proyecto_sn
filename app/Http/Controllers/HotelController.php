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
    public function vista()
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
    public function guardarHotel(Request $request)
    {
        $request->validate([
            'nombreHotel'=>'required',
            'cadenaHotelera' => 'required'
        ]);
<<<<<<< HEAD
<<<<<<< HEAD
        
        if(!$request){
        $cadena = App\Cadena::paginate();
=======
        //$cadena = App\Cadena::paginate();
>>>>>>> 8b62a16f2c6645add932ae7d00a1cc5ad6562b5e
        $hotel = App\Hotel::paginate();
=======
        if($request->cadenaHotelera != ''){
            if(!$request){
            $cadena = App\Cadena::paginate();
            $hotel = App\Hotel::paginate();
>>>>>>> 9a320b23e19968c3b3214b961e9bff4fb4cdfa0e

            $guardarHotel = new App\Hotel;
            $guardarHotel->cadena_id = $request->cadenaHotelera;
            $guardarHotel->nombre_hotel = $request->nombreHotel;

            $guardarHotel->save();

<<<<<<< HEAD
        return back()->with('mensaje','Se agrego con exito el hotel');
<<<<<<< HEAD
=======
            return back()->with('mensaje','Se agrego con exito el hotel');
            }else{
                return back()->with('mensajeError','Completa los campos');
            }    
>>>>>>> 9a320b23e19968c3b3214b961e9bff4fb4cdfa0e
        }else{
            return back()->with('mensajeError','Completa los campos');
        }
    }
    public function editarHotel($id)
    {
        $idHotel = $id;
        $cadenas = App\Cadena::paginate();
        $db = DB::table('hotels')->where('id',$id)->value('nombre_hotel');
        // exit($idHotel);
        
        return view('catalogoHoteles.editarHoteles',compact('db','cadenas','idHotel'));
    }
    public function actualizarHotel(Request $request,$id)
    {
        $hotel = App\Hotel::findOrFail($id);
        $hotel->nombre_hotel = $request->nameHotel;
        $hotel->cadena_id = $request->idCadena;

        $hotel->save();

        return redirect('hoteles')->with('mensaje','Se actualizo el registro del Hotel.');
    }
    public function eliminarHotel($id)
    {
        $eliminarCadena = App\Hotel::findOrFail($id);
        $eliminarCadena->delete();

        return back()->with('mensaje','Se elimino el hotel correctamente');
    }
=======
    }

    
    
    
>>>>>>> 8b62a16f2c6645add932ae7d00a1cc5ad6562b5e
}
