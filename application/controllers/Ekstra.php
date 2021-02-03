<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Ekstra extends CI_Controller {

	var $table = 'ekstra';
	var $id = 'id';
	var $select = ['*'];
	var $column_order = ['', 'name', 'content', 'photo'];
	var $column_search = ['name', 'content', 'photo'];
	
	public function __construct()
	{
		parent::__construct();
		is_login();
		$this->load->model('menu_model', 'menu');
		$this->load->model('my_model', 'my');
		$this->load->model('ekstra_model', 'ekstra');
	}
	
	public function index()
	{
		$data['title'] 	 = 'Data Ekstrakurikuler';
      $data['page'] 		 = 'ekstra/index';
		$data['datatable'] = 'ekstra/index-datatable';
		
      $this->load->view('back/layouts/main', $data);
	}

	public function ajax_list()
   {
      $list = $this->my->get_datatables();
		$data = [];
		$no = 1;
      foreach($list as $li){
			$row = [];
			$row[] = $no++;
			$row[] = $li->name;
			$row[] = $li->content;

			if($li->photo){
            $row[] = '<a href="' . base_url('img/ekstra/' . $li->photo).'" target="_blank"><img src="'.base_url('img/ekstra/' . $li->photo) . '" class="img-responsive" style="max-height:150px; max-width:400px;"/></a>';
         }else{
            $row[] = '(No photo)';
			}

         $row[] = 
         '<a class="btn btn-sm btn-warning text-white" href="'.base_url("ekstra/edit/$li->id").'" 
         title="Edit">
			<i class="fa fa-pencil-alt"></i></a>

			<a class="btn btn-sm btn-danger" href="#" 
			title="Delete" onclick="delete_ekstra('."'".$li->id."'".')">
			<i class="fa fa-trash"></i></a>';
         $data[] = $row;
      }

      $output = [
         'draw'            => $_POST['draw'],
         'recordsTotal'    => $this->my->count_all(),
         'recordsFiltered' => $this->my->count_filtered(),
         'data'            => $data
      ];

      echo json_encode($output);
	}

	public function add()
	{
		if(!$_POST){
			$input = (object) $this->ekstra->getDefaultValues();
		}else{
			$input = (object) $this->input->post(null, true);
		}

		$this->form_validation->set_rules('name', 'Nama','required',[
			'required' => 'Nama ekstra tidak boleh kosong!'
			]
		);

		if($this->form_validation->run() == false){
			$data['title'] 		= 'Tambah Ekstrakurikuler';
			$data['page']			= 'ekstra/form';
			$data['form_action'] = base_url("ekstra/add");
			$data['input'] 		= $input;
			$this->load->view('back/layouts/main', $data);
		}else{
			
			$data = [
				'name' => $this->input->post('name', true),
				'content' => $this->input->post('content', true),
			];

			if(!empty($_FILES['photo']['name'])){
				$imageName = url_title($data['name'], '-', true) . '-' . date('YmdHis');
				$upload = $this->ekstra->uploadImage($imageName);
				$data['photo'] = $upload;
			}
			
			$this->ekstra->insert($data);
			$this->session->set_flashdata('success', 'Ekstrakurikuler Berhasil Ditambahkan.');

			redirect(base_url('ekstra'));
		}
	}

	public function edit($id)
	{
		if(!$_POST){
			$input = (object) $this->ekstra->getDataById($id);
		}else{
			$input = (object) $this->input->post(null, true);
		}

		$this->form_validation->set_rules('name', 'Nama','required',[
			'required' => 'Nama Ekstrakurikuler tidak boleh kosong!'
			]
		);

		if($this->form_validation->run() == false){
			$data['title']			= 'Ubah Ekstrakurikuler';
			$data['page']			= 'ekstra/form';
			$data['input']			= $input;
			$data['form_action']	= base_url('ekstra/edit/' . $id);
			
			$this->load->view('back/layouts/main', $data);
		}else{
			$data = [
				'name' => $this->input->post('name', true),
				'content' => $this->input->post('content', true),
			];

			if(!empty($_FILES['photo']['name'])){
				$imageName = url_title($data['name'], '-', true) . '-' . date('YmdHis');
				$upload = $this->ekstra->uploadImage($imageName);

				if($upload){
					$ekstra = $this->ekstra->getDataById($id);

					if(file_exists('img/ekstra/' . $ekstra->photo) && $ekstra->photo){
						unlink('img/ekstra/' . $ekstra->photo);
					}
					
					$data['photo'] = $upload;
				}else{
					redirect(base_url("ekstra/edit/$id"));
				}
			}

			$this->ekstra->update($id, $data);
			$this->session->set_flashdata('success', 'Ekstrakurikuler Berhasil Diupdate.');

			redirect(base_url('ekstra'));
		}
	}

	public function delete()
	{
		$id = $this->input->post('id', true);
		$ekstra = $this->ekstra->getDataById($id);

		if(file_exists('img/ekstra/' . $ekstra->photo) && $ekstra->photo){
			unlink('img/ekstra/' . $ekstra->photo);
		}

		$this->ekstra->delete($id);
		echo json_encode(["status" => TRUE]);
	}

}

/* End of file Controllername.php */
