<?php

class CDataBarang extends CI_Controller {

	public function __construct() {
        parent::__construct();

        if ($this->session->userdata('role_id') != '1') {
            redirect(base_url('CAuth'));
        }
    }
    
    public function index() {
        $data['barang'] = $this->MBarang->tampil_data()->result();

        $this->load->view('/admin/VHeader');
        $this->load->view('/admin/VSidebar');
        $this->load->view('/admin/VDataBarang', $data);
        $this->load->view('/admin/VFooter');
    }

    public function fungsiTambah() {
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$deskripsi = $this->input->post('deskripsi');
        $kategori = $this->input->post('kategori');
		$harga = $this->input->post('harga');
		$stok = $this->input->post('stok');
		
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
		$config['max_size']             = 100000000000000000000100000000000000000000;
		$config['max_width']            = 100000000000000000000100000000000000000000;
        $config['max_height']           = 100000000000000000000100000000000000000000;

        // $this->load->library('upload', $config);
		$this->upload->initialize($config);
		$file = $this->upload->do_upload('gambar');
		$data = $this->upload->data();
		// print_r($data);

		$gambar = $data['file_name'];
		print_r($gambar);
		// $this->db->insert($this->tabpas, $this);

		$ArrInsert = array(
			'id' => $id,
			'nama' => $nama,
			'deskripsi' => $deskripsi,
			'kategori' => $kategori,
			'harga' => $harga,
			'stok' => $stok,
			'gambar' => $gambar,
		);

		// $this->MForm->insertDataBaju($ArrInsert);
		$this->db->insert('barang', $ArrInsert);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Data berhasil disimpan</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>');
		redirect(base_url('admin/CDataBarang/index'));
	}

	// public function fungsiTambah() {
	// 	$this->load->library('form_validation');

	// 	$this->form_validation->set_rules('nama', 'Nama', 'required|alpha',
	// 	array('required' => '%s harus diisi', 'alpha' => '%s harus diisi dengan huruf saja'));

	// 	$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required',
	// 	array('required' => '%s harus diisi'));
		
	// 	$this->form_validation->set_rules('kategori', 'Kategori', 'required',
	// 	array('required' => '%s harus diisi'));

	// 	$this->form_validation->set_rules('harga', 'Harga', 'required',
	// 	array('required' => '%s harus diisi'));

	// 	if ($this->form_validation->run() == FALSE) {
	// 		$this->load->view('admin/VDataBarang');

	// 	} else {
	// 	$id = $this->input->post('id');
	// 	$nama = $this->input->post('nama');
	// 	$deskripsi = $this->input->post('deskripsi');
    //     $kategori = $this->input->post('kategori');
	// 	$harga = $this->input->post('harga');
	// 	$stok = $this->input->post('stok');
		
	// 	$config['upload_path'] = './uploads/';
	// 	$config['allowed_types'] = 'jpg|jpeg|png|gif';
	// 	$config['max_size']             = 100000000000000000000100000000000000000000;
	// 	$config['max_width']            = 100000000000000000000100000000000000000000;
    //     $config['max_height']           = 100000000000000000000100000000000000000000;

    //     // $this->load->library('upload', $config);
	// 	$this->upload->initialize($config);
	// 	$file = $this->upload->do_upload('gambar');
	// 	$data = $this->upload->data();
	// 	// print_r($data);

	// 	$gambar = $data['file_name'];
	// 	print_r($gambar);
	// 	// $this->db->insert($this->tabpas, $this);

	// 	$ArrInsert = array(
	// 		'id' => $id,
	// 		'nama' => $nama,
	// 		'deskripsi' => $deskripsi,
	// 		'kategori' => $kategori,
	// 		'harga' => $harga,
	// 		'stok' => $stok,
	// 		'gambar' => $gambar,
	// 	);

	// 	// $this->MForm->insertDataBaju($ArrInsert);
	// 	$this->db->insert('barang', $ArrInsert);
	// 	$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
	// 	<strong>Data berhasil disimpan</strong>
	// 	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	// 	<span aria-hidden="true">&times;</span>
	// 	</button>
	// 	</div>');
	// 	redirect(base_url('admin/CDataBarang/index'));
	// 	}
	// }

    public function halamanUpdate($id) {
        $where = array('id' => $id);
        $data['barang'] = $this->MBarang->halamanUpdate($where, 'barang')->result();
        $this->load->view('/admin/VHeader');
        $this->load->view('/admin/VSidebar');
        $this->load->view('/admin/VHalamanUpdate', $data);
        $this->load->view('/admin/VFooter');
    }

    public function fungsiUpdate() {
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$deskripsi = $this->input->post('deskripsi');
        $kategori = $this->input->post('kategori');
		$harga = $this->input->post('harga');
		$stok = $this->input->post('stok');
		
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
		$config['max_size']             = 100000000000000000000100000000000000000000;
		$config['max_width']            = 100000000000000000000100000000000000000000;
        $config['max_height']           = 100000000000000000000100000000000000000000;

        // $this->load->library('upload', $config);
		$this->upload->initialize($config);
		$file = $this->upload->do_upload('gambar');
		$data = $this->upload->data();
		
		if ($file) {
            $data = $this->upload->data();
            $gambar = $data['file_name'];
        
        } else {
            $gambar = $this->input->post('gambar');
        }

		print_r($gambar);

		$ArrUpdate = array(
			'id' => $id,
			'nama' => $nama,
			'deskripsi' => $deskripsi,
			'kategori' => $kategori,
			'harga' => $harga,
			'stok' => $stok,
			'gambar' => $gambar,
		);

		// $this->MForm->updateDataBaju($id, $ArrUpdate);
		$this->db->where('id', $id);
		$this->db->update('barang', $ArrUpdate);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Data berhasil diubah</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>');
		redirect(base_url('admin/CDataBarang/index'));
	}

    public function fungsiDelete($id) {
		// $this->MForm->deleteDataBaju($id);
		$this->db->where('id', $id);
		$this->db->delete('barang');
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Data berhasil dihapus</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>');
		redirect(base_url('admin/CDataBarang/index'));
	}

	public function halamanDetail($id) {
        $data['barang'] = $this->MBarang->detailBarang($id);
        
        $this->load->view('/admin/VHeader');
        $this->load->view('/admin/VSidebar');
        $this->load->view('/admin/VDetailBarang', $data);
        $this->load->view('/admin/VFooter');
    }
}

?>