<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
     protected $table = 'cursos';

    protected $dates = ['created_at','updated_at'];

    protected $fillable = [
        'grupo_planes_id','tx_descripcion','fecha','status_id'
    ];



    public function getEncodeIDAttribute()

    {
        return \Hashids::encode($this->id);
    }
    public function getDisplayStatusAttribute()

    {
        return $this->status_id == 1 ? 'Publicado' : 'Sin publicar';
    }

    public function grupoplanes(){
        return $this->belongsTo('App\Models\GrupoPlanes','grupo_planes_id');
    }


}
