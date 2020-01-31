<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_mahasiswa extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('M_login');
		$this->load->model('M_admin');
		if ($this->session->userdata('status')!='login') {
			redirect('login_mahasiswa');
		}
	}

	public function index() {
		$this->load->view('bootstrap');
		$data['mhs'] = $this->M_admin->profil_mhs($this->session->userdata('npm'));
		$this->load->view('mahasiswa/dashboard_mahasiswa_view',$data);
		 

	}
	
}


?>