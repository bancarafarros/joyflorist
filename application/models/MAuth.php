<?php

class MAuth extends CI_Model {
    public function cekLogin() {
        $username = set_value('username');
        $password = set_value('password');
        // $nama = set_value('nama');

        $result = $this->db->where('username', $username)
                            ->where('password', $password)
                            // ->where('nama', $nama)
                            ->limit(1)
                            ->get('pengguna');

        if ($result->num_rows() > 0) {
            return $result->row();
        
        } else {
            return array();
        }
    }    
}

?>