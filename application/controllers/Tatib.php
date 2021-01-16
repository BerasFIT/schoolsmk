<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tatib extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		is_login();
		$this->load->model('menu_model', 'menu');
		$this->load->model('tatib_model', 'tatib');
	}

	public function index()
	{
		$data['title']		= 'Tata Tertib';
		$data['page']		= 'tatib/index';
		$data['content'] 	= $this->tatib->getData();

		$this->load->view('back/layouts/main', $data);
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('content', 'Tata Tertib', 'required',
			['required' => 'Kata tata tertib tidak boleh kosong!']
		);

		if($this->form_validation->run() == false){
			$data['title']			= 'Ubah Tata Tertib';
			$data['page']			= 'tatib/edit';
			$data['content']		= $this->tatib->getData();
			$data['form_action']	= base_url('tatib/edit/' . $id);
			$this->load->view('back/layouts/main', $data);
		}else{
			$data = [
				'content'	=> $this->input->post('content', true),
			];

			if(!empty($_FILES['photo']['name'])){
				$upload 	 = $this->tatib->uploadImage();

				if($upload){
					$tatib = $this->tatib->getData();

					if(file_exists('img/tatatertib/' . $tatib->photo) && $tatib->photo){
						unlink('img/tatatertib/' . $tatib->photo);
					}
					
					$data['photo'] = $upload;
				 }else{
					redirect(base_url("tatib/edit/$id"));
				 }
			}

			$this->tatib->updateData($id, $data);
			$this->session->set_flashdata('success', 'Tata Tertib Berhasil Diupdate.');

			redirect(base_url('tatib'));
		}
	}

}

/* End of file Controllername.php */
