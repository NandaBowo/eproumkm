<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include('/layouts/navbar'); ?>

<div class="container">
    <div class="d-flex">
        <?= $this->include('/layouts/sidebar'); ?>
        <div class="p-2  w-100">
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal : </label>
                <input type="text" class="form-control" id="tanggal" placeholder="">
            </div>

            <table class="table table-bordered table-hover text-center">
                <thead>
                    <tr>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Jumlah Penjualan</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr>
                        <td>Nasi Bakar</td>
                        <td>50 Buah</td>
                    </tr>
                    <tr>
                        <td>Nasi Bakar</td>
                        <td>50 Buah</td>
                    </tr>
                    <tr>
                        <td>Nasi Bakar</td>
                        <td>50 Buah</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>