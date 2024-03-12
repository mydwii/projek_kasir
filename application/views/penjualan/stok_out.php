<?= $this->session->flashdata('alert'); ?>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="modals-list mg-30">
        <div class="modals-single">
            <button type="button" class="btn btn-default btn-success" data-toggle="modal" data-target="#myModalsatu">Tambah Stok Out</button>
            <div class="modal fade" id="myModalsatu" role="dialog">
                <div class="modal-dialog modals-default">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="cmp-tb-hd cmp-int-hd">
                                <h2>Tambah Stok Out</h2>
                            </div>
                            <form action="<?= base_url('penjualan/stok_out/simpan') ?>" method="post">
                                <div class="form-example-int form-horizental">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <label class="hrzn-fm">Tanggal</label>
                                            </div>
                                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                <div class="nk-int-st">
                                                    <input type="date" name="tanggal" class="form-control" value="<?= date('Y-m-d') ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-example-int form-horizental">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <label class="hrzn-fm">Kode Produk</label>
                                            </div>
                                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                                <div class="nk-int-st">
                                                    <input type="hidden" name="kode_produk" value="">
                                                    <input type="text" class="form-control input-sm" id="kode_produk" name="kode_produk" required autofocus>
                                                </div>
                                            </div>
                                            <span class="input-group-btn justify-content-end">
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModalitem">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-example-int form-horizental">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <label class="hrzn-fm">Nama Produk</label>
                                            </div>
                                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                <div class="nk-int-st">
                                                    <input type="text" id="nama" class="form-control" placeholder="Nama Produk" name="nama" required readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-example-int form-horizental">
                                    <div class="form-group ic-cmp-int">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <label class="hrzn-fm">Keterangan</label>
                                            </div>
                                            <div class="col-lg-5 col-md-7 col-sm-7 col-xs-12">
                                                <div class="form-group ic-cmp">
                                                    <div class="nk-int-st">

                                                        <input type="text" id="unit" class="form-control" placeholder="Unit" name="id_unit" required readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-7 col-sm-7 col-xs-12">
                                                <div class="form-group ic-cmp-int">
                                                    <div class="nk-int-st">
                                                        <input type="text" id="stok" class="form-control" placeholder="Stok" name="stok" required readonly>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-example-int form-horizental">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <label class="hrzn-fm">Info</label>
                                            </div>
                                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                <div class="nk-int-st">
                                                    <input type="text" class="form-control" placeholder="ex. rusak, jatuh, kena air" name="detail" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-example-int form-horizental">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <label class="hrzn-fm">Jumlah</label>
                                            </div>
                                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                <div class="nk-int-st">
                                                    <input type="number" class="form-control" placeholder="Masukkan Jumlah" name="jumlah" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-example-int form-horizental">
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-default">Save changes</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="data-table-list">
            <div class="basic-tb-hd">
                <h2>Data Stok Out</h2>
            </div>
            <div class="table-responsive">
                <table id="data-table-basic" class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Kode Produk</th>
                            <th>Nama Produk</th>
                            <th>Jumlah</th>
                            <th>Info</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($stok as $ab) {
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $ab['tanggal']; ?></td>
                                <td><?= $ab['kode_produk']; ?></td>
                                <td><?= $ab['item_nama']; ?></td>
                                <td><?= $ab['jumlah']; ?></td>
                                <td><?= $ab['detail']; ?></td>
                                <td>
                                    <a href=" <?= site_url('penjualan/stok_out/delete_data/' . $ab['id_stok'] . '/' . $ab['id_item']) ?>" onclick="return confirm('Apakah anda yakin akan menghapus?')" class="btn btn-danger btn-icon-notika waves-effect nk-red"><i class="notika-icon notika-close"></i></a>
                                </td>
                            </tr>
                        <?php  }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Kode Produk</th>
                            <th>Nama Produk</th>
                            <th>Jumlah</th>
                            <th>Info</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="modals-list mg-30">
        <div class="modals-single">
            <div class="modal fade" id="myModalitem" role="dialog">
                <div class="modal-dialog modal-large">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="cmp-tb-hd cmp-int-hd">
                                <h2>Tambah Stok Out</h2>
                            </div>
                            <div class="table-responsive">
                                <table id="data-table-basic1" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Kode Produk</th>
                                            <th>Name</th>
                                            <th>detail</th>
                                            <th>Price</th>
                                            <th>Stock</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($item as $i) { ?>
                                            <tr>
                                                <td><?= $i['kode_produk'] ?></td>
                                                <td><?= $i['nama'] ?></td>
                                                <td><?= $i['unit'] ?></td>
                                                <td class="text-right"><?= $i['harga'] ?></td>
                                                <td class="text-right"><?= $i['stok'] ?></td>
                                                <td class="text-right">
                                                    <button class="btn btn-xs btn-success pilih-item" data-id="<?= $i['id_item'] ?>" data-kode_produk="<?= $i['kode_produk'] ?>" data-nama="<?= $i['nama'] ?>" data-unit="<?= $i['unit'] ?>" data-stok="<?= $i['stok'] ?>">
                                                        <i class="fa fa-check"></i> Select
                                                    </button>

                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>