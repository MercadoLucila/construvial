<?php

namespace App\Http\Controllers;

use App\Models\Machine;
use App\Models\Type;
use Illuminate\Http\Request;

class MachineController extends Controller
{
    public function traerMaquinas(){
        $maquinas = Machine::paginate(6);
        $tipos = Type::all();

        return view("maquinas", compact("maquinas","tipos"));
    }
}
