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
                            <img src="https://th.bing.com/th/id/OIP.79R9vNeEd0djN6RZhTfbAgHaE8?pid=ImgDet&rs=1" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>