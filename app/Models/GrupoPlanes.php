<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GrupoPlanes extends Model
{
    //grupo_planes
    protected $table = 'grupo_planes';

    protected $dates = ['created_at','updated_at'];

    protected $fillable = [
       'nb_titulo','nu_precio','fecha','status_id','nb_color','nb_cobro_plan'
    ];



     public function getEncodeIDAttribute()

    {
        return \Hashids::encode($this->id);
    }
    public function getDisplayStatusAttribute()

    {
        return $this->status_id == 1 ? 'Publicado' : 'Sin publicar';
    }
}
