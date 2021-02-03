<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Ekstra_model extends CI_Model {

	public function getDataById($id)
	{
		return $this->db->get_where('ekstra', ['id' => $id])->row();
	}

	public function getAllEkstra()
	{
		return $this->db->get('ekstra')->result();
	}

	public function getAllEkstraUnik()
	{
		return $this->db->query("select id, name, content, photo, replace(name , ' ','') unik from ekstra")->result();
	}

	public function insert($data)
	{
		$this->db->insert('ekstra', $data);
	}

	public function update($id, $data)
	{
		$this->db->update('ekstra', $data, ['id' => $id]);
		return $this->db->affected_rows();
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
      $this->db->delete('ekstra');
	}

	public function getDefaultValues()
   {
      return [
		 'name'        	=> '',
		 'content'      => '',
         'photo'        => '',
      ];
	}

	public function totalEkstra()
	{
		$this->db->from('ekstra');
      return $this->db->count_all_results();
	}
	
	public function uploadImage($imageName){
      $config = [
        'upload_path'     => './img/ekstra',
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
