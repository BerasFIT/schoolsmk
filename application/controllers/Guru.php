<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

	var $table = 'guru';
	var $id = 'id';
	var $select = ['*'];
	var $column_order = ['', 'nip', 'nama', 'pendidikan', 'pelajaran', 'jabatan', 'photo'];
	var $column_search = ['nip', 'nama', 'pendidikan', 'pelajaran', 'jabatan', 'photo'];
	
	public function __construct()
	{
		parent::__construct();
		is_login();
		$this->load->model('menu_model', 'menu');
		$this->load->model('my_model', 'my');
		$this->load->model('guru_model', 'guru');
	}
	
	public function index()
	{
		$data['title'] 	 = 'Data Guru';
      $data['page'] 		 = 'guru/index';
		$data['datatable'] = 'guru/index-datatable';
		
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
            $row[] = $li->nip;
            $row[] = $li->nama;
            $row[] = $li->pendidikan;
            $row[] = $li->pelajaran;
            $row[] = $li->jabatan;

			if($li->photo){
            $row[] = '<a href="' . base_url('img/guru/' . $li->photo).'" target="_blank"><img src="'.base_url('img/guru/' . $li->photo) . '" class="img-responsive" style="max-height:150px; max-width:400px;"/></a>';
         }else{
            $row[] = '(No photo)';
			}

         $row[] = 
         '<a class="btn btn-sm btn-warning text-white" href="'.base_url("guru/edit/$li->id").'" 
         title="Edit">
			<i class="fa fa-pencil-alt"></i></a>

			<a class="btn btn-sm btn-danger" href="#" 
			title="Delete" onclick="delete_guru('."'".$li->id."'".')">
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
			$input = (object) $this->guru->getDefaultValues();
		}else{
			$input = (object) $this->input->post(null, true);
		}

		$this->form_validation->set_rules('name','required',[
			'required' => 'Nama tidak boleh kosong!'
			]
		);

		if($this->form_validation->run() == false){
			$data['title'] 		= 'Tambah Guru';
			$data['page']			= 'guru/form';
			$data['form_action'] = base_url("guru/add");
			$data['input'] 		= $input;
			$this->load->view('back/layouts/main', $data);
		}else{
			
			$data = [
                'nip' => $this->input->post('nip', true),
                'nama' => $this->input->post('nama', true),
                'pendidikan' => $this->input->post('pendidikan', true),
                'pelajaran' => $this->input->post('pelajaran', true),
                'jabatan' => $this->input->post('jabatan', true),
			];

			if(!empty($_FILES['photo']['name'])){
				$imageName = url_title($data['name'], '-', true) . '-' . date('YmdHis');
				$upload = $this->guru->uploadImage($imageName);
				$data['photo'] = $upload;
			}
			
			$this->guru->insert($data);
			$this->session->set_flashdata('success', 'Guru Berhasil Ditambahkan.');

			redirect(base_url('guru'));
		}
	}

	public function edit($id)
	{
		if(!$_POST){
			$input = (object) $this->guru->getDataById($id);
		}else{
			$input = (object) $this->input->post(null, true);
		}

		$this->form_validation->set_rules('name', 'required',[
			'required' => 'Nama tidak boleh kosong!'
			]
		);

		if($this->form_validation->run() == false){
			$data['title']			= 'Ubah Guru';
			$data['page']			= 'guru/form';
			$data['input']			= $input;
			$data['form_action']	= base_url('guru/edit/' . $id);
			
			$this->load->view('back/layouts/main', $data);
		}else{
			$data = [
                'nip' => $this->input->post('nip', true),
                'nama' => $this->input->post('nama', true),
                'pendidikan' => $this->input->post('pendidikan', true),
                'pelajaran' => $this->input->post('pelajaran', true),
                'jabatan' => $this->input->post('jabatan', true),
			];

			if(!empty($_FILES['photo']['name'])){
				$imageName = url_title($data['name'], '-', true) . '-' . date('YmdHis');
				$upload = $this->guru->uploadImage($imageName);

				if($upload){
					$guru = $this->guru->getDataById($id);

					if(file_exists('img/guru/' . $guru->photo) && $guru->photo){
						unlink('img/guru/' . $guru->photo);
					}
					
					$data['photo'] = $upload;
				}else{
					redirect(base_url("guru/edit/$id"));
				}
			}

			$this->guru->update($id, $data);
			$this->session->set_flashdata('success', 'Guru Berhasil Diupdate.');

			redirect(base_url('guru'));
		}
	}

	public function delete()
	{
		$id = $this->input->post('id', true);
		$guru = $this->guru->getDataById($id);

		if(file_exists('img/guru/' . $guru->photo) && $guru->photo){
			unlink('img/guru/' . $guru->photo);
		}

		$this->guru->delete($id);
		echo json_encode(["status" => TRUE]);
	}

}

/* End of file Controllername.php */
