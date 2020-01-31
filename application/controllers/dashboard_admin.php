<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard_admin extends CI_Controller {
function __construct(){
parent::__construct();
$this->load->database();
$this->load->model('M_admin');
if ($this->session->userdata('status')!='login') {
redirect('login_admin');
}
}
public function index() {
$this->load->view('bootstrap');
$admin['admin'] = $this->M_admin->profil_admin($this->session->userdata('username'));
$data['mahasiswa'] = $this->M_admin->ambil_data()->result();
$this->load->view('admin/dashboard_admin_view',$data);
}
 public function data_mahasiswa()
    {
        $data['datamhs'] = $this->M_admin->tampil_data_mhs("tb_mahasiswa");
        $this->load->view('admin/edit_mahasiswa', $data);


    }
public function delete($id){
$where = array('npm' => $id);
$this->M_admin->delete_mhs('tb_mahasiswa', $where);
$this->session->set_flashdata("dihapus", '<div style="color:#32a852;">Berhasil menghapus data</div>');
redirect("dashboard_admin");
}
public function tambah(){
$npm = $this->input->post("npm");
$nama = $this->input->post("nama");
$kelas = $this->input->post("kelas");
$jurusan = $this->input->post("jurusan");
$alamat = $this->input->post("alamat");
$status = $this->input->post("status");
$tmpt_lahir = $this->input->post("tmpt_lahir");
$jk = $this->input->post("jk");
$data = array(
'npm' => $npm,
'nama' => $nama,
'kelas' => $kelas,
'jurusan' => $jurusan,
'alamat' => $alamat,
'status' => $status,
'tmpt_lahir' => $tmpt_lahir,
'jk' => $jk
);
$this->M_admin->tambah_data("tb_mahasiswa", $data);
redirect("dashboard_admin");
}


    public function datamhs()
    {
      
        $datamhs['datamhs'] = $this->M_admin->tampil_mhs("tb_mahasiswa");
        $this->load->view('admin/dashboard_admin_view', $datamhs);

    }


public function editdatamhs($id = null)
    {
        if(is_null($id)){
            $this->session->set_flashdata('message_id', '<div class="materialert pink">
            <div class="material-icons">error_outline</div>
            Data tidak ada
        </div>');
            redirect("admin/datamhs");
        } else {
            $where = array('npm' => $id);
            $data['title'] = 'Admin';
            $data['datamhs'] = $this->M_admin->edit_data("tb_mahasiswa",$where)->row_array();
            $this->session->set_userdata($where);
            $this->load->view('admin/dashboard_admin_view', $id);
        }
    }


}
?>