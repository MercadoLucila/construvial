<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function tiposDeMaquina() 
    {
        $tipos = Type::all();

        return view("maquinas", compact("tipos"));
    }
}
