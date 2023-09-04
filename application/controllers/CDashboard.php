<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CDashboard extends CI_Controller {

	public function index() {
        $data['barang'] = $this->MBarang->tampil_data()->result(); 

        $this->load->view('customer/VHeader');
        $this->load->view('customer/VSidebar');
        $this->load->view('customer/VDashboard', $data);
        $this->load->view('customer/VFooter');
    }
	
}
