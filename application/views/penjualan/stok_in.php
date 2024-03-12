<?= $this->session->flashdata('alert'); ?>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="modals-list mg-30">
        <div class="modals-single">
            <button type="button" class="btn btn-default btn-success" data-toggle="modal" data-target="#myModalsatu">Tambah Stok In</button>
            <div class="modal fade" id="myModalsatu" role="dialog">
                <div class="modal-dialog modals-default">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="cmp-tb-hd cmp-int-hd">
                                <h2>Tambah Stok In</h2>
                            </div>
                            <form action="<?= base_url('penjualan/stok_in/simpan') ?>" method="post">
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
                                                <label class="hrzn-fm">Detail</label>
                                            </div>
                                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                <div class="nk-int-st">
                                                    <input type="text" class="form-control" placeholder="ex. kulakan" name="detail" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-example-int form-horizental mg-t-15">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <label class="hrzn-fm">Nama Supplier</label>
                                            </div>
                                            <div class="bootstrap-select col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                <select class="selectpicker" name="kode_supplier">
                                                    <option value="">- Pilih -</option>

                                                    <?php foreach ($supplier as  $value) { ?>
                                                        <option value="<?= $value['kode_supplier'] ?>"><?= $value['nama'] ?></option>
                                                    <?php } ?>
                                                </select>
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
                <h2>Data Stok In</h2>
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
                                <td>
                                    <button type="button" class="btn btn-success" data-toggle="modal" id="select" data-target="#myModaltwo"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                    <div class="modal fade" id="myModaltwo" role="dialog">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <h2>Detail</h2>
                                                    <div class="modal-body table-responsive">
                                                        <table class="table table-bordered no-margin">
                                                            <tbody>
                                                                <tr>
                                                                    <th style="width:30%;">Kode Produk</th>
                                                                    <td><span><?= $ab['kode_produk']; ?></span></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="">Item Name</th>
                                                                    <td><span><?= $ab['item_nama']; ?></span></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="">Detail</th>
                                                                    <td><span><?= $ab['detail']; ?></span></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="">Supplier Name</th>
                                                                    <td><span><?= $ab['supplier_nama']; ?></span></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="">Jumlah</th>
                                                                    <td><span><?= $ab['jumlah']; ?></span></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="">Tanggal</th>
                                                                    <td><span><?= $ab['tanggal']; ?></span></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="">Penginput</th>
                                                                    <td><span><?= $ab['username']; ?></span></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Save changes</button>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href=" <?= site_url('penjualan/stok_in/delete_data/' . $ab['id_stok'] . '/' . $ab['id_item']) ?>" onclick="return confirm('Apakah anda yakin akan menghapus?')" class="btn btn-danger btn-icon-notika waves-effect nk-red"><i class="notika-icon notika-close"></i></a>
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
                                <h2>Tambah Stok In</h2>
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