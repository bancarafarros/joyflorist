<?php

class CRegistrasi extends CI_Controller {
    public function index() {
        $this->load->view('VRegistrasi');
    }

    public function registrasi() {
        $data = array (
            'id' => '',
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'role_id' => 2,
        );

        $this->db->insert('pengguna', $data);
        redirect('CAuth');
        
    }

}

?>