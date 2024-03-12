<?= $this->session->flashdata('alert'); ?>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="modals-list mg-30">
        <div class="modals-single">
            <button type="button" class="btn btn-default btn-success" data-toggle="modal" data-target="#myModalone">Tambah Unit</button>
            <div class="modal fade" id="myModalone" role="dialog">
                <div class="modal-dialog modals-default">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="cmp-tb-hd cmp-int-hd">
                                <h2>Tambah Unit</h2>
                            </div>
                            <form action="<?= base_url('produk/unit/simpan') ?>" method="post">
                                <div class="form-example-int form-horizental">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                <label class="hrzn-fm">Unit</label>
                                            </div>
                                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                <div class="nk-int-st">
                                                    <input type="text" class="form-control input-sm" placeholder="Enter Unit" name="unit" required>
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
                <h2>Data Unit</h2>
            </div>
            <div class="table-responsive">
                <table id="data-table-basic" class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Unit</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($unit as $ab) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $ab['unit']; ?></td>
                                <td><a href="<?= site_url('produk/unit/delete_data/' . $ab['id_unit']) ?>" onclick="return confirm('Apakah anda yakin akan menghapus?')" class="btn btn-danger btn-icon-notika waves-effect nk-red"><i class="notika-icon notika-close"></i></a>
                                    <button type="button" class="btn btn-lightgreen lightgreen-icon-notika btn-reco-mg btn-button-mg btn-success" data-toggle="modal" data-target="#myModaltwo<?= $ab['id_unit'] ?>"><i class="notika-icon notika-menus"></i></button>
                                    <div class="modal fade" id="myModaltwo<?= $ab['id_unit'] ?>" role="dialog">
                                        <div class="modal-dialog modals-default">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="cmp-tb-hd cmp-int-hd">
                                                        <h2>Edit Unit</h2>
                                                    </div>
                                                    <form action="<?= base_url('produk/unit/update') ?>" method="post">
                                                        <input type="hidden" name="id_unit" value="<?= $ab['id_unit'] ?>">
                                                        <div class="form-example-int form-horizental">
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                        <label class="hrzn-fm">Unit</label>
                                                                    </div>
                                                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                        <div class="nk-int-st">
                                                                            <input type="text" class="form-control input-sm" placeholder="Enter Unit" name="unit" value="<?= $ab['unit']; ?>">
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
                            <th>Unit</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>