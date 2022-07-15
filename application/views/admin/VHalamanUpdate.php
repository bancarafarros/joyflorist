<div class="container-fluid">
    <h3> <i class="fas fa-edit"></i> Update Data Barang</h3>

    <?php foreach ($barang as $brg) : ?>

        <form action="<?php echo base_url('admin/CDataBarang/fungsiUpdate') ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" name="nama" class="form-control" value="<?php echo $brg->nama ?>">
                <input type="hidden" name="id" class="form-control" value="<?php echo $brg->id ?>">
            </div>

            <div class="form-group">
                <label>Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control" value="<?php echo $brg->deskripsi ?>">
            </div>

            <div class="form-group">
                <label>Kategori</label>
                <select name="kategori" id="" class="form-control">
                    <option value="Buket Bunga" <?php echo ($brg->kategori == 'Buket Bunga' ? ' selected' : ''); ?>>Buket Bunga</option>
                    <option value="Karangan Bunga" <?php echo ($brg->kategori == 'Karangan Bunga' ? ' selected' : ''); ?>>Karangan Bunga</option>
                    <option value="Hampers" <?php echo ($brg->kategori == 'Hampers' ? ' selected' : ''); ?>>Hampers</option>
                    <option value="Buket Uang" <?php echo ($brg->kategori == 'Buket Uang' ? ' selected' : ''); ?>>Buket Uang</option>
                    <option value="Buket Snack" <?php echo ($brg->kategori == 'Buket Snack' ? ' selected' : ''); ?>>Buket Snack</option>
                </select>
            </div>

            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control" value="<?php echo $brg->harga ?>">
            </div>

            <div class="form-group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control" value="<?php echo $brg->stok ?>">
            </div>

            <div class="form-group">
                <label>Gambar</label>
                <input type="file" name="gambar" class="form-control"> <br>
                <img src="<?php echo base_url('./uploads/') . $brg->gambar ?>" border="0" width="70px" height="70px" />
                <input type="hidden" name="gambar" value="<?php echo $brg->gambar; ?>">
            </div>

            <button type="submit" class="btn btn-primary btn sm mb-1">Simpan</button>
        </form>

    <?php endforeach; ?>
</div>