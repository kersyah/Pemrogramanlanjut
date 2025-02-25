<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kue extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database(); 
        $this->load->helper('url'); 
    }

    public function index()
    {
        $data['kue'] = $this->db->get('kue')->result();
        $this->load->view('admin_kue', $data);
    }
    public function delete_kue($id_kue)
    {
        if (empty($id_kue)) {
            $this->session->set_flashdata('error', 'ID Kue tidak ditemukan.');
            redirect('kue');
        }
        $this->db->where('id_kue', $id_kue);
        if ($this->db->delete('kue')) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus.');
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus data.');
        }
        redirect('kue');
    }
}
