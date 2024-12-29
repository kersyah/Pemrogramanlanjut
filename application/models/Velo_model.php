<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Velo_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database(); // Ensure database is loaded
    }

    public function get_all_cakes() {
        return $this->db->get('velo_bakery')->result_array();
    }
}
?>
