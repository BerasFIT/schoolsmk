<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_model extends CI_Model {

	public function getDataById($id)
	{
		return $this->db->get_where('pegawai', ['id' => $id])->row();
	}

	public function getAllPegawai()
	{
		return $this->db->get('pegawai')->result();
	}

	public function insert($data)
	{
		$this->db->insert('pegawai', $data);
	}

	public function update($id, $data)
	{
		$this->db->update('pegawai', $data, ['id' => $id]);
		return $this->db->affected_rows();
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
      $this->db->delete('pegawai');
	}

	public function getDefaultValues()
   {
      return [
         'nip'        	=> '',
         'nama'      => '',
         'pendidikan'      => '',
         'pelajaran'      => '',
         'jabatan'      => '',
         'photo'        => '',
      ];
	}

	public function totalPegawai()
	{
		$this->db->from('pegawai');
      return $this->db->count_all_results();
	}
	
	public function uploadImage($imageName){
      $config = [
        'upload_path'     => './img/pegawai',
		  'file_name'       => $imageName,
        'allowed_types'   => 'jpg|jpeg|png|JPG|PNG',
        'max_size'        => 3000,
        'max_width'       => 0,
        'max_height'      => 0,
        'overwrite'       => TRUE,
        'file_ext_tolower'=> TRUE
      ];
  
      $this->load->library('upload', $config);
		
		if($this->upload->do_upload('photo')){
			return $this->upload->data('file_name');
		}else{
			$this->session->set_flashdata('image_error', 'Jenis file yang diupload tidak diizinkan atau file terlalu besar.');
     		return false;
		}
   }

}

/* End of file ModelName.php */
