<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;


    protected $fillable = [
        'alm_codigo', 'alm_nombre', 'alm_edad', 'alm_sexo', 'alm_id_grd', 'alm_observation'
    ];



    public function grado(){
        return $this->belongsTo(Grado::class, 'alm_id_grd');
    }
}
