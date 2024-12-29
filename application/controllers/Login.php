<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database(); 
        $this->load->library('session'); 
    }

    private function cek_user($email, $password) {
        return $this->db->get_where('user', array('email' => $email, 'password' => $password));
    }

    public function index() {
        $this->load->view('login_view');
    }

    public function aksi_login() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $cek = $this->cek_user($email, $password)->num_rows();
        if ($cek > 0) {
            $data_session = array(
                'nama' => $email,
                'status' => "login"
            );
            $this->session->set_userdata($data_session);
            redirect('index');
        } else {
            $this->session->set_flashdata('error', 'Email atau password salah!');
            redirect('login');
        }
}
}
