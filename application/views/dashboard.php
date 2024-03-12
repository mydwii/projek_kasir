<?= $this->session->flashdata('alert'); ?>
<!-- Start Status area -->
<div class="notika-status-area mb-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-2">
                <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                    <div class="website-traffic-ctn">
                        <h2>Rp.<span class="counter"><?= number_format($hari_ini) ?></span></h2>
                        <p>Penjualan Hari ini</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-2">
                <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                    <div class="website-traffic-ctn">
                        <h2>Rp.<span class="counter"><?= number_format($bulan_ini) ?></span></h2>
                        <p>Penjualan Bulan ini</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-2">
                <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                    <div class="website-traffic-ctn">
                        <h2><span class="counter"><?= $transaksi ?></span></h2>
                        <p>Transaksi Hari ini</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-2">
                <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                    <div class="website-traffic-ctn">
                        <h2><span class="counter"><?= $produk ?></span></h2>
                        <p>Produk</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Status area-->
<br>
<div class="area-chart-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 ">
                <div class="area-chart-wp">
                    <canvas height="140vh" width="180vw" id="areachartfalse"></canvas>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="recent-items-wp notika-shadow sm-res-mg-t-30">
                    <div class="rc-it-ltd">
                        <div class="recent-items-ctn">
                            <div class="recent-items-title">
                                <h2>Barang Terlaris</h2>
                            </div>
                        </div>
                        <div class="recent-items-inn">
                            <table class="table table-inner table-vmiddle">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th style="width: 60px">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($sering as $ab) { ?>
                                        <tr>

                                            <td class="f-500 c-cyan"><?= $ab->jumlah ?></td>
                                            <td><?= $ab->nama ?></td>
                                            <td><?= $ab->harga ?></td>
                                            <td class="f-500 c-cyan"> </td>
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