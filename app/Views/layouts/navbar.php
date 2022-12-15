<nav class="navbar navbar-dark navbar-expand-lg bg-success mb-3">
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

            <?php if (session()->get("name") == null) : ?>
                <a href="/auth/login" class="btn btn-primary ms-4 my-3">Login</a>
                <a href="/auth/register" class="btn btn-primary ms-2 my-3">Register</a>
            <?php else : ?>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <p class="nav-link active mt-3 ms-4">Halo, <?= session()->get("name"); ?>!</p>
                    </li>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</nav>