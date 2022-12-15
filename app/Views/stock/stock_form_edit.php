<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include('/layouts/navbar'); ?>

<div class="container">
    <div class="d-flex">
        <?= $this->include('/layouts/sidebar'); ?>
        <div class="p-2 w-100">
            <h1 class="mb-3">Edit Barang</h1>

            <form>
                <div class="mb-3">
                    <input type="hidden" class="form-control" id="idUser" name="idUser" aria-describedby="emailHelp" value="#">
                </div>
                <div class="mb-3">
                    <label for="nameBarang" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" id="nameBarang" name="namaBarang" aria-describedby="emailHelp" value="#">
                </div>
                <div class="mb-3">
                    <label for="hargaBeli" class="form-label">Harga Beli</label>
                    <input type="number" class="form-control" id="hargaBeli" name="hargaBeli" aria-describedby="emailHelp" value="0">
                </div>
                <div class="mb-3">
                    <label for="hargaJual" class="form-label">Harga Jual</label>
                    <input type="number" class="form-control" id="hargaJual" name="hargaJual" aria-describedby="emailHelp" value="0">
                </div>
                <div class="mb-3">
                    <label for="barcode" class="form-label">Barcode</label>
                    <input type="number" class="form-control" id="barcode" name="barcode" aria-describedby="emailHelp" value="0">
                </div>
                <div class="mb-3">
                    <label for="stock" class="form-label">Stock</label>
                    <input type="number" class="form-control" id="stock" name="stock" aria-describedby="emailHelp" value="0">
                </div>

                <button type="submit" class="btn btn-primary">Edit Barang</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>