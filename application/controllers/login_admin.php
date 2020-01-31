<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('M_login');
	}

	public function index()
	{
		if($this->session->userdata('status') == 'login') {
			redirect('login_admin');
		}
		$this->load->view("admin/login_admin_view");
    }
	public function login_aksi()
	{
		$user = $this->input->post("username");
		$pass = $this->input->post("password");

		$where = array(
			'username' => $user,
			'password' => $pass
		);

		$cek = $this->M_login->cek_login('tb_admin',$where)->num_rows();
		if($cek > 0) {
			$data_session = array(
				'nama' => $user,
				'status' => 'login'
			);
			$this->session->set_userdata($data_session);
			redirect("dashboard_admin");
		} else {
			$this->session->set_flashdata('message', 'Username atau Password salah!');
			redirect('login_admin');
		}
	}
		public function logout()
	{
		$this->session->sess_destroy();
		redirect('login_admin');
	}

}
