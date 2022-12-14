<?= $this->extend('layouts/template'); ?>

<?= $this->section('styles'); ?>
<link rel="stylesheet" href="/css/sidebar.css">
<?= $this->endSection(); ?>

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
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Delivery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">My Account</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-secondary" type="submit">Search</button>
                </form>
                <a href="/auth/login" class="btn btn-primary ms-4 my-3">Login</a>
                <a href="/auth/register" class="btn btn-primary ms-2 my-3">Register</a>
            </div>
        </div>
    </nav>

    <div class="d-flex">
        <div class="p-2">
            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Home</li>
                    <li class="list-group-item">Categories</li>
                    <li class="list-group-item">Items</li>
                </ul>
            </div>
        </div>
        <div class="p-2">
            <div class="row justify-content-around">
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://th.bing.com/th/id/OIP.79R9vNeEd0djN6RZhTfbAgHaE8?pid=ImgDet&rs=1" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://th.bing.com/th/id/OIP.79R9vNeEd0djN6RZhTfbAgHaE8?pid=ImgDet&rs=1" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>