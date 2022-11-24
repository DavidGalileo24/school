<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;

    protected $fillable = [
        'mat_nombre'
    ];


    public function materiasxgrados()
    {
        return $this->belongsToMany(Grado::class, 'mxg_materiasxgrado');
    }
}
