<?php

class CDashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();

        if ($this->session->userdata('role_id') != '1') {
            redirect(base_url('CAuth'));
        }
    }
    
    public function index() {
        $data['barang'] = $this->MBarang->tampil_data()->result();

        $this->load->view('/admin/VHeader');
        $this->load->view('/admin/VSidebar');
        $this->load->view('/admin/VDashboard', $data);
        $this->load->view('/admin/VFooter');
    }
}

?>