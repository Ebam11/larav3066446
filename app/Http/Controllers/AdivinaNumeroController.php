<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdivinaNumeroController extends Controller
{

    public function mostrarFormulario(Request $request)
    {
        $mensaje = session('mensaje');
        return view('adivina', ['mensaje' => $mensaje]);
    }

    public function procesarIntento(Request $request)
    {
        $numeroSecreto = session('numero_secreto', rand(1, 70));
        session(['numero_secreto' => $numeroSecreto]);
        $intentos = session('intentos', 0) + 1;
        session(['intentos' => $intentos]);

        $adivinanza = intval($request->input('numero'));
        if ($adivinanza < $numeroSecreto) {
            $mensaje = "El número es mayor.";
        } elseif ($adivinanza > $numeroSecreto) {
            $mensaje = "El número es menor.";
        } else {
            $mensaje = "¡Correcto! Adivinaste el número en $intentos intentos.";
            session()->forget(['numero_secreto', 'intentos']);
        }
        return redirect('adivina')->with('mensaje', $mensaje);
    }
}
