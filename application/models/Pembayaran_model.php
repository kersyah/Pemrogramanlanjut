<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran_model extends CI_Model {
    public function get_combined_data() {
        // Fetch data from `pemesanan` and join with `pembayaran` on `total`
        $this->db->select('pemesanan.tanggal, pemesanan.nama, pemesanan.email, pemesanan.jumlah, pemesanan.metode, pembayaran.total');
        $this->db->from('pemesanan');
        $this->db->join('pembayaran', 'pemesanan.total = pembayaran.total', 'inner');
        $query = $this->db->get();
        return $query->result_array(); // Return data as an associative array
    }
}
