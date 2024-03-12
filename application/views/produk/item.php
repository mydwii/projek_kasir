<?= $this->session->flashdata('alert'); ?>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="modals-list mg-30">
        <div class="modals-single">
            <button type="button" class="btn btn-default btn-success" data-toggle="modal" data-target="#myModalone">Tambah Produk</button>
            <div class="modal fade" id="myModalone" role="dialog">
                <div class="modal-dialog modals-default">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="cmp-tb-hd cmp-int-hd">
                                <h2>Tambah Produk</h2>
                            </div>
                            <form action="<?= base_url('produk/item/simpan') ?>" method="post" enctype="multipart/form-data">
                                <div class="form-example-int form-horizental">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                <label class="hrzn-fm">Kode Produk</label>
                                            </div>
                                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                <div class="nk-int-st">
                                                    <input type="text" class="form-control input-sm" placeholder="Enter Kode Produk" name="kode_produk" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-example-int form-horizental">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                <label class="hrzn-fm">Nama Produk</label>
                                            </div>
                                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                <div class="nk-int-st">
                                                    <input type="text" class="form-control input-sm" placeholder="Enter Nama Produk" name="nama" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-example-int form-horizental">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                <label class="hrzn-fm">Stok</label>
                                            </div>
                                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                <div class="nk-int-st">
                                                    <input type="number" class="form-control ic-cmp-int form-elet-mg" data-mask="999 999 999 9999" placeholder="Enter Stock Produk" name="stok" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-example-int form-horizental mg-t-15">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                <label class="hrzn-fm">Unit</label>
                                            </div>
                                            <div class="bootstrap-select col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                <select class="selectpicker" name="id_unit">
                                                    <option value="">- Pilih -</option>
                                                    <?php foreach ($unit as  $value) { ?>
                                                        <option value="<?= $value['id_unit'] ?>" required><?= $value['unit'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-example-int form-horizental mg-t-15">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                <label class="hrzn-fm">Kategori</label>
                                            </div>
                                            <div class="bootstrap-select col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                <select class="selectpicker" name="id_categori">
                                                    <option value="">- Pilih -</option>
                                                    <?php foreach ($categori as $ad) { ?>
                                                        <option value="<?= $ad['id_categori'] ?>" required><?= $ad['categori'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-example-int form-horizental">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                <label class="hrzn-fm">Harga</label>
                                            </div>
                                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                <div class="nk-int-st">
                                                    <input type="number" class="form-control ic-cmp-int form-elet-mg" placeholder="Rp. " name="harga" required>
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
                <h2>Data Produk</h2>
            </div>
            <div class="table-responsive">
                <table id="data-table-basic" class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Produk</th>
                            <th>Nama Produk</th>
                            <th>Stock</th>
                            <th>Unit</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Images</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($item as $ab) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $ab['kode_produk'] ?></td>
                                <td><?= $ab['nama'] ?></td>
                                <td><?= $ab['stok'] ?></td>
                                <td><?= $ab['unit'] ?></td>
                                <td><?= $ab['categori'] ?></td>
                                <td>Rp. <?= number_format($ab['harga']) ?></td>
                                <td> <img src="<?= base_url('assets/notika-master/uploads/') . $ab['images'] ?>" style="height:50px; width:50px;"></td>
                                <td><a href=" <?= site_url('produk/item/delete_data/' . $ab['id_item']) ?>" onclick="return confirm('Apakah anda yakin akan menghapus?')" class="btn btn-danger btn-icon-notika waves-effect nk-red"><i class="notika-icon notika-close"></i></a>
                                    <button type="button" class="btn btn-lightgreen lightgreen-icon-notika btn-reco-mg btn-button-mg btn-success" data-toggle="modal" data-target="#myModaltwo<?= $ab['id_item'] ?>"><i class="notika-icon notika-menus"></i></button>
                                    <div class="modal fade" id="myModaltwo<?= $ab['id_item'] ?>" role="dialog">
                                        <div class="modal-dialog modals-default">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="cmp-tb-hd cmp-int-hd">
                                                        <h2>Edit Produk</h2>
                                                    </div>
                                                    <form action="<?= base_url('produk/item/update') ?>" method="post" enctype="multipart/form-data">
                                                        <input type="hidden" name="id_item" value="<?= $ab['id_item'] ?>">
                                                        <div class="form-example-int form-horizental">
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                        <label class="hrzn-fm">Kode Produk</label>
                                                                    </div>
                                                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                        <div class="nk-int-st">
                                                                            <input type="text" class="form-control input-sm" placeholder="Enter Kode Produk" value="<?= $ab['kode_produk'] ?>" name="kode_produk" readonly>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-example-int form-horizental">
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                        <label class="hrzn-fm">Nama Produk</label>
                                                                    </div>
                                                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                        <div class="nk-int-st">
                                                                            <input type="text" class="form-control input-sm" placeholder="Enter Nama Produk" value="<?= $ab['nama'] ?>" name="nama">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-example-int form-horizental mg-t-15">
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                        <label class="hrzn-fm">Unit</label>
                                                                    </div>
                                                                    <div class="bootstrap-select col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                        <select class="selectpicker" name="id_unit">
                                                                            <option value="<?= $ab['id_unit'] ?>"><?= $ab['unit'] ?></option>
                                                                            <?php foreach ($unit as  $value) { ?>
                                                                                <option value="<?= $value['id_unit'] ?>"><?= $value['unit'] ?></option>
                                                                            <?php } ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-example-int form-horizental mg-t-15">
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                        <label class="hrzn-fm">Kategori</label>
                                                                    </div>
                                                                    <div class="bootstrap-select col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                        <select class="selectpicker" name="id_categori">
                                                                            <option value="<?= $ab['id_categori'] ?>"><?= $ab['categori'] ?></option>
                                                                            <?php foreach ($categori as $ad) { ?>
                                                                                <option value="<?= $ad['id_categori'] ?>"><?= $ad['categori'] ?></option>
                                                                            <?php } ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-example-int form-horizental">
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                        <label class="hrzn-fm">Harga</label>
                                                                    </div>
                                                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                        <div class="nk-int-st">
                                                                            <input type="number" class="form-control ic-cmp-int form-elet-mg" placeholder="Rp. " value="<?= $ab['harga'] ?>" name="harga">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-example-int form-horizental">
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                        <label class="hrzn-fm">Gambar</label>
                                                                    </div>
                                                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                        <div class="nk-int-st">
                                                                            <img src="<?= base_url('assets/notika-master/uploads/') . $ab['images'] ?>" style="width: 80%">
                                                                            <br>
                                                                            <input type="file" name="images" value="" id="image" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-default">Save changes</button>
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Kode Produk</th>
                            <th>Nama Produk</th>
                            <th>Stock</th>
                            <th>Unit</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Images</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>