<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include('/layouts/navbar'); ?>

<div class="container">
    <div class="d-flex">
        <?= $this->include('/layouts/sidebar'); ?>
        <div class="p-2 w-100">
            <h1 class="mb-3">Tambah Barang</h1>

            <form action="/stock/insert" method="POST">
                <div class="mb-3">
                    <label for="idBarang" class="form-label">Id Barang</label>
                    <input type="text" class="form-control" id="idBarang" name="idBarang" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="nameBarang" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" id="nameBarang" name="name" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="hargaBeli" class="form-label">Harga Beli</label>
                    <input type="number" class="form-control" id="hargaBeli" name="hargaBeli" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="hargaJual" class="form-label">Harga Jual</label>
                    <input type="number" class="form-control" id="hargaJual" name="hargaJual" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="hargaGrosir" class="form-label">Harga Grosir</label>
                    <input type="number" class="form-control" id="hargaGrosir" name="hargaGrosir" aria-describedby="emailHelp">
                </div>

                <button type="submit" class="btn btn-primary">Tambah Barang</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>