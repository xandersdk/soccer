<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('header');//CARGANDO CABEZERA
		$this->load->view('welcome_message');//CARGANDO CUERPO
		$this->load->view('footer');//CARGANDO PIE
	}
	public function universidad()
	{
		$this->load->view('header');//CARGANDO CABEZERA
		$this->load->view('universidad');//CARGANDO CUERPO
		$this->load->view('footer');//CARGANDO PIE
	}
}//CIERRE DE LA CLASE
