<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;
use App\Hotel;
class Cadena extends Model
{
     public function hotels()
     {
         return $this->hasMany('App\Hotel');
     }
}
