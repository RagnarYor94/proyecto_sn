<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;
use App\Cadena;
class Hotel extends Model
{
     public function cadens()
    {
         return $this->belongsTo('App\Cadena','cadena_id');
    }
}
