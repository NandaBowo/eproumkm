<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include('/layouts/navbar'); ?>

<div class="container">
    <div class="d-flex">
        <?= $this->include('/layouts/sidebar'); ?>
        <div class="p-2 w-100">
            <h1 class="mb-3">Tambah Barang</h1>

            <form action="/stock/insert" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <input type="hidden" class="form-control" id="idUser" name="idUser" aria-describedby="emailHelp" value="<?= session()->get("id"); ?>">
                </div>
                <div class="mb-3">
                    <label for="img" class="form-label">Gambar</label>
                    <input type="file" class="form-control" id="img" name="img" aria-describedby="emailHelp">
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
                    <label for="barcode" class="form-label">Barcode</label>
                    <input type="text" class="form-control" id="barcode" name="barcode" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="stock" class="form-label">Stock</label>
                    <input type="number" class="form-control" id="stock" name="stock" aria-describedby="emailHelp">
                </div>

                <button type="submit" class="btn btn-primary">Tambah Barang</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>