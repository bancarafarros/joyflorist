<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-success">
                <?php 
                $grand_total = 0;

                if ($keranjang = $this->cart->contents()) {
                    
                    foreach ($keranjang as $item) {
                        $grand_total = $grand_total + $item['subtotal'];
                    }

                    echo "Total belanja Anda sebesar Rp". number_format($grand_total, 0, ',', '.');
                ?>
            </div> <br><br>

            <h3>Input Alamat Pengiriman dan Pembayaran</h3>

            <form action="<?php echo base_url('customer/CCustomer/pembayaran') ?>" method="post">
            
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" placeholder="Alamat">
                    </div>

                    <div class="form-group">
                        <label>Nomor Telepon</label>
                        <input type="text" name="notlp" class="form-control" placeholder="Nomor Telepon">
                    </div>

                    <div class="form-group">
                        <label>Ekspedisi</label>
                        <select class="form-control">
                            <option value="">JNT</option>
                            <option value="">SiCepat</option>
                            <option value="">Anteraja</option>
                            <option value="">GoSend</option>
                            <option value="">Grab</option>
                            <option value="">JNE</option>
                            <option value="">TIKI</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Metode Pembayaran</label>
                        <select class="form-control">
                            <option value="">Mandiri</option>
                            <option value="">BRI</option>
                            <option value="">BCA</option>
                            <option value="">BTN</option>
                            <option value="">BNI</option>
                            <option value="">Danamon</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary mb-3">Simpan</button>
            </form>

            <?php } else {
                echo "<h4>Maaf, keranjang kamu masih kosong nih";
            } ?>

        </div>
        <div class="col-md-2"></div>
    </div>
</div>