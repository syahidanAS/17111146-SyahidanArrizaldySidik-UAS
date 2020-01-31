<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tambah_siswa extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('M_admin');

		if ($this->session->userdata('status')!='login') {
			redirect('login_admin');
		}
	}
		public function index() {
		$this->load->view('select');
		$this->load->view('admin/tambah_siswa_view');

	}


	
}