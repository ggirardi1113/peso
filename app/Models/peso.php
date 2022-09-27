<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peso extends Model
{
    use HasFactory;
    public function pesoideal(){
        $peso = $_GET['peso'];
        $altura = $_GET['altura'];
        $imc = $peso/($altura*$altura);
        if ($imc<18.5) {
            $cond = 'Abaixo do peso';
        }elseif ($imc<24.9) {
            $cond = 'Peso normal';
        }elseif ($imc<29.9) {
            $cond = 'Sobrepeso';
        }elseif ($imc<34.9) {
            $cond = 'Obesidade grau 1';
        }elseif ($imc<34.9) {
            $cond = 'Obesidade grau 2';
        }elseif ($imc>=40) {
            $cond = 'Obesidade grau 3';
        }
        return ['imc'=>$imc,'cond'=>$cond];
    }
}
