<div class="container-fluid">
    <div class="row text-center mt-3">
        <?php foreach ($barang as $brg) : ?>

            <div class="card ml-2 mb-2" style="width: 15rem;">
                <img src="<?php echo base_url().'./uploads/'.$brg->gambar ?>" class="card-img-top" alt="..." >
                <div class="card-body">
                    <h5 class="card-title mb-1"><?php echo $brg->nama ?></h5>
                    <small><?php echo $brg->deskripsi ?></small> <br>
                    <span class="badge badge-pill badge-success mb-3">Rp<?php echo number_format($brg->harga, 0, ',', '.') ?></span> <br>
                    <?php echo anchor('customer/CCustomer/tambahKeranjang/'.$brg->id, '<div class="btn btn-sm btn-primary">+ Keranjang</div>') ?>
                    <?php echo anchor('customer/CCustomer/detailBarang/'.$brg->id, '<div class="btn btn-sm btn-success">Detail</div>') ?>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
</div>