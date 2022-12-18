<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include('/layouts/navbar'); ?>

<div class="container">
    <div class="d-flex">
        <?= $this->include('/layouts/sidebar'); ?>
        <div class="p-2 w-100">
            <h1 class="mb-3">Edit Barang</h1>

            <form action="/stock/edit" method="POST">
                <div class="mb-3">
                    <input type="hidden" class="form-control" id="idUser" name="idUser" aria-describedby="emailHelp" value="<?= $id; ?>">
                    <input type="hidden" name="idUser2" value="<?= $id_user; ?>">
                </div>
                <div class="mb-3">
                    <label for="nameBarang" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" id="nameBarang" name="namaBarang" aria-describedby="emailHelp" value="<?= $namaBarang; ?>">
                </div>
                <div class="mb-3">
                    <label for="hargaBeli" class="form-label">Harga Beli</label>
                    <input type="number" class="form-control" id="hargaBeli" name="hargaBeli" aria-describedby="emailHelp" value="<?= $hargaBeli; ?>">
                </div>
                <div class="mb-3">
                    <label for="hargaJual" class="form-label">Harga Jual</label>
                    <input type="number" class="form-control" id="hargaJual" name="hargaJual" aria-describedby="emailHelp" value="<?= $hargaJual; ?>">
                </div>
                <div class="mb-3">
                    <label for="stock" class="form-label">Stock</label>
                    <input type="number" class="form-control" id="stock" name="stock" aria-describedby="emailHelp" value="<?= $stock; ?>">
                </div>

                <button type="submit" class="btn btn-primary">Edit Barang</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>