<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Champ;

class ChampsController extends Controller
{
    public function index () {
        $champs = Champ::select('id', 'campeon', 'clase', 'fecha_lanzamiento', 'esencia_azul', 'riot_points')->get();
        return $champs;
    }

    public function show($id){
        $champ = Champ::select('id', 'evidence')->where('id', $id)->first();
        return $champ;
    }
}
