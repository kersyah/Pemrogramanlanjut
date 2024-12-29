<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminAPI extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function index() {
        $admins = $this->db->get('admin')->result();
        $data['admins'] = $admins;
        $this->load->view('admin_list', $data);
    }

    public function detail($id_admin) {
        $this->db->where('id_admin', $id_admin);
        $admin = $this->db->get('admin')->row();
        $data['admin'] = $admin;
        $this->load->view('admin_detail', $data);
    }

    
}
