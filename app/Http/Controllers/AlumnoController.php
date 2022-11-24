<?php

namespace App\Http\Controllers;

use App\Http\Resources\AlumnoResource;
use Illuminate\Http\Request;
use App\Models\Alumno;

class AlumnoController extends Controller{
    

    public function index(){
        $alumnoView = AlumnoResource::collection(Alumno::all()->paginate(5));
        return $alumnoView;
    }


    public function store(){

    }

    public function show(Request $request, Alumno $alumno){

    }


    public function update(Request $request, Alumno $alumno){

    }


    public function delete(Request $request, Alumno $alumno){

    }


}
