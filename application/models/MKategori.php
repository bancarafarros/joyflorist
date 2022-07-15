<?php

    class MKategori extends CI_Model {

        public function tampilDataBunga() {
            return $this->db->get_where("barang", array('kategori' => 'Bunga'));
        }

        public function tampilDataBuketBunga() {
            return $this->db->get_where("barang", array('kategori' => 'Buket Bunga'));
        }

        public function tampilDataKaranganBunga() {
            return $this->db->get_where("barang", array('kategori' => 'Karangan Bunga'));
        }

        public function tampilDataHampers() {
            return $this->db->get_where("barang", array('kategori' => 'Hampers'));
        }

        public function tampilDataBuketUang() {
            return $this->db->get_where("barang", array('kategori' => 'Buket Uang'));
        }

        public function tampilDataBuketSnack() {
            return $this->db->get_where("barang", array('kategori' => 'Buket Snack'));
        }

        public function tampilDataCustom() {
            return $this->db->get_where("barang", array('kategori' => 'Custom'));
        }
    }

?>