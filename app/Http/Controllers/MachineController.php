<?php

namespace App\Http\Controllers;

use App\Models\Machine;
use Illuminate\Http\Request;

class MachineController extends Controller
{
    public function traerMaquinas(){
        $maquinas = Machine::all();

        return view("maquinas", compact("maquinas"));
    }
}
