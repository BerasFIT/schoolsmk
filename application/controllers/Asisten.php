<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asisten extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		is_login();
		$this->load->model('menu_model', 'menu');
		$this->load->model('asisten_model', 'asisten');
	}

	public function index()
	{
		$data['title']		= 'Asisten Keperawatan';
		$data['page']		= 'asisten/index';
		$data['content'] 	= $this->asisten->getData();

		$this->load->view('back/layouts/main', $data);
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('content', 'Asisten Keperawatan', 'required',
			['required' => 'Kata asisten keperawatan tidak boleh kosong!']
		);

		if($this->form_validation->run() == false){
			$data['title']			= 'Ubah Asisten Keperawatan';
			$data['page']			= 'asisten/edit';
			$data['content']		= $this->asisten->getData();
			$data['form_action']	= base_url('asisten/edit/' . $id);
			$this->load->view('back/layouts/main', $data);
		}else{
			$data = [
				'content'	=> $this->input->post('content', true),
			];

			if(!empty($_FILES['photo']['name'])){
				$upload 	 = $this->asisten->uploadImage();

				if($upload){
					$asisten = $this->asisten->getData();

					if(file_exists('img/asisten/' . $asisten->photo) && $asisten->photo){
						unlink('img/asisten/' . $asisten->photo);
					}
					
					$data['photo'] = $upload;
				 }else{
					redirect(base_url("asisten/edit/$id"));
				 }
			}

			$this->asisten->updateData($id, $data);
			$this->session->set_flashdata('success', 'Asisten Keperawatan Berhasil Diupdate.');

			redirect(base_url('asisten'));
		}
	}

}

/* End of file Controllername.php */
