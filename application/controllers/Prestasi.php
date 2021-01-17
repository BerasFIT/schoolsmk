<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestasi extends CI_Controller {

	var $table = 'prestasi';
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
		$this->load->model('prestasi_model', 'prestasi');
	}
	
	public function index()
	{
		$data['title'] 	 = 'Data Prestasi';
      $data['page'] 		 = 'prestasi/index';
		$data['datatable'] = 'prestasi/index-datatable';
		
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
            $row[] = '<a href="' . base_url('img/prestasi/' . $li->photo).'" target="_blank"><img src="'.base_url('img/prestasi/' . $li->photo) . '" class="img-responsive" style="max-height:150px; max-width:400px;"/></a>';
         }else{
            $row[] = '(No photo)';
			}

         $row[] = 
         '<a class="btn btn-sm btn-warning text-white" href="'.base_url("prestasi/edit/$li->id").'" 
         title="Edit">
			<i class="fa fa-pencil-alt"></i></a>

			<a class="btn btn-sm btn-danger" href="#" 
			title="Delete" onclick="delete_prestasi('."'".$li->id."'".')">
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
			$input = (object) $this->prestasi->getDefaultValues();
		}else{
			$input = (object) $this->input->post(null, true);
		}

		$this->form_validation->set_rules('name', 'Nama','required',[
			'required' => 'Nama prestasi tidak boleh kosong!'
			]
		);

		if($this->form_validation->run() == false){
			$data['title'] 		= 'Tambah Prestasi';
			$data['page']			= 'prestasi/form';
			$data['form_action'] = base_url("prestasi/add");
			$data['input'] 		= $input;
			$this->load->view('back/layouts/main', $data);
		}else{
			
			$data = [
                'name' => $this->input->post('name', true),
                'content' => $this->input->post('content', true),
			];

			if(!empty($_FILES['photo']['name'])){
				$imageName = url_title($data['name'], '-', true) . '-' . date('YmdHis');
				$upload = $this->prestasi->uploadImage($imageName);
				$data['photo'] = $upload;
			}
			
			$this->prestasi->insert($data);
			$this->session->set_flashdata('success', 'Prestasi Berhasil Ditambahkan.');

			redirect(base_url('prestasi'));
		}
	}

	public function edit($id)
	{
		if(!$_POST){
			$input = (object) $this->prestasi->getDataById($id);
		}else{
			$input = (object) $this->input->post(null, true);
		}

		$this->form_validation->set_rules('name', 'Nama','required',[
			'required' => 'Nama Prestasi tidak boleh kosong!'
			]
		);

		if($this->form_validation->run() == false){
			$data['title']			= 'Ubah Prestasi';
			$data['page']			= 'prestasi/form';
			$data['input']			= $input;
			$data['form_action']	= base_url('prestasi/edit/' . $id);
			
			$this->load->view('back/layouts/main', $data);
		}else{
			$data = [
                'name' => $this->input->post('name', true),
                'content' => $this->input->post('content', true),
			];

			if(!empty($_FILES['photo']['name'])){
				$imageName = url_title($data['name'], '-', true) . '-' . date('YmdHis');
				$upload = $this->prestasi->uploadImage($imageName);

				if($upload){
					$prestasi = $this->prestasi->getDataById($id);

					if(file_exists('img/prestasi/' . $prestasi->photo) && $prestasi->photo){
						unlink('img/prestasi/' . $prestasi->photo);
					}
					
					$data['photo'] = $upload;
				}else{
					redirect(base_url("prestasi/edit/$id"));
				}
			}

			$this->prestasi->update($id, $data);
			$this->session->set_flashdata('success', 'Prestasi Berhasil Diupdate.');

			redirect(base_url('prestasi'));
		}
	}

	public function delete()
	{
		$id = $this->input->post('id', true);
		$prestasi = $this->prestasi->getDataById($id);

		if(file_exists('img/prestasi/' . $prestasi->photo) && $prestasi->photo){
			unlink('img/prestasi/' . $prestasi->photo);
		}

		$this->prestasi->delete($id);
		echo json_encode(["status" => TRUE]);
	}

}

/* End of file Controllername.php */
