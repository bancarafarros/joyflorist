<?php

class CKategori extends CI_Controller {
    
    public function tampilDataBunga() {
        $data['bunga'] = $this->mkategori->tampilDataBunga()->result(); 

        $this->load->view('customer/VHeader');
        $this->load->view('customer/VSidebar');
        $this->load->view('customer/VBunga', $data);
        $this->load->view('customer/VFooter');
    }

    public function tampilDataBuketBunga() {
        $data['bunga'] = $this->mkategori->tampilDataBuketBunga()->result(); 

        $this->load->view('customer/VHeader');
        $this->load->view('customer/VSidebar');
        $this->load->view('customer/VBuketBunga', $data);
        $this->load->view('customer/VFooter');
    }

    public function tampilDataKaranganBunga() {
        $data['bunga'] = $this->mkategori->tampilDataKaranganBunga()->result(); 

        $this->load->view('customer/VHeader');
        $this->load->view('customer/VSidebar');
        $this->load->view('customer/VKaranganBunga', $data);
        $this->load->view('customer/VFooter');
    }

    public function tampilDataHampers() {
        $data['bunga'] = $this->mkategori->tampilDataHampers()->result(); 

        $this->load->view('customer/VHeader');
        $this->load->view('customer/VSidebar');
        $this->load->view('customer/VHampers', $data);
        $this->load->view('customer/VFooter');
    }

    public function tampilDataBuketUang() {
        $data['bunga'] = $this->mkategori->tampilDataBuketUang()->result(); 

        $this->load->view('customer/VHeader');
        $this->load->view('customer/VSidebar');
        $this->load->view('customer/VBuketUang', $data);
        $this->load->view('customer/VFooter');
    }

    public function tampilDataBuketSnack() {
        $data['bunga'] = $this->mkategori->tampilDataBuketSnack()->result(); 

        $this->load->view('customer/VHeader');
        $this->load->view('customer/VSidebar');
        $this->load->view('customer/VBuketSnack', $data);
        $this->load->view('customer/VFooter');
    }

    public function tampilDataCustom() {
        $data['bunga'] = $this->mkategori->tampilDataCustom()->result(); 

        $this->load->view('customer/VHeader');
        $this->load->view('customer/VSidebar');
        $this->load->view('customer/VCustom', $data);
        $this->load->view('customer/VFooter');
    }
}

?>