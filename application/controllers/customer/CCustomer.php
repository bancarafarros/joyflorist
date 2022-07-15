<?php

class CCustomer extends CI_Controller {

    public function __construct() {
        parent::__construct();

        if ($this->session->userdata('role_id') != '2') {
            redirect(base_url('CAuth'));
        }
    }

    public function tambahKeranjang($id) {
        $barang = $this->mbarang->find($id);
        
        $data = array(
            'id' => $barang->id,
            'qty' => 1,
            'price' => $barang->harga,
            'name' => $barang->nama
        );
        $this->cart->insert($data);
        redirect(base_url('CDashboard'));
    }

    public function detailKeranjang() {
        $this->load->view('customer/VHeader');
        $this->load->view('customer/VSidebar');
        $this->load->view('customer/VKeranjang');
        $this->load->view('customer/VFooter');
    }

    public function hapusKeranjang() {
        $this->cart->destroy();

        redirect(base_url('CDashboard'));
    }

    public function checkout() {
        $this->load->view('customer/VHeader');
        $this->load->view('customer/VSidebar');
        $this->load->view('customer/VCheckout');
        $this->load->view('customer/VFooter');
    }

    public function pembayaran() {
        $is_processed = $this->minvoice->index();

        if ($is_processed) {
            $this->cart->destroy();

            $this->load->view('customer/VHeader');
            $this->load->view('customer/VSidebar');
            $this->load->view('customer/VPembayaran');
            $this->load->view('customer/VFooter');
        
        } else {
            echo "Maaf, pesanan kamju gagal diproses";
        }
    }

    public function detailBarang($id) {
        $data['barang'] = $this->mbarang->detailBarang($id);
        
        $this->load->view('/customer/VHeader');
        $this->load->view('/customer/VSidebar');
        $this->load->view('/customer/VDetailBarang', $data);
        $this->load->view('/customer/VFooter');
    }

}

?>