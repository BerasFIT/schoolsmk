<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Upfile extends CI_Controller {

	var $table = 'upload';
	var $id = 'id';
	var $select = ['*'];
	var $column_order = ['', 'name', 'photo'];
	var $column_search = ['name', 'photo'];
	
	public function __construct()
	{
		parent::__construct();
		is_login();
		$this->load->model('menu_model', 'menu');
		$this->load->model('my_model', 'my');
		$this->load->model('upfile_model', 'upfile');
	}
	
	public function index()
	{
		$data['title'] 	 = 'Data Upload';
      $data['page'] 		 = 'upfile/index';
		$data['datatable'] = 'upfile/index-datatable';
		
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

			if($li->photo){
            $row[] = '<a href="' . base_url('upload/file/' . $li->photo).'" target="_blank">' . base_url('upload/file/' . $li->photo).'</a>';
         }else{
            $row[] = '(No file)';
			}

         $row[] = 
         '<a class="btn btn-sm btn-warning text-white" href="'.base_url("upfile/edit/$li->id").'" 
         title="Edit">
			<i class="fa fa-pencil-alt"></i></a>

			<a class="btn btn-sm btn-danger" href="#" 
			title="Delete" onclick="delete_upfile('."'".$li->id."'".')">
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
			$input = (object) $this->upfile->getDefaultValues();
		}else{
			$input = (object) $this->input->post(null, true);
		}

		$this->form_validation->set_rules('name', 'Nama','required',[
			'required' => 'Nama upfile tidak boleh kosong!'
			]
		);

		if($this->form_validation->run() == false){
			$data['title'] 		= 'Tambah Upload';
			$data['page']			= 'upfile/form';
			$data['form_action'] = base_url("upfile/add");
			$data['input'] 		= $input;
			$this->load->view('back/layouts/main', $data);
		}else{
			
			$data = [
				'name' => $this->input->post('name', true),
			];

			if(!empty($_FILES['photo']['name'])){
				$imageName = url_title($data['name'], '-', true) . '-' . date('YmdHis');
				$upload = $this->upfile->uploadImage($imageName);
				$data['photo'] = $upload;
			}
			
			$this->upfile->insert($data);
			$this->session->set_flashdata('success', 'Upload Berhasil Ditambahkan.');

			redirect(base_url('upfile'));
		}
	}

	public function edit($id)
	{
		if(!$_POST){
			$input = (object) $this->upfile->getDataById($id);
		}else{
			$input = (object) $this->input->post(null, true);
		}

		$this->form_validation->set_rules('name', 'Nama','required',[
			'required' => 'Nama upload tidak boleh kosong!'
			]
		);

		if($this->form_validation->run() == false){
			$data['title']			= 'Ubah Upload';
			$data['page']			= 'upfile/form';
			$data['input']			= $input;
			$data['form_action']	= base_url('upfile/edit/' . $id);
			
			$this->load->view('back/layouts/main', $data);
		}else{
			$data = [
				'name' => $this->input->post('name', true),
			];

			if(!empty($_FILES['photo']['name'])){
				$imageName = url_title($data['name'], '-', true) . '-' . date('YmdHis');
				$upload = $this->upfile->uploadImage($imageName);

				if($upload){
					$upfile = $this->upfile->getDataById($id);

					if(file_exists('upload/file/' . $upfile->photo) && $upfile->photo){
						unlink('upload/file/' . $upfile->photo);
					}
					
					$data['photo'] = $upload;
				}else{
					redirect(base_url("upfile/edit/$id"));
				}
			}

			$this->upfile->update($id, $data);
			$this->session->set_flashdata('success', 'Upload Berhasil Diupdate.');

			redirect(base_url('upfile'));
		}
	}

	public function delete()
	{
		$id = $this->input->post('id', true);
		$upfile = $this->upfile->getDataById($id);

		if(file_exists('upload/file/' . $upfile->photo) && $upfile->photo){
			unlink('upload/file/' . $upfile->photo);
		}

		$this->upfile->delete($id);
		echo json_encode(["status" => TRUE]);
	}

}

/* End of file Controllername.php */
