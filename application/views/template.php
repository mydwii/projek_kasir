<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>mart</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- favicon
		============================================ -->
  <link rel="shortcut icon" type="image/x-icon" href="
<?= base_url('assets/notika-master/notika/') ?>img/favicon.ico">
  <!-- Google Fonts -->
  <link href="
<?= base_url('assets/notika-master/notika/') ?>https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="
<?= base_url('assets/notika-master/notika/') ?>css/bootstrap.min.css">
  <!-- font awesome CSS -->
  <link rel="stylesheet" href="
<?= base_url('assets/notika-master/notika/') ?>css/font-awesome.min.css">
  <!-- owl.carousel CSS -->
  <link rel="stylesheet" href="
<?= base_url('assets/notika-master/notika/') ?>css/owl.carousel.css">
  <link rel="stylesheet" href="
<?= base_url('assets/notika-master/notika/') ?>css/owl.theme.css">
  <link rel="stylesheet" href="
<?= base_url('assets/notika-master/notika/') ?>css/owl.transitions.css">
  <!-- meanmenu CSS -->
  <link rel="stylesheet" href="
<?= base_url('assets/notika-master/notika/') ?>css/meanmenu/meanmenu.min.css">
  <!-- animate CSS -->
  <link rel="stylesheet" href="
<?= base_url('assets/notika-master/notika/') ?>css/animate.css">
  <!-- normalize CSS -->
  <link rel="stylesheet" href="
<?= base_url('assets/notika-master/notika/') ?>css/normalize.css">
  <!-- mCustomScrollbar CSS -->
  <link rel="stylesheet" href="
<?= base_url('assets/notika-master/notika/') ?>css/scrollbar/jquery.mCustomScrollbar.min.css">
  <!-- jvectormap CSS -->
  <link rel="stylesheet" href="
<?= base_url('assets/notika-master/notika/') ?>css/jvectormap/jquery-jvectormap-2.0.3.css">
  <!-- Notika icon CSS -->
  <link rel="stylesheet" href="
<?= base_url('assets/notika-master/notika/') ?>css/notika-custom-icon.css">
  <!-- wave CSS -->
  <link rel="stylesheet" href="
<?= base_url('assets/notika-master/notika/') ?>css/wave/waves.min.css">
  <!-- main CSS -->
  <link rel="stylesheet" href="
<?= base_url('assets/notika-master/notika/') ?>css/main.css">
  <!-- style CSS -->
  <link rel="stylesheet" href="
<?= base_url('assets/notika-master/notika/') ?>style.css">
  <!-- responsive CSS -->
  <link rel="stylesheet" href="
<?= base_url('assets/notika-master/notika/') ?>css/responsive.css">
  <!-- modernizr JS -->
  <script src="<?= base_url('assets/notika-master/notika/') ?>js/vendor/modernizr-2.8.3.min.js"></script>
  <!-- bootstrap select CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('assets/notika-master/notika/') ?>css/bootstrap-select/bootstrap-select.css">
  <!-- Data Table JS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('assets/notika-master/notika/') ?>css/jquery.dataTables.min.css">

</head>

<body>
  <div class="header-top-area not-to-print">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="logo-area">
            <a href="#"><img src="<?= base_url('assets/notika-master/notika/') ?>img/logo/logo.png" alt="" /></a>
          </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
          <div class="header-top-menu">
            <ul class="nav navbar-nav notika-top-nav">
              <li class="nav-item dropdown">
                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-search"></i></span></a>
                <div role="menu" class="dropdown-menu search-dd animated flipInX">
                  <div class="search-input">
                    <i class="notika-icon notika-left-arrow"></i>
                    <input type="text" />
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-menu"></i></span></a>
                <div role="menu" class="dropdown-menu message-dd animated zoomIn">
                  <div class="hd-mg-tt">
                    <center>
                      <h1><?php echo $this->session->userdata('nama') ?></h1>
                    </center>
                    <h2><?php if ($this->session->userdata('level') == "Admin") {
                          echo "Admin ";
                        } else {
                          echo "Kasir";
                        } ?></h2>
                  </div>
                  <div class="hd-message-info">
                    <a href="#">
                      <div class="hd-message-sn">
                        <div class="hd-message-img">
                          <img src="img/post/1.jpg" alt="" />
                        </div>
                        <div class="hd-mg-ctn">
                          <h3>Password</h3>
                        </div>
                      </div>
                    </a>
                    <a href="<?= base_url('auth/logout') ?>">
                      <div class="hd-message-sn">
                        <div class="hd-message-img">
                        </div>
                        <div class="hd-mg-ctn">

                          <h3>Log Out</h3>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </li>
            </ul>
          </div>

        </div>
        </li>
        </ul>
      </div>
    </div>
  </div>
  </div>
  </div>
  <!-- End Header Top Area -->
  <!-- Mobile Menu start -->
  <div class="mobile-menu-area not-to-print">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="mobile-menu">
            <nav id="dropdown">
              <ul class="mobile-menu-nav">
                <li><a data-toggle="collapse" data-target="#Charts" href="<?= base_url('home') ?>">Home</a>
                </li>
                <li><a data-toggle="collapse" data-target="#Charts" href="<?= base_url('#') ?>">Pelanggan</a>
                </li>
                <li><a data-toggle="collapse" data-target="#Charts" href="<?= base_url('#') ?>">Supplier</a>
                </li>
                <li><a data-toggle="collapse" data-target="#Charts" href="<?= base_url('#') ?>">Pembelian</a>
                </li>
                <li><a data-toggle="collapse" data-target="#Charts" href="<?= base_url('#') ?>">Penjualan</a>
                </li>
                <li><a data-toggle="collapse" data-target="#Charts" href="<?= base_url('#') ?>">User</a>
                </li>
                <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages</a>
                  <ul id="Pagemob" class="collapse dropdown-header-top">
                    <li><a href="contact.html">Contact</a>
                    </li>
                    <li><a href="invoice.html">Invoice</a>
                    </li>
                    <li><a href="typography.html">Typography</a>
                    </li>
                    <li><a href="color.html">Color</a>
                    </li>
                    <li><a href="login-register.html">Login Register</a>
                    </li>
                    <li><a href="404.html">404 Page</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Mobile Menu end -->
  <!-- Main Menu area start-->
  <div class="main-menu-area mg-tb-40">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
            <?php $menu =  $this->uri->segment(1) ?>
            <?php $menu2 =  $this->uri->segment(2) ?>
            <li class="<?php if ($menu == 'home' || $menu == null) {
                          echo 'active';
                        } else {
                          echo "";
                        } ?>"><a data-toggle="" href="<?= site_url('home') ?>"><i class="notika-icon notika-house"></i> Home</a>
            </li>
            <li class="<?php if ($menu == 'pelanggan') {
                          echo 'active';
                        } else {
                          echo "";
                        } ?>"><a data-toggle="" href="<?= base_url('pelanggan') ?>"><i class="notika-icon notika-mail"></i> Pelanggan</a>
            </li>
            <li class="<?php if ($menu == 'supplier') {
                          echo 'active';
                        } else {
                          echo "";
                        } ?>"><a data-toggle="" href="<?= base_url('supplier') ?>"><i class="notika-icon notika-edit"></i> Supplier</a>
            </li>
            <li class="<?php if ($menu == 'produk') {
                          echo 'active';
                        } else {
                          echo "";
                        } ?>"><a data-toggle="tab" href="#produk"><i class="notika-icon notika-bar-chart"></i> Produk</a>
            </li>
            <li class="<?php if ($menu == 'penjualan') {
                          echo 'active';
                        } else {
                          echo "";
                        } ?>"><a data-toggle="tab" href="#penjualan"><i class="notika-icon notika-windows"></i> Penjualan</a>
            </li>
            <li class="<?php if ($menu == 'user') {
                          echo 'active';
                        } else {
                          echo "";
                        } ?>"><a data-toggle="" href="<?= site_url('user') ?>"><i class="notika-icon notika-form"></i> User</a>
            </li>
          </ul>
          <div class="tab-content custom-menu-content ">
            <div id="produk" class="tab-pane <?php if ($menu2 == 'categori') {
                                                echo 'active';
                                              } else if ($menu2 == 'unit') {
                                                echo "active";
                                              } else if ($menu2 == 'item') {
                                                echo "active";
                                              } else {
                                                echo "";
                                              } ?> notika-tab-menu-bg animated flipInX">
              <ul class="notika-main-menu-dropdown">
                <li class=""><a href="<?= base_url('produk/categori') ?>">Categories</a>
                </li>
                <li class=""><a href="<?= base_url('produk/unit') ?>">Units</a>
                </li>
                <li><a href="<?= base_url('produk/item') ?>">Items</a>
                </li>
              </ul>
            </div>
            <div id="penjualan" class="tab-pane <?php if ($menu2 == 'penjualan') {
                                                  echo 'active';
                                                } else if ($menu2 == 'stok_in') {
                                                  echo "active";
                                                } else if ($menu2 == 'stok_out') {
                                                  echo "active";
                                                } else {
                                                  echo "";
                                                } ?> notika-tab-menu-bg animated flipInX">
              <ul class="notika-main-menu-dropdown">
                <li class=""><a href="<?= base_url('penjualan/penjualan') ?>">Penjualan</a>
                </li>
                <li class=""><a href="<?= base_url('penjualan/stok_in') ?>">Stok In</a>
                </li>
                <li><a href="<?= base_url('penjualan/stok_out') ?>">Stok Out</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Main Menu area End-->
  <!-- Start Status area -->
  <div class="notika-status-area" style="min-height:450px;">
    <div class="container">
      <div class="row">
        <?= $contents ?>
      </div>
    </div>
  </div>

  <!-- End Realtime sts area-->
  <!-- Start Footer area-->
  <div class="footer-copyright-area not-to-print">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="footer-copy-right">
            <p>Copyright © 2024
              . All rights reserved. Template by <a href="https://colorlib.com">yoo.dwiio</a>.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Footer area-->
  <!-- jquery
		============================================ -->
  <script src="
  <?= base_url('assets/notika-master/notika/') ?>js/vendor/jquery-1.12.4.min.js"></script>

  <script src="<?= base_url('assets/notika-master/notika/') ?>js/charts/Chart.js"></script>
  <script src="<?= base_url('assets/notika-master/notika/') ?>js/charts/area-chart.js"></script>
  <script>
    var ctx = document.getElementById("areachartfalse");
    var areachartfalse = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ["<?= $nama_4 ?>", "<?= $nama_3 ?>", "<?= $nama_2 ?>", "<?= $nama_1 ?>", "<?= $nama_jigeum ?>"],
        datasets: [{
          label: "Penjualan Sebesar",
          fill: false,
          backgroundColor: '#00c292',
          borderColor: '#00c292',
          data: [<?= $bulan_4 ?>, <?= $bulan_3 ?>, <?= $bulan_2 ?>, <?= $bulan_1 ?>, <?= $bulan_ini ?>]
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        spanGaps: false,
        title: {
          display: true,
          text: 'Penjualan 5 Bulan Terakhir'
        },
        elements: {
          line: {
            tension: 0.000001
          }
        },
        plugins: {
          filler: {
            propagate: false
          }
        },
        scales: {
          xAxes: [{
            ticks: {
              autoSkip: false,
              maxRotation: 0
            }
          }]
        }
      }
    });
  </script>
  <script>
    var ctx = document.getElementById("areachart");
    var areachart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ["<?= $nama3 ?>", "<?= $nama2 ?>", "<?= $nama1 ?>"],
        datasets: [{
          label: "Suara sebesar",
          fill: false,
          backgroundColor: '#00c292',
          borderColor: '#00c292',
          data: [<?= $kandidat3 ?>, <?= $kandidat2 ?>, <?= $kandidat1 ?>]
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        spanGaps: false,
        title: {
          display: true,
          text: 'Jumlah Suara'
        },
        elements: {
          line: {
            tension: 0.000001
          }
        },
        plugins: {
          filler: {
            propagate: false
          }
        },
        scales: {
          xAxes: [{
            ticks: {
              autoSkip: false,
              maxRotation: 0
            }
          }]
        }
      }
    });
  </script>
  <!-- bootstrap JS
		============================================ -->
  <script src="
<?= base_url('assets/notika-master/notika/') ?>js/bootstrap.min.js"></script>
  <!-- wow JS
		============================================ -->
  <script src="
<?= base_url('assets/notika-master/notika/') ?>js/wow.min.js"></script>
  <!-- price-slider JS
		============================================ -->
  <script src="
<?= base_url('assets/notika-master/notika/') ?>js/jquery-price-slider.js"></script>
  <!-- owl.carousel JS
		============================================ -->
  <script src="
<?= base_url('assets/notika-master/notika/') ?>js/owl.carousel.min.js"></script>
  <!-- scrollUp JS
		============================================ -->
  <script src="
<?= base_url('assets/notika-master/notika/') ?>js/jquery.scrollUp.min.js"></script>
  <!-- meanmenu JS
		============================================ -->
  <script src="
<?= base_url('assets/notika-master/notika/') ?>js/meanmenu/jquery.meanmenu.js"></script>
  <!-- counterup JS
		============================================ -->
  <script src="
<?= base_url('assets/notika-master/notika/') ?>js/counterup/jquery.counterup.min.js"></script>
  <script src="
<?= base_url('assets/notika-master/notika/') ?>js/counterup/waypoints.min.js"></script>
  <script src="
<?= base_url('assets/notika-master/notika/') ?>js/counterup/counterup-active.js"></script>
  <!-- mCustomScrollbar JS
		============================================ -->
  <script src="
<?= base_url('assets/notika-master/notika/') ?>js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
  <!-- jvectormap JS
		============================================ -->
  <script src="
<?= base_url('assets/notika-master/notika/') ?>js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
  <script src="
<?= base_url('assets/notika-master/notika/') ?>js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="
<?= base_url('assets/notika-master/notika/') ?>js/jvectormap/jvectormap-active.js"></script>
  <!-- sparkline JS
		============================================ -->
  <script src="
<?= base_url('assets/notika-master/notika/') ?>js/sparkline/jquery.sparkline.min.js"></script>
  <script src="
<?= base_url('assets/notika-master/notika/') ?>js/sparkline/sparkline-active.js"></script>
  <!-- flot JS
		============================================ -->
  <script src="
<?= base_url('assets/notika-master/notika/') ?>js/flot/jquery.flot.js"></script>
  <script src="
<?= base_url('assets/notika-master/notika/') ?>js/flot/jquery.flot.resize.js"></script>
  <script src="
<?= base_url('assets/notika-master/notika/') ?>js/flot/curvedLines.js"></script>
  <script src="
<?= base_url('assets/notika-master/notika/') ?>js/flot/flot-active.js"></script>
  <!-- knob JS
		============================================ -->
  <script src="
<?= base_url('assets/notika-master/notika/') ?>js/knob/jquery.knob.js"></script>
  <script src="
<?= base_url('assets/notika-master/notika/') ?>js/knob/jquery.appear.js"></script>
  <script src="
<?= base_url('assets/notika-master/notika/') ?>js/knob/knob-active.js"></script>
  <!--  wave JS
		============================================ -->
  <script src="
<?= base_url('assets/notika-master/notika/') ?>js/wave/waves.min.js"></script>
  <script src="
<?= base_url('assets/notika-master/notika/') ?>js/wave/wave-active.js"></script>
  <!--  Chat JS
		============================================ -->
  <script src="
<?= base_url('assets/notika-master/notika/') ?>js/chat/moment.min.js"></script>
  <script src="
<?= base_url('assets/notika-master/notika/') ?>js/chat/jquery.chat.js"></script>
  <!--  todo JS
		============================================ -->
  <script src="
<?= base_url('assets/notika-master/notika/') ?>js/todo/jquery.todo.js"></script>
  <!-- plugins JS
		============================================ -->
  <script src="
<?= base_url('assets/notika-master/notika/') ?>js/plugins.js"></script>
  <!-- main JS
		============================================ -->
  <script src="
<?= base_url('assets/notika-master/notika/') ?>js/main.js"></script>
  <!-- bootstrap select JS
		============================================ -->
  <script src="<?= base_url('assets/notika-master/notika/') ?>js/bootstrap-select/bootstrap-select.js"></script>
  <script src="<?= base_url('assets/notika-master/notika/') ?>js/data-table/jquery.dataTables.min.js"></script>
  <script src="<?= base_url('assets/notika-master/notika/') ?>js/data-table/data-table-act.js"></script>
  <script>
    $(document).ready(function() {
      // dataTables
      $('#data-table-basic').dataTable();
      $('#data-table-basic1').dataTable();

      $('.pilih-item').on('click', function() {
        var id_item = $(this).data('id');
        var kode_produk = $(this).data('kode_produk');
        var nama = $(this).data('nama');
        var unit = $(this).data('unit'); // Ubah dari data-id_unit menjadi data-unit
        var stok = $(this).data('stok');

        $('#id_item').val(id_item);
        $('#kode_produk').val(kode_produk);
        $('#nama').val(nama);
        $('#unit').val(unit);
        $('#stok').val(stok);
        // console.log(kode_produk);
        $('#myModalitem').modal('hide');
      });
    });
  </script>
</body>

</html>