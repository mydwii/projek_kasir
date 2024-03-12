<div class="data-table-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list">
                    <div class="basic-tb-hd">
                        <h2>Data Riwayat Transaksi Pelanggan</h2>
                    </div>
                    <div class="table-responsive">
                        <table id="data-table-basic" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>kode_penjualan</th>
                                    <th>Nama Produk</th>
                                    <th>Total Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($detail as $ab) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $ab['tanggal']; ?></td>
                                        <td><?= $ab['kode_penjualan']; ?></td>
                                        <td><?= $ab['nama']; ?></td>
                                        <td> Rp. <?= number_format($ab['total_harga']); ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>kode_penjualan</th>
                                    <th>Nama Produk</th>
                                    <th>Jumlah</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>