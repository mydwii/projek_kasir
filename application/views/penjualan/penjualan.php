<?= $this->session->flashdata('alert'); ?>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="modals-list mg-30">
        <div class="modals-single">
            <button type="button" class="btn btn-default btn-success" data-toggle="modal" data-target="#myModalone">Tambah Penjualan</button>
            <div class="modal fade" id="myModalone" role="dialog">
                <div class="modal-dialog modals-default">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="cmp-tb-hd cmp-int-hd">
                                <h2>Tambah Penjualan</h2>
                            </div>
                            <div class="form-example-int form-horizental">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="table-responsive">
                                            <table id="data-table-basic" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama</th>
                                                        <th>Alamat</th>
                                                        <th>Telepon</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($pelanggan as $ab) { ?>
                                                        <tr>
                                                            <td><?= $no++ ?></td>
                                                            <td><?= $ab['nama']; ?></td>
                                                            <td><?= $ab['alamat']; ?></td>
                                                            <td><?= $ab['telp']; ?></td>
                                                            <td><a href="<?= base_url("penjualan/penjualan/transaksi/" . $ab['id_pelanggan']) ?>" class="btn btn-success notika-btn-success waves-effect">Pilih</a></td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama</th>
                                                        <th>Alamat</th>
                                                        <th>Telepon</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="data-table-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list">
                    <div class="basic-tb-hd">
                        <h2>Penjualan Hari ini</h2>
                    </div>
                    <div class="table-responsive">
                        <table id="data-table-basic1" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No Nota</th>
                                    <th>Nominal</th>
                                    <th>Pelanggan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $total = 0;
                                $no = 1;
                                foreach ($penjualan as $ab) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $ab['kode_penjualan']; ?></td>
                                        <td>Rp. <?= number_format($ab['total_harga']); ?></td>
                                        <td><?= $ab['nama']; ?></td>
                                        <td><a href="<?= base_url("penjualan/penjualan/invoice/" . $ab['kode_penjualan']) ?>" class="btn btn-success notika-btn-success waves-effect">cek</a></td>
                                    </tr>
                                <?php $total = $total + $ab['total_harga'];
                                } ?>
                                <tr>
                                    <td colspan="2">Total</td>
                                    <td colspan="">Rp. <?= number_format($total); ?> </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>No Nota</th>
                                    <th>Nominal</th>
                                    <th>Pelanggan</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>