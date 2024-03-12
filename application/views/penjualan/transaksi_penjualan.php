<?= $this->session->flashdata('alert'); ?>
<div class="row">
    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
        <div class="form-example-wrap mg-t-30">
            <div class="cmp-tb-hd cmp-int-hd">
                <h2>Pilih Produk yang akan dijual</h2>
            </div>
            <div class="form-example-int">
                <div class="form-group">
                    <label class="form-label">Nama Pelanggan</label>
                    <div class="nk-int-st col-6">
                        <input type="text" class="form-control input-md" name="id_pelanggan" value="<?= $nama ?>">
                    </div>
                </div>
            </div>
            <form action="<?= base_url('penjualan/penjualan/addtemp') ?>" method="post">

                <input type="hidden" class="form-control input-md" name="id_pelanggan" value="<?= $id_pelanggan ?>">
                <div class="form-example-int">
                    <div class="form-group">
                        <label class="form-label">Produk</label>
                        <input type="hidden" name="kode_penjualan" value="<?= $nota ?>">
                        <div class="bootstrap-select nk-int-st col-6">
                            <select name="id_produk" class="from-control input-md selectpicker" id="">
                                <option value="">- Pilih -</option>
                                <?php foreach ($item as $b) { ?>
                                    <option value="<?= $b['id_item'] ?>"><?= $b['nama'] ?> - <?= $b['kode_produk'] ?>(<?= $b['stok'] ?>)</option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-example-int">
                    <div class="form-group">
                        <label class="form-label">Jumlah</label>
                        <div class="nk-int-st col-6">
                            <input type="number" class="form-control input-md" name="jumlah" placeholder="Enter Jumlah">
                        </div>
                    </div>
                </div>
                <div class="form-example-int mg-t-15">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                        </div>
                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                            <button class="btn btn-success notika-btn-success waves-effect">Tambah Keranjang</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 mt-3">
        <div class="form-example-wrap mg-t-30">
            <div class="cmp-tb-hd cmp-int-hd">
                <h2>Daftar Produk yang di pilih</h2>
            </div>
            <div class="table-responsive">
                <table id="data-table-basic" class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>Nama Produk</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $cek = 0;
                        $total = 0;
                        $no = 1;
                        foreach ($temp as $ab) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $ab['kode_produk']; ?></td>
                                <td><?= $ab['nama']; ?></td>
                                <td>
                                    <?php if ($ab['jumlah'] <= $ab['stok']) {
                                        echo $ab['jumlah'];
                                    } ?>
                                    <?php if ($ab['jumlah'] > $ab['stok']) {
                                        echo "<span style='padding:3px;' class='bg-danger'>stok tidak cukup</span>";
                                        $cek = 1;
                                    } ?>
                                </td>
                                <td>Rp. <?= number_format($ab['harga']) ?></td>
                                <td>Rp. <?= number_format($ab['jumlah'] * $ab['harga']) ?></td>
                                <td><a href="<?= site_url('penjualan/penjualan/delete_datatemp/' . $ab['id_temp']) ?>" onclick="return confirm('Apakah anda yakin akan menghapus?')" class="btn btn-danger btn-icon-notika waves-effect nk-red"><i class="notika-icon notika-close"></i></a>
                                </td>
                            </tr>
                        <?php $total = $total + $ab['jumlah'] * $ab['harga'];
                        } ?>
                        <tr>
                            <td colspan="5">Total Harga</td>
                            <td>Rp. <?= number_format($total); ?></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>Nama Produk</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="form-example-int mg-t-15">
                <form action="<?= base_url('penjualan/penjualan/bayarin') ?>" method="post">
                    <input type="hidden" name="id_pelanggan" value="<?= $id_pelanggan; ?>">
                    <input type="hidden" name="total_harga" value="<?= $total; ?>">
                    <?php if ($temp <> NULL and ($cek == 0)) { ?>
                        <button class="btn btn-success notika-btn-success waves-effect float-end">Bayar</button>
                    <?php } ?>
                </form>
            </div>
        </div>

    </div>
</div>