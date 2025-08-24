<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumerosController extends Controller
{
	public function mostrarFormulario()
	{
		return view('numeros');
	}

	public function procesarNumeros(Request $request)
	{

		$numeros = [];
		for ($i = 0; $i < 20; $i++) {
			$numeros[] = rand(1, 70);
		}

		$imparesMult8 = 0;
		foreach ($numeros as $n) {
			if ($n % 2 !== 0 && $n % 8 === 0) {
				$imparesMult8++;
			}
		}

		$sumaPares = 0;
		$cantidadPares = 0;
		foreach ($numeros as $n) {
			if ($n % 2 === 0) {
				$sumaPares += $n;
				$cantidadPares++;
			}
		}
		$promedioPares = $cantidadPares > 0 ? round($sumaPares / $cantidadPares, 2) : 0;


		$mayorMult7 = null;
		foreach ($numeros as $n) {
			if ($n % 7 === 0) {
				if ($mayorMult7 === null || $n > $mayorMult7) {
					$mayorMult7 = $n;
				}
			}
		}


		$cont6 = 0;
		$cont11 = 0;
		$cont17 = 0;
		foreach ($numeros as $n) {
			if ($n === 6) $cont6++;
			if ($n === 11) $cont11++;
			if ($n === 17) $cont17++;
		}

		$bonusNumeros = [];
		$mayores0 = 0;
		$menores0 = 0;
		$iguales0 = 0;
		for ($i = 0; $i < 20; $i++) {
			$num = rand(-225, 450);
			$bonusNumeros[] = $num;
			if ($num > 0) {
				$mayores0++;
			} elseif ($num < 0) {
				$menores0++;
			} else {
				$iguales0++;
			}
		}

		return view('numeros', [
			'numeros' => $numeros,
			'imparesMult8' => $imparesMult8,
			'promedioPares' => $promedioPares,
			'mayorMult7' => $mayorMult7,
			'cont6' => $cont6,
			'cont11' => $cont11,
			'cont17' => $cont17,
			'bonusNumeros' => $bonusNumeros,
			'mayores0' => $mayores0,
			'menores0' => $menores0,
			'iguales0' => $iguales0
		]);
	}
}
