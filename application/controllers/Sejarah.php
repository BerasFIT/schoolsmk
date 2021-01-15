<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sejarah extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		is_login();
		$this->load->model('menu_model', 'menu');
		$this->load->model('sejarah_model', 'sejarah');
	}

	public function index()
	{
		$data['title']		= 'Sejarah';
		$data['page']		= 'sejarah/index';
		$data['content'] 	= $this->sejarah->getData();

		$this->load->view('back/layouts/main', $data);
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('content', 'Sejarah', 'required',
			['required' => 'Kata sejarah tidak boleh kosong!']
		);

		if($this->form_validation->run() == false){
			$data['title']			= 'Ubah Sejarah';
			$data['page']			= 'sejarah/edit';
			$data['content']		= $this->sejarah->getData();
			$data['form_action']	= base_url('sejarah/edit/' . $id);
			$this->load->view('back/layouts/main', $data);
		}else{
			$data = [
				'content'	=> $this->input->post('content', true),
			];

			if(!empty($_FILES['photo']['name'])){
				$upload 	 = $this->sejarah->uploadImage();

				if($upload){
					$sejarah = $this->sejarah->getData();

					if(file_exists('img/sejarah/' . $sejarah->photo) && $sejarah->photo){
						unlink('img/sejarah/' . $sejarah->photo);
					}
					
					$data['photo'] = $upload;
				 }else{
					redirect(base_url("sejarah/edit/$id"));
				 }
			}

			$this->sejarah->updateData($id, $data);
			$this->session->set_flashdata('success', 'Sejarah Berhasil Diupdate.');

			redirect(base_url('sejarah'));
		}
	}

}

/* End of file Controllername.php */
