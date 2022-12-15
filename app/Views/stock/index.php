<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include('/layouts/navbar'); ?>

<div class="container">
    <div class="d-flex">
        <?= $this->include('/layouts/sidebar'); ?>
        <div class="p-2 w-100">
            <h1 class="mb-3">Stok Barang</h1>

            <div class="d-inline float-end mb-3">
                <a class="btn btn-primary" href="/stock/form/edit">Edit</a>
                <a class="btn btn-primary" href="/stock/form">Tambah Data</a>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID User</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Harga Beli</th>
                        <th scope="col">Harga Jual</th>
                        <th scope="col">Barcode</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dataQuery as $data) : ?>
                        <tr>
                            <th scope="row"><?= $data['id_barang']; ?></th>
                            <td><?= $data['name']; ?></td>
                            <td><?= $data['harga_beli']; ?></td>
                            <td><?= $data['harga_jual']; ?></td>
                            <td><?= $data['barcode']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>