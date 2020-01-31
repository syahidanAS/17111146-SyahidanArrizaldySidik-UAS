<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_mahasiswa extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('M_login');
        $this->load->model('M_admin');
    }

	public function index() {
		$this->load->view('mahasiswa/login_mahasiswa_view');
	}


	 public function loginMahasiswa()
    {
        $npm = $this->input->post("npm");
        $pass = $this->input->post("password");

        $where = array (
            'npm' => $npm,
            'password' =>$pass
        );

        $cek = $this->M_login->cek_login('auth_mahasiswa', $where)->num_rows();
        if ($cek > 0) {
            $data_session = array(
                'npm' => $npm,
                'status' => 'login'
            );

            $this->session->set_userdata($data_session);
            redirect("dashboard_mahasiswa");
        } else {
            $this->session->set_flashdata('validasi_salah', '<div style="color:#d50000; text-align:center; margin-bottom:5px;"><b>
		    NPM atau password tidak terdaftar!</b>
		</div>');
            redirect('login_mahasiswa');
        }
    }




     public function logout(){
        $this->session->sess_destroy();
        redirect('login_mahasiswa');
    }

		
	
}

?>