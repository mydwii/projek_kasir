<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <div class="col-md-12">
        <div class="invoice">
            <!-- begin invoice-company -->
            <div class="invoice-company text-inverse f-w-600 not-to-print">
                <span class="pull-right hidden-print">
                    <a href="javascript:window.print();" class="btn btn-sm btn-white m-b-10 p-l-5"><i class="fa fa-file t-plus-1 text-danger fa-fw fa-lg"></i> Export as PDF</a>
                    <a href="javascript:;" onclick="printInvoice()" class="btn btn-sm btn-white m-b-10 p-l-5"><i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a>
                </span>
                Aplikasi Kasir
            </div>
            <!-- end invoice-company -->
            <!-- begin invoice-header -->
            <div class="invoice-header">
                <div class="invoice-from">
                    <small>from</small>
                    <address class="m-t-5 m-b-5">
                        <strong class="text-inverse">Aplikasi Kasir</strong><br>
                        Kasir: <?php echo $jual->username ?><br>
                        Jabatan : <?php echo $jual->level ?><br>
                        Phone: (123) 456-7890<br>
                        Alamat : Jalan Matesih-Karanganyar No1
                    </address>
                </div>
                <div class="invoice-to">
                    <small>to</small>
                    <address class="m-t-5 m-b-5">
                        <strong class="text-inverse">Nama :</strong> <?= $penjualan->nama ?></strong><br>
                        Alamat :</strong> <?= $penjualan->alamat ?><br>
                        Phone :</strong> <?= $penjualan->telp ?><br>
                    </address>
                </div>
                <div class="invoice-date">
                    <small>Invoice / <?= $penjualan->tanggal ?></small>
                    <div class="date text-inverse m-t-5"><?= date('d F Y', strtotime($penjualan->tanggal)) ?></div>
                    <div class="invoice-detail">
                        #<?= $nota ?><br>
                    </div>
                </div>
            </div>
            <!-- end invoice-header -->
            <!-- begin invoice-content -->
            <div class="invoice-content">
                <!-- begin table-responsive -->
                <div class="table-responsive">
                    <table class="table table-invoice">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Barang</th>
                                <th>Nama Produk</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $total = 0;
                            $no = 1;
                            foreach ($detail as $ab) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $ab['kode_produk']; ?></td>
                                    <td><?= $ab['nama']; ?></td>
                                    <td><?= $ab['jumlah']; ?></td>
                                    <td>Rp. <?= number_format($ab['harga']) ?></td>
                                    <td>Rp. <?= number_format($ab['jumlah'] * $ab['harga']) ?></td>

                                </tr>
                            <?php $total = $total + $ab['jumlah'] * $ab['harga'];
                            } ?>
                        </tbody>
                    </table>
                </div>
                <!-- end table-responsive -->
                <!-- begin invoice-price -->
                <div class="invoice-price">
                    <div class="invoice-price-left">
                        <div class="invoice-price-row">
                            <div class="sub-price">
                                <small>TOTA HARGA</small>
                            </div>
                        </div>
                    </div>
                    <div class="invoice-price-right">
                        <small></small> <span class="f-w-600">Rp. <?= number_format($total); ?></span>
                    </div>
                </div>
                <!-- end invoice-price -->
            </div>
            <!-- end invoice-content -->
            <!-- begin invoice-note -->
            <div class="invoice-note">
                * Make all cheques payable to [Your Company Name]<br>
                * Payment is due within 30 days<br>
                * If you have any questions concerning this invoice, contact [Name, Phone Number, Email]
            </div>
            <!-- end invoice-note -->
            <!-- begin invoice-footer -->
            <div class="invoice-footer">
                <p class="text-center m-b-5 f-w-600">
                    THANK YOU FOR YOUR BUSINESS
                </p>
            </div>
            <!-- end invoice-footer -->
        </div>
    </div>
</div>
<style>
    body {
        margin-top: 20px;
        background: #eee;
    }

    .invoice {
        background: #fff;
        padding: 20px
    }

    .invoice-company {
        font-size: 20px
    }

    .invoice-header {
        margin: 0 -20px;
        background: #f0f3f4;
        padding: 20px
    }

    .invoice-date,
    .invoice-from,
    .invoice-to {
        display: table-cell;
        width: 1%
    }

    .invoice-from,
    .invoice-to {
        padding-right: 20px
    }

    .invoice-date .date,
    .invoice-from strong,
    .invoice-to strong {
        font-size: 16px;
        font-weight: 600
    }

    .invoice-date {
        text-align: right;
        padding-left: 20px
    }

    .invoice-price {
        background: #f0f3f4;
        display: table;
        width: 100%
    }

    .invoice-price .invoice-price-left,
    .invoice-price .invoice-price-right {
        display: table-cell;
        padding: 20px;
        font-size: 20px;
        font-weight: 600;
        width: 75%;
        position: relative;
        vertical-align: middle
    }

    .invoice-price .invoice-price-left .sub-price {
        display: table-cell;
        vertical-align: middle;
        padding: 0 20px
    }

    .invoice-price small {
        font-size: 12px;
        font-weight: 400;
        display: block
    }

    .invoice-price .invoice-price-row {
        display: table;
        float: left
    }

    .invoice-price .invoice-price-right {
        width: 25%;
        background: green;
        color: #fff;
        font-size: 28px;
        text-align: right;
        vertical-align: bottom;
        font-weight: 300
    }

    .invoice-price .invoice-price-right small {
        display: block;
        opacity: .6;
        position: absolute;
        top: 10px;
        left: 10px;
        font-size: 12px
    }

    .invoice-footer {
        border-top: 1px solid #ddd;
        padding-top: 10px;
        font-size: 10px
    }

    .invoice-note {
        color: #999;
        margin-top: 80px;
        font-size: 85%
    }

    .invoice>div:not(.invoice-footer) {
        margin-bottom: 20px
    }

    .btn.btn-white,
    .btn.btn-white.disabled,
    .btn.btn-white.disabled:focus,
    .btn.btn-white.disabled:hover,
    .btn.btn-white[disabled],
    .btn.btn-white[disabled]:focus,
    .btn.btn-white[disabled]:hover {
        color: #2d353c;
        background: #fff;
        border-color: #d9dfe3;
    }
</style>
<style>
    /* Gaya untuk tabel */
    .table-responsive {
        overflow-x: auto;
    }

    table {
        width: 100%;
        page-break-inside: avoid;
        border-collapse: collapse;
    }

    th,
    td {
        border: 1px solid #ddd;
        /* Menambahkan batas ke sel tabel */
        padding: 8px;
    }

    th {
        background-color: #f2f2f2;
        /* Menambahkan warna latar belakang ke header tabel */
    }

    tr {
        page-break-inside: avoid;
    }
</style>
<script>
    function printInvoice() {
        // Hide unnecessary elements
        var elementsToHide = document.querySelectorAll('.not-to-print');
        for (var i = 0; i < elementsToHide.length; i++) {
            elementsToHide[i].style.display = 'none';
        }

        // Print the invoice
        window.print();

        // Show hidden elements after printing
        for (var i = 0; i < elementsToHide.length; i++) {
            elementsToHide[i].style.display = 'block';
        }
    }
</script>