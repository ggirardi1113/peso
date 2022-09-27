<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class peso extends Controller
{
    public function clacular(){
        $calculo = new peso();
        $pesoidela = $calculo->pesoideal();

        return view('resultado', ['pesoideal'=>$pesoidela['imc'],'cond'=>$pesoidela['cond']]);
    }
}
