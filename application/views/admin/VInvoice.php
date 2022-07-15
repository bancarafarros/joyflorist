<div class="container-fluid">
    <h4>Invoice Pemesanan Produk</h4>

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <tr>
                <th>Id Invoice</th>
                <th>Nama Pelanggan</th>
                <th>Alamat Pengiriman</th>
                <th>Tanggal Pemesanan</th>
                <th>Batas Pembayaran</th>
                <th>Aksi</th>
            </tr>

            <?php foreach ($invoice as $inv): ?>
                <tr>
                    <td><?php echo $inv->id_invoice ?></td>
                    <td><?php echo $inv->nama ?></td>
                    <td><?php echo $inv->alamat ?></td>
                    <td><?php echo $inv->tanggal_pesan ?></td>
                    <td><?php echo $inv->batas_bayar ?></td>
                    <td><?php echo anchor('/admin/CInvoice/detailInvoice/'.$inv->id_invoice, '<div class="btn btn-sm btn-primary">Detail</div>') ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>