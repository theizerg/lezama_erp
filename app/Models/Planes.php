<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Planes extends Model
{
    protected $table = 'planes';

    protected $dates = ['created_at','updated_at'];

    protected $fillable = [
        'nb_titulo','nb_sub_titulo','fecha','status_id','nb_color','nb_cobro_plan'
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
