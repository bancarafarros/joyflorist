<div class="container-fluid">
    <div class="row text-center mt-3">
        <?php foreach ($bunga as $bng) : ?>

            <div class="card ml-2 mb-2" style="width: 15rem;">
                <img src="<?php echo base_url().'./uploads/'.$bng->gambar ?>" class="card-img-top" alt="..." >
                <div class="card-body">
                    <h5 class="card-title mb-1"><?php echo $bng->nama ?></h5>
                    <small><?php echo $bng->deskripsi ?></small> <br>
                    <span class="badge badge-pill badge-success mb-3">Rp<?php echo number_format($bng->harga, 0, ',', '.') ?></span> <br>
                    <?php echo anchor('customer/CCustomer/tambahKeranjang/'.$bng->id, '<div class="btn btn-sm btn-primary">+ Keranjang</div>') ?>
                    <?php echo anchor('customer/CCustomer/detailBarang/'.$bng->id, '<div class="btn btn-sm btn-success">Detail</div>') ?>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
</div>