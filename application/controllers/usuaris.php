<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class usuaris extends CI_Controller {


	public function crear_usuari()
	{
		echo "<h1>Aqu&iacute crees el teu usuari</h1>";
	}
	
	public function modificar()
	{
		echo "<h1>Aqu&iacute Modifiques el teu usuari</h1>";
	}

	public function eliminar()
	{
		echo "<h1>Aqu&iacute Elimines el teu usuari</h1>";
	}
	public function llistar()
	{
		$this->load->view('llistar');
	}


	
}