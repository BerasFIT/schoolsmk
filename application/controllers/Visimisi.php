<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visimisi extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		is_login();
		$this->load->model('menu_model', 'menu');
		$this->load->model('visimisi_model', 'visimisi');
	}

	public function index()
	{
		$data['title']		= 'Visi Misi';
		$data['page']		= 'visimisi/index';
		$data['content'] 	= $this->visimisi->getData();

		$this->load->view('back/layouts/main', $data);
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('content', 'Visi Misi', 'required',
			['required' => 'Kata Visi Misi tidak boleh kosong!']
		);

		if($this->form_validation->run() == false){
			$data['title']			= 'Ubah Visi Misi';
			$data['page']			= 'visimisi/edit';
			$data['content']		= $this->visimisi->getData();
			$data['form_action']	= base_url('visimisi/edit/' . $id);
			$this->load->view('back/layouts/main', $data);
		}else{
			$data = [
				'content'	=> $this->input->post('content', true),
			];

			if(!empty($_FILES['photo']['name'])){
				$upload 	 = $this->visimisi->uploadImage();

				if($upload){
					$visimisi = $this->visimisi->getData();

					if(file_exists('img/visimisi/' . $visimisi->photo) && $visimisi->photo){
						unlink('img/visimisi/' . $visimisi->photo);
					}
					
					$data['photo'] = $upload;
				 }else{
					redirect(base_url("visimisi/edit/$id"));
				 }
			}

			$this->visimisi->updateData($id, $data);
			$this->session->set_flashdata('success', 'Visi Misi Berhasil Diupdate.');

			redirect(base_url('visimisi'));
		}
	}

}

/* End of file Controllername.php */
