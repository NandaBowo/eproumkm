<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include('/layouts/navbar'); ?>

<div class="container">
    <div class="d-flex">
        <?= $this->include('/layouts/sidebar'); ?>
        <div class="p-2">
            <h1 class="mb-3">Daftar Produk</h1>
            <div class="row justify-content-around">
                <?php foreach ($dataQuery as $data) : ?>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="/img/<?= $data["img"]; ?>" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title"><?= $data["name"]; ?></h5>
                                <p class="card-text">Rp <?= $data["harga_jual"]; ?></p>
                                <a href="#" class="btn btn-primary">Website Resmi</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>