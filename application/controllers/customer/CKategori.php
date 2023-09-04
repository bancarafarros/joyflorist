<?php

class CKategori extends CI_Controller {
    
    public function tampilDataBunga() {
        $data['bunga'] = $this->MKategori->tampilDataBunga()->result(); 

        $this->load->view('customer/VHeader');
        $this->load->view('customer/VSidebar');
        $this->load->view('customer/VBunga', $data);
        $this->load->view('customer/VFooter');
    }

    public function tampilDataBuketBunga() {
        $data['bunga'] = $this->MKategori->tampilDataBuketBunga()->result(); 

        $this->load->view('customer/VHeader');
        $this->load->view('customer/VSidebar');
        $this->load->view('customer/VBuketBunga', $data);
        $this->load->view('customer/VFooter');
    }

    public function tampilDataKaranganBunga() {
        $data['bunga'] = $this->MKategori->tampilDataKaranganBunga()->result(); 

        $this->load->view('customer/VHeader');
        $this->load->view('customer/VSidebar');
        $this->load->view('customer/VKaranganBunga', $data);
        $this->load->view('customer/VFooter');
    }

    public function tampilDataHampers() {
        $data['bunga'] = $this->MKategori->tampilDataHampers()->result(); 

        $this->load->view('customer/VHeader');
        $this->load->view('customer/VSidebar');
        $this->load->view('customer/VHampers', $data);
        $this->load->view('customer/VFooter');
    }

    public function tampilDataBuketUang() {
        $data['bunga'] = $this->MKategori->tampilDataBuketUang()->result(); 

        $this->load->view('customer/VHeader');
        $this->load->view('customer/VSidebar');
        $this->load->view('customer/VBuketUang', $data);
        $this->load->view('customer/VFooter');
    }

    public function tampilDataBuketSnack() {
        $data['bunga'] = $this->MKategori->tampilDataBuketSnack()->result(); 

        $this->load->view('customer/VHeader');
        $this->load->view('customer/VSidebar');
        $this->load->view('customer/VBuketSnack', $data);
        $this->load->view('customer/VFooter');
    }

    public function tampilDataCustom() {
        $data['bunga'] = $this->MKategori->tampilDataCustom()->result(); 

        $this->load->view('customer/VHeader');
        $this->load->view('customer/VSidebar');
        $this->load->view('customer/VCustom', $data);
        $this->load->view('customer/VFooter');
    }
}

?>