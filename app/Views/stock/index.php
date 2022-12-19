<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include('/layouts/navbar'); ?>

<div class="container">
    <div class="d-flex">
        <?= $this->include('/layouts/sidebar'); ?>
        <div class="p-2 w-100">
            <h1 class="mb-3">Stok Barang</h1>

            <div class="d-inline float-end mb-3">
                <a class="btn btn-primary" href="/stock/form">Tambah Data</a>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Harga Beli</th>
                        <th scope="col">Harga Jual</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($dataQuery as $data) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td class="text-center"><img src="/img/<?= $data["img"]; ?>" alt="Gambar tidak ada" width="72"></td>
                            <td><?= $data['name']; ?></td>
                            <td>Rp <?= number_format($data['harga_beli']); ?></td>
                            <td>Rp <?= number_format($data['harga_jual']); ?></td>
                            <td><?= $data['stock']; ?></td>
                            <!--  -->
                            <form action="/stock/form/edit/<?= $data["id"]; ?>" method="POST">
                                <td>
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                </td>
                            </form>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>