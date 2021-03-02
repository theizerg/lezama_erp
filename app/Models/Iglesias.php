<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Iglesias extends Model
{
    

public function tipolocal(){
        return $this->belongsTo('App\Models\TipoLocal','tipo_local_id');
    }


public function pastor(){
        return $this->belongsTo('App\Models\Pastor','pastor_id');
    }


public function estado(){
        return $this->belongsTo('App\Models\Estado','estado_id');
    }

 public function ciudad(){
        return $this->belongsTo('App\Models\Pais','_id');
    }



 }
