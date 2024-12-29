<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    // Constructor
    public function __construct() {
        parent::__construct();
        $this->load->database(); 
        $this->load->library('session'); 
    }

    private function cek_user($email_admin, $password_admin) {
        return $this->db->get_where('admin', array('email_admin' => $email_admin, 'password_admin' => $password_admin));
    }

    public function index() {
        $this->load->view('login_admin');
    }

    public function aksi_login() {
        $email_admin = $this->input->post('email_admin');
        $password_admin = $this->input->post('password_admin'); 

        $cek = $this->cek_user($email_admin, $password_admin)->num_rows();
        if ($cek > 0) {
            $data_session = array(
                'nama' => $email_admin,
                'status' => "login"
            );
            $this->session->set_userdata($data_session);
            redirect('AdminAPI'); 
        } else {
            $this->session->set_flashdata('error', 'Email atau password_admin salah!');
            redirect('Admin'); 
        }
}
}
