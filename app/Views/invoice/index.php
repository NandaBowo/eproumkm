<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabcart</title>
    <style>
        body {
            background-color: #F6F6F6;
            margin: 0;
            padding: 0;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin: 0;
            padding: 0;
        }

        p {
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin-right: auto;
            margin-left: auto;
        }

        .brand-section {
            background-color: #0d1033;
            padding: 10px 40px;
            margin-top: 32px;
        }

        .logo {
            width: 50%;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .col-6 {
            width: 50%;
            flex: 0 0 auto;
        }

        .text-white {
            color: #fff;
        }

        .company-details {
            float: right;
            text-align: right;
        }

        .body-section {
            padding: 16px;
            border: 1px solid gray;
        }

        .heading {
            font-size: 20px;
            margin-bottom: 08px;
        }

        .sub-heading {
            color: #262626;
            margin-bottom: 05px;
        }

        table {
            background-color: #fff;
            width: 100%;
            border-collapse: collapse;
        }

        table thead tr {
            border: 1px solid #111;
            background-color: #f2f2f2;
        }

        table td {
            vertical-align: middle !important;
            text-align: center;
        }

        table th,
        table td {
            padding-top: 08px;
            padding-bottom: 08px;
        }

        .table-bordered {
            box-shadow: 0px 0px 5px 0.5px gray;
        }

        .table-bordered td,
        .table-bordered th {
            border: 1px solid #dee2e6;
        }

        .text-right {
            text-align: end;
        }

        .w-20 {
            width: 20%;
        }

        .float-right {
            float: right;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="brand-section">
            <div class="row">
                <div class="col-6">
                    <h1 class="text-white">E-PROMKM UNUSA</h1>
                </div>
                <div class="col-6">
                    <div class="company-details">
                        <p class="text-white"><?= $user["name"]; ?></p>
                        <p class="text-white"><?= $user["hp"]; ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="body-section">
            <div class="row">
                <div class="col-6">
                    <h2 class="heading">Invoice No.: <?= $joinFirst->id; ?></h2>
                    <p class="sub-heading">Tanggal Pesanan: <?= $joinFirst->tanggal; ?> </p>
                    <p class="sub-heading">Alamat Email: <?= $user["email"]; ?> </p>
                </div>
                <div class="col-6">
                    <p class="sub-heading">Nama Lengkap: <?= $user["name"]; ?></p>
                    <p class="sub-heading">Nomor Kontak: <?= $user["hp"]; ?></p>
                </div>
            </div>
        </div>

        <div class="body-section">
            <h3 class="heading">Produk Yang Dipesan</h3>
            <br>
            <table class="table-bordered">
                <thead>
                    <tr>
                        <th>Nama Produk</th>
                        <th class="w-20">Harga Produk Satuan</th>
                        <th class="w-20">Kuantitas</th>
                        <th class="w-20">Status Bayar</th>
                        <th class="w-20">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dataJoin as $join) : ?>
                        <tr>
                            <td><?= $join->name; ?></td>
                            <td><?= $join->harga_jual; ?></td>
                            <td><?= $join->quantity; ?></td>
                            <td><?= $join->status; ?></td>
                            <td><?= $join->harga_jual * $join->quantity; ?></td>
                        </tr>
                    <?php endforeach; ?>
                    <?php foreach ($joinSum as $js) : ?>
                        <tr>
                            <td colspan="4" class="text-right">Total Keseluruhan</td>
                            <td><?= $js->total_seluruh; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <br>
        </div>

        <div class="body-section">
            <p>&copy; Copyright 2022 - E-PROMKM UNUSA. All rights reserved.
                <a href="/" class="float-right">www.epromkmunusa.com</a>
            </p>
        </div>

        <a href="/kembali" style="line-height: 8;">Kembali ke menu utama</a>
    </div>

</body>

</html>