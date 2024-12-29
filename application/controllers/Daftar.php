<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function index() {
        $query = $this->db->get('kue');
        $data['cakes'] = $query->result_array();
        $this->load->view('daftar_views', $data);
    }
}
?>
