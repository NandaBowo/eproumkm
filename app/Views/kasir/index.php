<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include('/layouts/navbar'); ?>

<?php $datetime = new DateTime(); ?>

<div class="container">
    <div class="d-flex">
        <?= $this->include('/layouts/sidebar'); ?>
        <div class="p-2 w-100">
            <h1 class="mb-3">Transaksi Penjualan</h1>

            <?php if (session()->getFlashdata("Empty Stock")) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= session()->getFlashdata("Empty Stock"); ?>
                </div>
            <?php endif; ?>

            <form action="/kasir/input" method="POST">
                <div class="mb-3 row">
                    <label for="tanggal" class="col-sm-2 col-form-label">Tanggal : </label>
                    <div class="col-sm-10">
                        <input type="date" readonly class="form-control-plaintext" id="tanggal" name="tanggal" value="<?= $datetime->format("Y-m-d"); ?>">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="namaProduk" class="mb-2">Nama Produk</label>
                    <select class="form-select mb-3" aria-label="Default select example" name="namaProduk" id="namaProduk">
                        <?php foreach ($name as $n) : ?>
                            <option value="<?= $n['id']; ?>" selected><?= $n['name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="kuantitas" class="form-label">Kuantitas</label>
                    <input type="number" min="0" name="kuantitas" class="form-control" id="kuantitas" required>
                </div>
                <div class="mb-3">
                    <label for="status" class="mb-2">Status</label>
                    <select class="form-select mb-3" aria-label="Default select example" name="status" id="status">
                        <option value="BELUM LUNAS" selected>BELUM LUNAS</option>
                        <option value="LUNAS">LUNAS</option>
                    </select>
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
                        <th scope="col">Status</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dataJoin as $join) : ?>
                        <tr>
                            <th scope="row"><?= $join->tanggal; ?></th>
                            <td><?= $join->name; ?></td>
                            <td>Rp <?= number_format($join->harga_jual); ?></td>
                            <td><?= $join->quantity; ?></td>
                            <td><?= $join->status; ?></td>
                            <td>Rp <?= number_format($join->harga_jual * $join->quantity); ?></td>
                        </tr>
                    <?php endforeach; ?>
                    <?php foreach ($joinSum as $js) : ?>
                        <tr>
                            <th colspan="5">Total keseluruhan : </th>
                            <td>Rp <?= number_format($js->total_seluruh); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <form action="/kasir/cetak" method="post">
                <button type="submit" class="btn btn-primary float-end">Print</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>