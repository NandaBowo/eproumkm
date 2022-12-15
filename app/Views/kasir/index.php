<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include('/layouts/navbar'); ?>

<div class="container">
    <div class="d-flex">
        <?= $this->include('/layouts/sidebar'); ?>
        <div class="p-2 w-100">
            <h1 class="mb-3">TRANSAKSI PENJUALAN</h1>

            <form>
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="text" class="form-control" id="tanggal" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="barcode" class="form-label">Barcode</label>
                    <input type="text" class="form-control" id="barcode" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="namaBarang" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" id="namaBarang" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="harga" aria-describedby="emailHelp">
                </div>
                <button class="btn btn-primary float-end">Submit</button>
            </form>

            <br>
            <br>
            <hr class="mb-4">

            <table class="table table-bordered table-hover text-center">
                <thead>
                    <tr>
                        <th scope="col">ID barang</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry the Bird</td>
                        <td>Bird</td>
                    </tr>
                    <tr>
                        <th colspan="2">Total : </th>
                        <td></td>
                    </tr>
                </tbody>
            </table>

            <button class="btn btn-primary float-end">Print</button>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>