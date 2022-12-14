<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <nav class="navbar navbar-dark navbar-expand-lg bg-success">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">E-Promkm UNUSA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-secondary" type="submit">Search</button>
                </form>
                <a href="/auth/login" class="btn btn-primary ms-4">Login</a>
                <a href="/auth/register" class="btn btn-primary ms-2">Register</a>
            </div>
        </div>
    </nav>
</div>
<?= $this->endSection(); ?>