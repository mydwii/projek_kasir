<?= $this->session->flashdata('alert'); ?>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="modals-list mg-30">
        <div class="modals-single">
            <button type="button" class="btn btn-default btn-success" data-toggle="modal" data-target="#myModalone">Tambah Pelanggan</button>
            <div class="modal fade" id="myModalone" role="dialog">
                <div class="modal-dialog modals-default">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="cmp-tb-hd cmp-int-hd">
                                <h2>Tambah Pelanggan</h2>
                            </div>
                            <form action="<?= base_url('pelanggan/simpan') ?>" method="post">
                                <div class="form-example-int form-horizental">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                <label class="hrzn-fm">Nama</label>
                                            </div>
                                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                <div class="nk-int-st">
                                                    <input type="text" class="form-control input-sm" placeholder="Enter Nama" name="nama" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-example-int form-horizental">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                <label class="hrzn-fm">Alamat</label>
                                            </div>
                                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                <div class="nk-int-st">
                                                    <textarea class="form-control auto-size" rows="2" placeholder="Enter Alamat" name="alamat"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-example-int form-horizental mg-t-15">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                <label class="hrzn-fm">Telepon</label>
                                            </div>
                                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                <div class="nk-int-st">
                                                    <input type="number" class="form-control input-sm" placeholder="Telepon" name="telp">
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
        </div>
    </div>
</div>
<div class="data-table-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list">
                    <div class="basic-tb-hd">
                        <h2>Data Pelanggan</h2>
                    </div>
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
                                        <td><a href="<?= site_url('pelanggan/delete_data/' . $ab['id_pelanggan']) ?>" onclick="return confirm('Apakah anda yakin akan menghapus?')" class="btn btn-danger btn-icon-notika waves-effect nk-red"><i class="notika-icon notika-close"></i></a>
                                            <button type="button" class="btn btn-lightgreen lightgreen-icon-notika btn-reco-mg btn-button-mg btn-success" data-toggle="modal" data-target="#myModaltwo<?= $ab['id_pelanggan'] ?>"><i class="notika-icon notika-menus"></i></button>
                                            <div class="modal fade" id="myModaltwo<?= $ab['id_pelanggan'] ?>" role="dialog">
                                                <div class="modal-dialog modals-default">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="cmp-tb-hd cmp-int-hd">
                                                                <h2>Edit Pelanggan</h2>
                                                            </div>
                                                            <form action="<?= base_url('pelanggan/update') ?>" method="post">
                                                                <input type="hidden" name="id_pelanggan" value="<?= $ab['id_pelanggan'] ?>">
                                                                <div class="form-example-int form-horizental">
                                                                    <div class="form-group">
                                                                        <div class="row">
                                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                                <label class="hrzn-fm">Nama</label>
                                                                            </div>
                                                                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                                <div class="nk-int-st">
                                                                                    <input type="text" class="form-control input-sm" placeholder="Enter Nama" name="nama" value="<?= $ab['nama']; ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-example-int form-horizental">
                                                                    <div class="form-group">
                                                                        <div class="row">
                                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                                <label class="hrzn-fm">Alamat</label>
                                                                            </div>
                                                                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                                <div class="nk-int-st">
                                                                                    <textarea class="form-control auto-size" rows="2" placeholder="Enter Alamat" name="alamat"><?= $ab['alamat']; ?></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-example-int form-horizental mg-t-15">
                                                                    <div class="form-group">
                                                                        <div class="row">
                                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                                <label class="hrzn-fm">Telepon</label>
                                                                            </div>
                                                                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                                <div class="nk-int-st">
                                                                                    <input type="number" class="form-control input-sm" placeholder="Telepon" name="telp" value="<?= $ab['telp']; ?>">
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
                                            <a href="<?= base_url("pelanggan/riwayat/" . $ab['id_pelanggan']) ?>" class="btn btn-success notika-btn-success waves-effect">riwayat</a>
                                        </td>
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