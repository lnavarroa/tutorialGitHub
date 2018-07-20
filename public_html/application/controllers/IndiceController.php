<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IndiceController extends CI_Controller {

	public function index()
	{
		$this->load->view('indiceView');
	}

	public function descripcion()
	{
		$this->load->view('descripcionView');
	}

	public function instalacion()
	{
		$this->load->view('instalacionView');
	}

	public function primerProyecto()
	{
		$this->load->view('primerProyectoView');
	}

	public function comandosBasicos()
	{
		$this->load->view('comandosBasicosView');
	}
}
