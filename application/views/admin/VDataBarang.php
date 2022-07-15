<div class="container-fluid">
    
<?php echo $this->session->flashdata('message'); ?>

    <buttton class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#TambahBarang"><i class="fas fa-plus fa-sm"></i>  Tambah Barang</buttton>

    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th>NO</th>
                <th>Nama Barang</th>
                <th>Deskripsi</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
                <th colspan="3">Aksi</th>
            </tr>

            <?php
            $no = 1;
            foreach ($barang as $brg) :
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $brg->nama ?></td>
                    <td><?php echo $brg->deskripsi ?></td>
                    <td><?php echo $brg->kategori ?></td>
                    <td>Rp<?php echo number_format($brg->harga, 0, ',', '.') ?></td>
                    <td><?php echo number_format($brg->stok, 0, ',', '.') ?></td>
                    <td> 
                        <?php echo anchor('admin/CDataBarang/halamanDetail/'.$brg->id,
                        '<div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>')?>
                    </td>
                    <td>
                        <?php echo anchor('admin/CDataBarang/halamanUpdate/'.$brg->id,
                        '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>')?>
                    </td>
                    <td> 
                        <?php echo anchor('admin/CDataBarang/fungsiDelete/'.$brg->id,
                        '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="TambahBarang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('admin/CDataBarang/fungsiTambah') ?>" method="post" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Barang</label>
                                <input type="text" name="nama" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Deskripsi</label>
                                <input type="text" name="deskripsi" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Kategori</label>
                                <select name="kategori" id="" class="form-control">
                                    <option value="Buket Bunga">Buket Bunga</option>
                                    <option value="Karangan Bunga">Karangan Bunga</option>
                                    <option value="Hampers">Hampers</option>
                                    <option value="Buket Uang">Buket Uang</option>
                                    <option value="Buket Snack">Buket Snack</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Harga</label>
                                <input type="text" name="harga" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Stok</label>
                                <input type="text" name="stok" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Gambar</label>
                                <input type="file" name="gambar" class="form-control">
                            </div>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
                </form>

        </div>
    </div>
</div>