<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Tatatertib extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('tatib_model', 'tatib');
	}

	public function index()
	{
		$data['title']		= 'Tata Tertib';
		$data['page']		= 'tatatertib/index';
		$data['tatib'] = $this->tatib->getData();

		$this->load->view('front/layouts/main', $data);
	}

}

/* End of file Controllername.php */
