<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include('/layouts/navbar'); ?>

<div class="container">
    <div class="d-flex">
        <?= $this->include('/layouts/sidebar'); ?>
        <div class="p-2  w-100">
            <form class="row row-cols-lg-auto g-3 align-items-center mb-3">
                <div class="col-12">
                    <label class="visually-hidden" for="tanggal">Tanggal</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal">
                    </div>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Cari</button>
                </div>
            </form>

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