<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('asisten_model', 'asisten');
		$this->load->model('laborat_model', 'laborat');
	}

	public function ap()
	{
		$data['title']		= 'Teknologi Laboratorium Medik';
		$data['page']		= 'jurusan/ap';
		$data['laborat'] = $this->laborat->getData();

		$this->load->view('front/layouts/main', $data);
	}

	public function ak()
	{
		$data['title']		= 'Asisten Keperawatan';
		$data['page']		= 'jurusan/ak';
		$data['asisten'] = $this->asisten->getData();

		$this->load->view('front/layouts/main', $data);
	}

}

/* End of file Controllername.php */
