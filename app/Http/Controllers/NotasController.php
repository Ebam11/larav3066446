<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class NotasController extends Controller
{
    public function mostrarFoorm(Request $request)
    {
        $intentos = session('intentos',  0);
        return view('notas', ['intentos' => $intentos]);
    }
    public function procesarNotas(Request $request)
    {
        $notas= $request->input('notas',[]);
        $intentos = session('intentos', 0) + 1;
        session(['intentos' => $intentos]);
        foreach($notas as $nota){
            if($nota < 0 || $nota > 5){
                return view('notas',[
                    'error' => 'Todas las notas deben estar entre 0 y 5',
                    'intentos' => $intentos
                ]);
            }
        }
        $promedio = array_sum($notas) / count($notas);
        $aprobado = $promedio >= 3;
        session()->forget('intentos');
        return view('notas',[
            'promedio' => $promedio,
            'aprobado' => $aprobado,
            'intentos' => $intentos
        ]);
    }
}
