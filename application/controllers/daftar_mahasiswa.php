<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Daftar_mahasiswa extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('M_login');
        $this->load->model('M_admin');
    }

	public function index() {
		$this->load->view('mahasiswa/regis_mhs');
	}

	 public function daftarMahasiswa() {
        $npm = $this->input->post("npm");
        $pass1 = $this->input->post("password1");
        $pass2 = $this->input->post("password2");

        $data = array(
            'npm' => $npm,
            'password' =>$pass2
        );
        $where = array('npm' => $npm);
        $cek = $this->M_login->cek_login('tb_mahasiswa', $where)->num_rows();
        if($pass1 == $pass2) {
            if($cek > 0){
                $this->M_login->tambah_data('auth_mahasiswa', $data);
                $this->session->set_flashdata('pesan', '<div style="color:#d50000; text-align:center; margin-bottom:5px;"><b>
            Berhasil membuat akun, silahkan masuk!</b>
        </div>');
                redirect('login_mahasiswa');
                
            } else {
                $this->session->set_flashdata('pesan', '<div style="color:#d50000; text-align:center; margin-bottom:5px;"><b>
            NPM tidak terdaftar!</b>
        </div>');
                redirect('daftar_mahasiswa');
                
            }
        } else {
            $this->session->set_flashdata('pesan', '<div style="color:#d50000; text-align:center; margin-bottom:5px;"><b>
            Password tidak cocok!</b>
        </div>');
            redirect('daftar_mahasiswa');
           
        }
    }
}
?>