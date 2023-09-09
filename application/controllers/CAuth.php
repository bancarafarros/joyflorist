<?php

class CAuth extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        if ($this->session->userdata('role_id') == '1') {
            redirect(base_url('admin/CDashboard'));
        
        } else if ($this->session->userdata('role_id') == '2') {
            redirect(base_url('CDashboard'));
        
        } else {
            $this->load->view('VLogin');
        }

    }

    public function login() {
        $auth = $this->MAuth->cekLogin();

        if ($auth == FALSE) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>NGA DULU XOB</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect(base_url('CAuth'));

            } else {
                $this->session->set_userdata('nama', $auth->nama);
                $this->session->set_userdata('username', $auth->username);
                $this->session->set_userdata('role_id', $auth->role_id);

            switch ($auth->role_id) {
                case 1: redirect(base_url('admin/CDashboard'));
                    break;

                case 2: redirect(base_url('CDashboard'));
                    break;
                    
                default: break;
            }
        }
        
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect(base_url('CAuth'));
    }

}

?>