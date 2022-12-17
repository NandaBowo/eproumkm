<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include('/layouts/navbar'); ?>

<?php $datetime = new DateTime(); ?>

<div class="container">
    <div class="d-flex">
        <?= $this->include('/layouts/sidebar'); ?>
        <div class="p-2 w-100">
            <h1 class="mb-3">Transaksi Penjualan</h1>

            <form action="/kasir/input" method="POST">
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" aria-describedby="emailHelp" value="<?= $datetime->format("Y-m-d"); ?>" readonly>
                </div>
                <div class="mb-3">
                    <select class="form-select mb-3" aria-label="Default select example" name="namaProduk">
                        <?php foreach($name as $n) : ?>
                        <option value="<?= $n['id']; ?>" selected><?= $n['name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="kuantitas" class="form-label">Kuantitas</label>
                    <input type="text" name="kuantitas" class="form-control" id="kuantitas" aria-describedby="emailHelp">
                </div>
                <button class="btn btn-primary float-end">Submit</button>
            </form>

            <br>
            <br>
            <hr class="mb-4">

            <table class="table table-bordered table-hover text-center">
                <thead>
                    <tr>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Harga per Barang</th>
                        <th scope="col">Kuantitas</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">17/12/2022</th>
                        <td>Nasi Bakar</td>
                        <td>Rp 10.000</td>
                        <td>5</td>
                        <td>Rp 50.000</td>
                    </tr>
                    <tr>
                        <th colspan="4">Total keseluruhan : </th>
                        <td>Rp 50.000</td>
                    </tr>
                </tbody>
            </table>

            <button class="btn btn-primary float-end">Print</button>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>