<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Upfile_model extends CI_Model {

	public function getDataById($id)
	{
		return $this->db->get_where('upload', ['id' => $id])->row();
	}

	public function getAllUpfile()
	{
		return $this->db->get('upload')->result();
	}

	public function getAllUpfileUnik()
	{
		return $this->db->query("select id,name,photo, replace(name , ' ','') unik from upload")->result();
	}

	public function insert($data)
	{
		$this->db->insert('upload', $data);
	}

	public function update($id, $data)
	{
		$this->db->update('upload', $data, ['id' => $id]);
		return $this->db->affected_rows();
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
      $this->db->delete('upload');
	}

	public function getDefaultValues()
   {
      return [
         'name'        	=> '',
         'photo'        => '',
      ];
	}

	public function totalUpfile()
	{
		$this->db->from('upload');
      return $this->db->count_all_results();
	}
	
	public function uploadImage($imageName){
      $config = [
        'upload_path'     => './upload/file',
		  'file_name'       => $imageName,
        'allowed_types'   => 'jpg|jpeg|png|pdf|doc|docx|JPG|PNG|JPEG|PDF|DOC|DOCX',
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
