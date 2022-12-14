<?= $this->extend('layouts/template'); ?>

<?= $this->section('styles') ?>
<link rel="stylesheet" href="/css/auth.css">
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<body class="text-center">

    <main class="form-signin w-100 m-auto">
        <form action="/auth/regis" method="POST">
            <img class="mb-4" src="https://th.bing.com/th/id/OIP.mcA9sspRyYfjA0_VfstFKQHaHa?pid=ImgDet&rs=1" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Mendaftar Akun</h1>

            <div class="form-floating">
                <input type="text" class="form-control" name="name" id="floatingInput"  placeholder="name@example.com">
                <label for="floatingInput">Nama Lengkap</label>
            </div>
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" name="hp" placeholder="name@example.com">
                <label for="floatingInput">No. HP</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" name="umkm" placeholder="name@example.com">
                <label for="floatingInput">Nama UMKM</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="pass1" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control mx-0" id="floatingPassword" name="pass2" placeholder="Password">
                <label for="floatingPassword">Ketik ulang password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
        </form>
    </main>

</body>
<?= $this->endSection() ?>