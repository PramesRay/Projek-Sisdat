<?php
class Auth extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Model_Auth');
    }
    function login(){
        ceklog();
        $this->load->view('auth/login');
    }
    function ceklogin(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $login = $this->Model_Auth->getLogin($username, $password);
        $ceklogin = $login->num_rows();
        $datalogin = $login->row_array();
        $data = array(
            'id_user' => $datalogin['id_user'] = isset($datalogin['id_user']) ? $datalogin['id_user'] : '',
            'nama_lengkap' => $datalogin['nama_lengkap'] = isset($datalogin['nama_lengkap']) ? $datalogin['nama_lengkap'] : '',
            'no_hp' => $datalogin['no_hp'] = isset($datalogin['no_hp']) ? $datalogin['no_hp'] : '',
            'username' => $datalogin['username'] = isset($datalogin['username']) ? $datalogin['username'] : '',
            'password' => $datalogin['password'] = isset($datalogin['password']) ? $datalogin['password'] : '',
            'level' => $datalogin['level'] = isset($datalogin['level']) ? $datalogin['level'] : ''
        );
        $this->session->set_userdata($data);
        if ($ceklogin == 1){
            redirect('dashboard');
        }
        else{
            $this->session->set_flashdata('msg', '
            <div class="alert alert-warning" role="alert">
                <!-- SVG icon code with class="mr-1" -->
                Username / password anda salah atau anda tidak memiliki akun.
            </div>
            ');
            redirect ('auth/login', 'refresh');
        }
    }
    function logout(){
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
    