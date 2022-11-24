<?php

namespace App\Http\Controllers;

use App\Http\Resources\GradoResource;
use App\Models\Grado;
use Illuminate\Http\Request;

class GradoController extends Controller
{
    public function index(){
        $gradoView = GradoResource::collection(Grado::all()->paginate(5));
        return $gradoView;
    }


    public function store(Request $request){
        $grado = Grado::create($request->all());
        $grado->materiasxgrados()->attach($grado->id);
        return redirect()->route('grado.index')->with('success','Grado agregado satisfactoriamente');
    }

    public function show(Grado $grado){
        return GradoResource::make($grado);
    }


    public function update(Request $request, Grado $grado){
        $grado->update($request->all());
        return redirect()->route('grado.index')->with('success','Grado actualizado satisfactoriamente');
    }


    public function delete(Grado $grado){
        $grado->delete();
        return redirect()->route('grado.index')->with('success','Grado eliminado satisfactoriamente');
    }
}
