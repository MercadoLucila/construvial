<?php

namespace App\Http\Controllers;

use App\Models\Machine;
use App\Models\Status;
use App\Models\Type;
use Illuminate\Http\Request;

class MachineController extends Controller
{
    public function traerMaquinas(){
        $maquinas = Machine::paginate(6);
        $tipos = Type::all();
        $estatus = Status::all();

        return view("maquinas", compact("maquinas","tipos","estatus"));
    }

    public function delete($id){
        $maquina = Machine::findOrFail($id);
        $maquina->delete();

        return redirect()->route("maquinas")->with('success','Máquina eliminada correctamente');
    }

    public function edit($id){
        $maquina = Machine::findOrFail($id);
        $tipos = Type::all();
        $estatus = Type::all();

        return view("maquina.edit", compact("maquinas","tipos","estatus"));
    }
}
