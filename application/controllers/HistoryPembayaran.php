<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HistoryPembayaran extends CI_Controller {
    public function index() {
        $query = $this->db->get('pemesanan');
        $data['payments'] = $query->result_array();
        $this->load->view('history_pembayaran', $data);
    }
}
