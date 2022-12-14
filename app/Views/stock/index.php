<?= $this->extend('layouts/template'); ?>

<?= $this->section('styles'); ?>
<link rel="stylesheet" href="/css/sidebar.css">
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="d-flex">
        <?= $this->include('/layouts/sidebar'); ?>
        <div class="p-2 w-100">
            <h1 class="mb-3">Stok Barang</h1>

            <div class="d-inline float-end mb-3">
                <a class="btn btn-primary" href="#">Edit</a>
                <a class="btn btn-primary" href="/stock/form">Tambah Data</a>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id Barang</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Harga Beli</th>
                        <th scope="col">Harga Jual</th>
                        <th scope="col">Harga Grosir</th>
                        <th scope="col">Barcode</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>@fat</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                        <td>@twitter</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>