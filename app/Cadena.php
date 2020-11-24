<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;
use App\Hotel;
class Cadena extends Model
{
<<<<<<< HEAD
    public function hotels()
    {
        // return $this->hasMany('App\Hotel','cadena_id');  
    }
=======
     public function hotels()
     {
         return $this->hasMany('App\Hotel','cadena_id');
     }
>>>>>>> 8b62a16f2c6645add932ae7d00a1cc5ad6562b5e
}
