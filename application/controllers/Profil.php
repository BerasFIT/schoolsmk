<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('fasilitas_model', 'fasilitas');
		$this->load->model('ekstra_model', 'ekstra');
		$this->load->model('prestasi_model', 'prestasi');
		$this->load->model('struktur_model', 'struktur');
		$this->load->model('sejarah_model', 'sejarah');
		$this->load->model('visimisi_model', 'visimisi');
	}
	
	public function sejarah()
	{
		$data['title']		= 'Sejarah';
		$data['page']		= 'profil/sejarah';
		$data['sejarah'] = $this->sejarah->getData();

		$this->load->view('front/layouts/main', $data);
	}

	public function visimisi()
	{
		$data['title']		= 'Visi & Misi';
		$data['page']		= 'profil/visimisi';
		$data['visimisi'] = $this->visimisi->getData();

		$this->load->view('front/layouts/main', $data);
	}

	public function struktur()
	{
		$data['title']		= 'Struktur Organisasi';
		$data['page']		= 'profil/struktur';
		$data['struktur'] = $this->struktur->getData();

		$this->load->view('front/layouts/main', $data);
	}

	public function fasilitas()
	{
		$data['title']		= 'Fasilitas';
		$data['page']		= 'profil/fasilitas';
		$data['fasilitas'] = $this->fasilitas->getAllFasilityUnik();

		$this->load->view('front/layouts/main', $data);
	}

	public function ekstrak()
	{
		$data['title']		= 'Ekstrakurikuler';
		$data['page']		= 'profil/ekstrak';
		$data['ekstra'] = $this->ekstra->getAllEkstraUnik();

		$this->load->view('front/layouts/main', $data);
	}
	public function prestasisekolah()
	{
		$data['title']		= 'Prestasi Sekolah';
		$data['page']		= 'profil/prestasisekolah';
		$data['prestasi'] = $this->prestasi->getAllPrestasiUnik();

		$this->load->view('front/layouts/main', $data);
	}

}

/* End of file Controllername.php */
