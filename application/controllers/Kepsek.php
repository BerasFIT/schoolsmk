<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kepsek extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		is_login();
		$this->load->model('menu_model', 'menu');
		$this->load->model('kepsek_model', 'kepsek');
	}

	public function index()
	{
		$data['title']		= 'Kepala Sekolah';
		$data['page']		= 'kepsek/index';
		$data['content'] 	= $this->kepsek->getData();

		$this->load->view('back/layouts/main', $data);
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('content', 'required',
			['required' => 'Kata tidak boleh kosong!']
		);

		if($this->form_validation->run() == false){
			$data['title']			= 'Ubah Kepala Sekolah';
			$data['page']			= 'kepsek/edit';
			$data['content']		= $this->kepsek->getData();
			$data['form_action']	= base_url('kepsek/edit/' . $id);
			$this->load->view('back/layouts/main', $data);
		}else{
			$data = [
				'nip'	=> $this->input->post('nip', true),
				'nama'	=> $this->input->post('nama', true),
				'pendidikan'	=> $this->input->post('pendidikan', true),
				'jabatan'	=> $this->input->post('jabatan', true),
			];

			if(!empty($_FILES['photo']['name'])){
				$upload 	 = $this->kepsek->uploadImage();

				if($upload){
					$kepsek = $this->kepsek->getData();

					if(file_exists('img/kepsek/' . $kepsek->photo) && $kepsek->photo){
						unlink('img/kepsek/' . $kepsek->photo);
					}
					
					$data['photo'] = $upload;
				 }else{
					redirect(base_url("kepsek/edit/$id"));
				 }
			}

			$this->kepsek->updateData($id, $data);
			$this->session->set_flashdata('success', 'Tata Tertib Berhasil Diupdate.');

			redirect(base_url('kepsek'));
		}
	}

}

/* End of file Controllername.php */
