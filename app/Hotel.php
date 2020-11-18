<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;
use App\Cadena;
class Hotel extends Model
{
<<<<<<< HEAD
    public function cadenas()
    {
        // return $this->belongsTo('App\Cadena','cadena_id');
=======
     public function cadens()
    {
         return $this->belongsTo('App\Cadena','cadena_id');
>>>>>>> 8b62a16f2c6645add932ae7d00a1cc5ad6562b5e
    }
}
