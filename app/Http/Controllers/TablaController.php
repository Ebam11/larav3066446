<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TablaController extends Controller
{
    public function mostrarFormulario()
    {
        return view('tabla');
    }

    public function procesarTabla(Request $request)
    {
        $numero = intval($request->input('numero'));
        if ($numero < 1 || $numero > 10) {
            return view('tabla', ['error' => 'El número debe estar entre 1 y 10']);
        }

        $tabla = [];
        for ($i = 1; $i <= 10; $i++) {
            $tabla[$i] = $numero * $i;
        }

        return view('tabla', ['tabla' => $tabla, 'numero' => $numero]);
    }
}
