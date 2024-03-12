<div class="data-table-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list">
                    <div class="basic-tb-hd">
                        <h2>Data Riwayat Transaksi Supplier</h2>
                    </div>
                    <div class="table-responsive">
                        <table id="data-table-basic" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Nama Produk</th>
                                    <th>Jumlah</th>
                                    <th>Tipe Barang</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($detail as $ab) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $ab['tanggal']; ?></td>
                                        <td><?= $ab['nama']; ?></td>
                                        <td><?= $ab['jumlah']; ?></td>
                                        <td><?php if ($ab['type'] == "in") {
                                                echo "Barang Masuk";
                                            } else {
                                                echo "Barang Keluar";
                                            }; ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Nama Produk</th>
                                    <th>Jumlah</th>
                                    <th>Tipe Barang</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>