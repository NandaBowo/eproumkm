<?= $this->extend('layouts/template'); ?>

<?= $this->section('styles') ?>
<link rel="stylesheet" href="/css/auth.css">
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<body class="text-center">

    <main class="form-signin w-100 m-auto">
        <form action="/auth/log" method="POST">
            <img class="mb-4" src="https://th.bing.com/th/id/OIP.mcA9sspRyYfjA0_VfstFKQHaHa?pid=ImgDet&rs=1" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Silahkan Login</h1>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="pass" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary mb-3" type="submit">Login</button>

            <a href="/">Kembali ke beranda</a>
            <p class="mt-3">Belum memiliki akun? <a href="/auth/register">Daftar sekarang</a></p>

            <p class="mt-5 mb-3 text-muted">&copy; E-Promkm UNUSA</p>
        </form>
    </main>

</body>
<?= $this->endSection() ?>