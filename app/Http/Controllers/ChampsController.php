<?php

namespace App\Http\Controllers;

use App\Models\Champ;
use Illuminate\Http\Request;


class ChampsController extends Controller
{
    public function index(){
        $champs = Champ::all();
        $argumentos = array();
        $argumentos['champs'] = $champs;
        return view("champs.index", $argumentos);
    }

    public function create(){
        return view('champs.create');
    }

    public function store(Request $request){
        $nuevoChamp = new Champ();
        $nuevoChamp->campeon = $request->input('campeon');
        $nuevoChamp->clase = $request->input('clase');
        $nuevoChamp->fecha_lanzamiento = $request->input('fecha_lanzamiento');
        $nuevoChamp->esencia_azul = $request->input('esencia_azul');
        $nuevoChamp->riot_points = $request->input('riot_points');

        if($request->file('evidence')){
            $path_evidence->file('evidence')->store('public/evidences');

            if($path_evidence){
                $nuevoChamp->evidence = $request->file('evidence')->hashName();
            }
        }

        if($nuevoChamp->save()){
            return redirect()->route('champs.create')->with('exito', 'campeon creado con exito');;
        }
        return redirect()->route('champ.create')->with('exito', 'campeon creado creado con exito');
    }

    public function edit($id) {
        $champ = Champ::find($id);
        
        if($champ){
            $argumentos = array();
            $argumentos['champ'] = $champ;
            return view('champs.edit', $argumentos);
        }
        return redirect()->route('champs.index')->with('error', 'No existe el champ');
    }

    public function update($id, Request $request) {
        $champ = Champ::Find($id);
        if($champ){
            $champ->campeon = $request->input('campeon');
            $champ->clase = $request->input('clase');
            $champ->esencia_azul = $request->input('esencia_azul');
            $champ->riot_points = $request->input('riot_points');

            if($request->file('evidence')){
                $path_evidence = $request->file('evidence')->store('public/evidences');
                if($path_evidence) {
                    $champ->evidence = $request->file('evidence')->hashName();
                }
            }

            if($champ->save()) {
                return redirect()->route('champs.index', $champ->id)->with('exito', 'Se actualizo correctamente el campeon');

            }
            return redirect()->route('champs.edit', $champ->id)->with('error', 'no se puede actualizar');
            
        }
        return redirect()->route('champs.index', $champ->id)->with('error', 'No existe el campeon');
    }

    public function destroy($id) {
        $champ = Champ::find($id);
        if ($champ) {
            if($champ->delete()) {
                return redirect()->route('champs.index')->with('exito', 'champ eliminado');
            }
            return redirect()->route('champs.index')->with('error', 'No se encontro el champ');
        }
        return redirect()->route('champs.index')->with('error', 'No se encontro el champ');
    }

}
