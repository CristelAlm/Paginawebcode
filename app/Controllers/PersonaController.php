<?php namespace App\Controllers;

class PersonaController extends BaseController
{
	public function index()
	{

		$datos = [
					"nombre" => "Cristel Alonso ",
					"correo" => "cristelkam@gmail.com ",
					"escuela" => "Instituto Tecnologico de Tlahuac "
				];
		$vistas = view('plantilla/header').
					view('plantilla/menu').
					view('persona', $datos).
					view('plantilla/footer');
		return $vistas;
	}

	public function persona()
	{

		$datos = [
			"nombre" => "Cristel Alonso",
			"correo" => "cristelkam@gmail.com",
			"escuela" => "Instituto Tecnologico de Tlahuac"
				];

				$vista3 = view('plantilla/header').
				view('plantilla/menu').
				view('adiestramiento').
				view('plantilla/footer');
	return $vista3;
		
	}

	public function direccionObtenida($direccion, $p2) {
		echo $direccion.$p2;
	}

	public function contacto() {
		return view('contacto');
	}

	public function pasarPost() {
		echo $_POST['valor1'];
	}
	public function adiestramiento() {
		$vista = view('plantilla/header').
					view('plantilla/menu').
					view('adiestramiento').
					view('plantilla/footer');
		return $vista;
	}
	public function razas() {
		$vista1 = view('plantilla/header').
					view('plantilla/menu').
					view('razas').
					view('plantilla/footer');
		return $vista1;
	
	}
	public function alimentacion() {
		$vista2 = view('plantilla/header').
					view('plantilla/menu').
					view('alimentacion').
					view('plantilla/footer');
		return $vista2;
	
}
}