<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class OperacionesController extends Controller
{
    public function frmcuadratica(){
        return view('frm_cuadratica');
    }
    public function cuadratica(Request $request){
        $a = $request->a;
        $b = $request->b;
        $c = $request->c;
        $ecu1 = $b*$b-(4*$a*$c);
        $raiz = sqrt($ecu1);
        if ($ecu1>0 && $a!=0) {
            $x1 = (-$b + $raiz) / (2 * $a);
            $x2 = (-$b - $raiz) / (2 * $a);
            echo "x1 = $x1<br>";
            echo "x2 = $x2<br>";
        } else{
            echo "Ingrese otros valores";
        }
    }
}
