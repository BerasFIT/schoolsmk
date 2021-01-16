<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laborat extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		is_login();
		$this->load->model('menu_model', 'menu');
		$this->load->model('laborat_model', 'laborat');
	}

	public function index()
	{
		$data['title']		= 'Teknologi Laboratorium Medik';
		$data['page']		= 'laborat/index';
		$data['content'] 	= $this->laborat->getData();

		$this->load->view('back/layouts/main', $data);
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('content', 'Teknologi Laboratorium Medik', 'required',
			['required' => 'Kata teknologi laboratorium medik tidak boleh kosong!']
		);

		if($this->form_validation->run() == false){
			$data['title']			= 'Ubah Teknologi Laboratorium Medik';
			$data['page']			= 'laborat/edit';
			$data['content']		= $this->laborat->getData();
			$data['form_action']	= base_url('laborat/edit/' . $id);
			$this->load->view('back/layouts/main', $data);
		}else{
			$data = [
				'content'	=> $this->input->post('content', true),
			];

			if(!empty($_FILES['photo']['name'])){
				$upload 	 = $this->laborat->uploadImage();

				if($upload){
					$laborat = $this->laborat->getData();

					if(file_exists('img/laborat/' . $laborat->photo) && $laborat->photo){
						unlink('img/laborat/' . $laborat->photo);
					}
					
					$data['photo'] = $upload;
				 }else{
					redirect(base_url("laborat/edit/$id"));
				 }
			}

			$this->laborat->updateData($id, $data);
			$this->session->set_flashdata('success', 'Teknologi Laboratorium Medik Berhasil Diupdate.');

			redirect(base_url('laborat'));
		}
	}

}

/* End of file Controllername.php */
