<?php

use LDAP\Result;

class MBarang extends CI_Model {
    public function tampil_data() {
        return $this->db->get('barang');
    }

    public function fungsiTambah($data) {
        $this->db->insert('barang', $data);
    }

    public function halamanUpdate($where, $table) {
        return $this->db->get_where($table, $where);
    }

    public function fungsiUpdate($id, $data) {
        $this->db->where('id', $id);
		$this->db->update('barang', $data);
    }

    function fungsiDelete($id) {
		$this->db->where('id', $id);
		$this->db->delete('barang');
	}

    public function find($id) {
        $result = $this->db->where('id', $id)
                           ->limit(1)
                           ->get('barang');
    if ($result->num_rows() > 0) {
        return $result->row();
    
    } else {
        return array();
    }

    }

    public function detailBarang($id) {
        $result = $this->db->where('id', $id)->get('barang');

        if ($result->num_rows() > 0) {
            return $result->result();
        
        } else {
            return false;
        }
    }
    
}

?>