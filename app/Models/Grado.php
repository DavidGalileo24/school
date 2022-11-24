<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grado extends Model
{
    use HasFactory;

    protected $fillable = [
        'grd_nombre'
    ];


    public function alumno(){
        return $this->hasOne(Alumno::class);
    }


    public function materiasxgrados()
    {
        return $this->belongsToMany(Materia::class, 'mxg_materiasxgrado');
    }
}
