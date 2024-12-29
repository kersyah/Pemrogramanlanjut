<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(['url', 'form']);
        $this->load->library('form_validation');
        $this->load->database(); 
    }

    public function index() {
        $this->load->view('signup_views');
    }

    public function register() {
        $this->form_validation->set_rules('nama', 'Name', 'required');
        $this->form_validation->set_rules('telp', 'Phone', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('alamat', 'Address', 'required');

        if ($this->form_validation->run() == FALSE) {
           
            $this->load->view('signup_views');
        } else {

            $data = [
                'nama'     => $this->input->post('nama'),
                'telp'     => $this->input->post('telp'),
                'email'    => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT), 
                'alamat'   => $this->input->post('alamat')
            ];
            if ($this->db->insert('user', $data)) {
                redirect('login');
            } else {
              
                $data['error'] = 'Failed to create an account. Please try again.';
                $this->load->view('signup_views', $data);
            }
        }
    }

    public function success() {
        $this->load->view('signup_success');
    }
}
