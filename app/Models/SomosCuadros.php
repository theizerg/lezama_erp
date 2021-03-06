<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SomosCuadros extends Model
{
    protected $table = 'somos_cuadros';

    protected $dates = ['created_at','updated_at'];

    protected $fillable = [
       'nb_icono_color','nb_icono','nb_titulo','nb_cuerpo','fecha','status_id'
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
