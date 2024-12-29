<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Velo extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Velo_model');
        $this->load->helper(array('url', 'form'));
    }

    public function index() {
        $data['cakes'] = $this->Velo_model->get_all_cakes();
        $this->load->view('velo_list', $data);
    }

    public function add() {
        $this->load->view('velo_add');
    }

    public function save() {
        $nama_kue = $this->input->post('nama_kue');
        $jumlah = $this->input->post('jumlah');
        $id_admin = $this->input->post('id_admin');
        $harga = $this->input->post('harga');
        $gambar = file_get_contents($_FILES['gambar']['tmp_name']);

        $data = array(
            'nama_kue' => $nama_kue,
            'jumlah' => $jumlah,
            'id_admin' => $id_admin,
            'harga' => $harga,
            'gambar' => $gambar
        );

        $this->Velo_model->add_cake($data);
        redirect('velo');
    }

    public function delete($id) {
        $this->Velo_model->delete_cake($id);
        redirect('velo');
    }
}
?>
