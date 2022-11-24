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


    public function store(Request $request){
        Alumno::create($request->all());
        return redirect()->route('grado.index')->with('success','Grado agregado satisfactoriamente');
    }

    public function show(Alumno $grado){
        return AlumnoResource::make($grado);
    }


    public function update(Request $request, Alumno $grado){
        $grado->update($request->all());
        return redirect()->route('grado.index')->with('success','Grado actualizado satisfactoriamente');
    }


    public function delete(Alumno $grado){
        $grado->delete();
        return redirect()->route('grado.index')->with('success','Grado eliminado satisfactoriamente');
    }


}
