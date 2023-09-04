<?php

class CInvoice extends CI_Controller {
    
    public function __construct() {
        parent::__construct();

        if ($this->session->userdata('role_id') != '1') {
            redirect(base_url('CAuth'));
        }
    }
    
    public function index() {
        $data['invoice'] = $this->MInvoice->tampilData();

        $this->load->view('/admin/VHeader');
        $this->load->view('/admin/VSidebar');
        $this->load->view('/admin/VInvoice', $data);
        $this->load->view('/admin/VFooter');
    }

    public function detailInvoice($id_invoice) {
        $data['invoice'] = $this->MInvoice->getIdInv($id_invoice);
        $data['pesanan'] = $this->MInvoice->getIdPsn($id_invoice);

        $this->load->view('/admin/VHeader');
        $this->load->view('/admin/VSidebar');
        $this->load->view('/admin/VDetailInvoice', $data);
        $this->load->view('/admin/VFooter');
    }
}

?>