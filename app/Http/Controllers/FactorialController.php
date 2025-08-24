<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class FactorialController extends Controller
{
    public function mostrarFormulario()
    {
        return view('factorial');
    }
    public function calcular(Request $request)
    {
        $numero = intval($request->input('numero'));
        if ($numero < 1 || $numero > 10) {
            return view('factorial', ['error' => 'El número debe estar entre 1 y 10']);
        }
        $resultado = 1;
        for ($i = 1; $i <= $numero; $i++) {
            $resultado *= $i;
        }
        return view('factorial', ['resultado' => $resultado, 'numero' => $numero]);
    }
}
