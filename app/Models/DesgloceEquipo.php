<?php

namespace App\Models;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;

class DesgloceEquipo extends Model
{   

     protected $table = 'desgloce_equipos';

    protected $dates = ['created_at','updated_at'];

    protected $fillable = [
        'name','last_name','ocupacion','red_social','photo','movimiento','status_id','tx_resena'
    ];




    public function getEncodeIDAttribute()

    {
        return \Hashids::encode($this->id);
    }
    public function getDisplayStatusAttribute()

    {
        return $this->status_id == 1 ? 'Publicado' : 'Sin publicar';
    }


    public function getDisplayStorageAttribute()

    {
        return \Storage::url($this->photo);
    }





    public function getDisplayNameAttribute()
    {
        $name      = explode(' ', $this->name);
        $last_name = explode(' ', $this->last_name);

        return title_case($name[0]).' '.title_case($last_name[0]);
    }

}
