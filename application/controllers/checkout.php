<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function index() {
        $this->db->select('nama');
        $this->db->order_by('id_pemesanan', 'DESC');
        $data['pemesanan'] = $this->db->get('pemesanan')->row_array();

        $this->load->view('checkout_views', $data);
    }
    
    public function process_payment() {
        $id_user = $this->input->post('id_user'); 
        $userName = $this->input->post('userName');
        $email = $this->input->post('email');
        $nama_kue = $this->input->post('nama_kue');
        $jumlah = $this->input->post('jumlah');
        $metode = $this->input->post('metode');
        $total = $this->input->post('total');


        $tanggal = date('Y-m-d');

        if (empty($id_user) || empty($userName)) {
            echo "Error: id_user and userName are required.";
            return;
        }

        $data = [
            'id_user' => $id_user, 
            'nama' => $userName,
            'tanggal' => $tanggal,  
            'email' => $email,
            'nama_kue' => $nama_kue,
            'jumlah' => $jumlah,
            'metode' => $metode,
            'total' => $total



        ];

        $this->db->insert('pemesanan', $data);

        if ($this->db->affected_rows() > 0) {
            redirect('HistoryPembayaran');
        } else {
            echo "Error: Unable to process the order.";
        }
    }
    
    
    

    public function success() {
        echo "Your order has been successfully processed!";
    }
}
