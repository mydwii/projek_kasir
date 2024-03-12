<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Login Register | Notika - Notika Admin Template</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- favicon
		============================================ -->
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/notika-master/notika/') ?>img/favicon.ico">
  <!-- Google Fonts
		============================================ -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
  <!-- Bootstrap CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('assets/notika-master/notika/') ?>css/bootstrap.min.css">
  <!-- font awesome CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('assets/notika-master/notika/') ?>css/font-awesome.min.css">
  <!-- owl.carousel CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('assets/notika-master/notika/') ?>css/owl.carousel.css">
  <link rel="stylesheet" href="<?= base_url('assets/notika-master/notika/') ?>css/owl.theme.css">
  <link rel="stylesheet" href="<?= base_url('assets/notika-master/notika/') ?>css/owl.transitions.css">
  <!-- animate CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('assets/notika-master/notika/') ?>css/animate.css">
  <!-- normalize CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('assets/notika-master/notika/') ?>css/normalize.css">
  <!-- mCustomScrollbar CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('assets/notika-master/notika/') ?>css/scrollbar/jquery.mCustomScrollbar.min.css">
  <!-- wave CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('assets/notika-master/notika/') ?>css/wave/waves.min.css">
  <!-- Notika icon CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('assets/notika-master/notika/') ?>css/notika-custom-icon.css">
  <!-- main CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('assets/notika-master/notika/') ?>css/main.css">
  <!-- style CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('assets/notika-master/notika/') ?>style.css">
  <!-- responsive CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('assets/notika-master/notika/') ?>css/responsive.css">
  <!-- modernizr JS
		============================================ -->
  <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
  <div class="login-content mt-3">
    <!-- Login -->
    <div class="nk-block toggled" id="l-login">
      <div>
        <form action="<?= base_url('auth/login') ?>" method="post">
          <div class="nk-form">
            <h3 class="mb-3">Kasir Penjualan</h3>
            <?= $this->session->flashdata('alert'); ?>
            <div class="input-group">
              <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
              <div class="nk-int-st">
                <input type="text" class="form-control" placeholder="Username" name="username">
              </div>
            </div>
            <div class="input-group mg-t-15">
              <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
              <div class="nk-int-st">
                <input type="password" class="form-control" placeholder="Password" name="password">
              </div>
            </div>

            <button name="login" type="submit" class="btn btn-login btn-warning btn-float"><i class="notika-icon notika-right-arrow right-arrow-ant"></i></button>
          </div>
        </form>
      </div>


    </div>
    <!-- Login Register area End-->
    <!-- jquery
		============================================ -->
    <script src="<?= base_url('assets/notika-master/notika/') ?>js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?= base_url('assets/notika-master/notika/') ?>js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="<?= base_url('assets/notika-master/notika/') ?>js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="<?= base_url('assets/notika-master/notika/') ?>js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="<?= base_url('assets/notika-master/notika/') ?>js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?= base_url('assets/notika-master/notika/') ?>js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?= base_url('assets/notika-master/notika/') ?>js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="<?= base_url('assets/notika-master/notika/') ?>js/counterup/jquery.counterup.min.js"></script>
    <script src="<?= base_url('assets/notika-master/notika/') ?>js/counterup/waypoints.min.js"></script>
    <script src="<?= base_url('assets/notika-master/notika/') ?>js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?= base_url('assets/notika-master/notika/') ?>js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="<?= base_url('assets/notika-master/notika/') ?>js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?= base_url('assets/notika-master/notika/') ?>js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="<?= base_url('assets/notika-master/notika/') ?>js/flot/jquery.flot.js"></script>
    <script src="<?= base_url('assets/notika-master/notika/') ?>js/flot/jquery.flot.resize.js"></script>
    <script src="<?= base_url('assets/notika-master/notika/') ?>js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="<?= base_url('assets/notika-master/notika/') ?>js/knob/jquery.knob.js"></script>
    <script src="<?= base_url('assets/notika-master/notika/') ?>js/knob/jquery.appear.js"></script>
    <script src="<?= base_url('assets/notika-master/notika/') ?>js/knob/knob-active.js"></script>
    <!--  Chat JS
		============================================ -->
    <script src="<?= base_url('assets/notika-master/notika/') ?>js/chat/jquery.chat.js"></script>
    <!--  wave JS
		============================================ -->
    <script src="<?= base_url('assets/notika-master/notika/') ?>js/wave/waves.min.js"></script>
    <script src="<?= base_url('assets/notika-master/notika/') ?>js/wave/wave-active.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="<?= base_url('assets/notika-master/notika/') ?>js/icheck/icheck.min.js"></script>
    <script src="<?= base_url('assets/notika-master/notika/') ?>js/icheck/icheck-active.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="<?= base_url('assets/notika-master/notika/') ?>js/todo/jquery.todo.js"></script>
    <!-- Login JS
		============================================ -->
    <script src="<?= base_url('assets/notika-master/notika/') ?>js/login/login-action.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="<?= base_url('assets/notika-master/notika/') ?>js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?= base_url('assets/notika-master/notika/') ?>js/main.js"></script>
</body>

</html>