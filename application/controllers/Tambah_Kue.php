<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah_Kue extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database(); 
        $this->load->helper(array('url', 'form'));
        $this->load->library(array('form_validation', 'session')); 
    }


    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->form_validation->set_rules('nama_kue', 'Nama Kue', 'required');
            $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|integer');
            $this->form_validation->set_rules('harga', 'Harga', 'required|decimal');

            if ($this->form_validation->run() === FALSE) {
                $this->session->set_flashdata('error', 'Validasi gagal. Pastikan semua data diisi dengan benar.');
            } else {
                $gambar = $this->upload_image();

                $data = array(
                    'nama_kue' => $this->input->post('nama_kue'),
                    'jumlah' => $this->input->post('jumlah'),
                    'id_admin' => $this->input->post('id_admin'),
                    'harga' => $this->input->post('harga'),
                    'gambar' => $gambar
                );

                if ($this->db->insert('kue', $data)) {
                    $this->session->set_flashdata('success', 'Data berhasil ditambahkan.');
                    redirect('kue');
                } else {
                    $this->session->set_flashdata('error', 'Gagal menyimpan data ke database.');
                }
            }
        }

        $this->load->view('tambah_kue');
    }
    private function upload_image()
    {
        if (!empty($_FILES['gambar']['name'])) {
            $file = $_FILES['gambar']['tmp_name']; 
            return file_get_contents($file); 
        }
        return NULL; 
    }
}
