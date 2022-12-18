<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include('/layouts/navbar'); ?>

<div class="container">
    <div class="d-flex">
        <?= $this->include('/layouts/sidebar'); ?>
        <div class="p-2 w-100">
            <h1 class="mb-3">Rekap Penjualan</h1>
            <span>Bulan : </span> <select class="form-select mb-3 w-25 d-inline" aria-label="Default select example">
                <option value="januari" selected>Januari</option>
                <option value="februari">Februari</option>
                <option value="maret">Maret</option>
                <option value="april">April</option>
                <option value="mei">Mei</option>
                <option value="juni">Juni</option>
                <option value="juli">Juli</option>
                <option value="agustus">Agustus</option>
                <option value="september">September</option>
                <option value="oktober">Oktober</option>
                <option value="november">November</option>
                <option value="desember">Desember</option>
            </select>
            <span>Tahun : </span> <select class="form-select mb-3 w-25 d-inline" aria-label="Default select example">
                <option value="2022" selected>2022</option>
                <option value="2023" selected>2023</option>
                <option value="2024" selected>2024</option>
                <option value="2025" selected>2025</option>
                <option value="2026" selected>2026</option>
            </select>
            <button type="submit" class="btn btn-primary ms-3">Cari</button>
            <table class="table table-bordered text-center">
                <thead class="bg-dark text-light">
                    <tr>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Omset</th>
                        <th scope="col">Keutungan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dataStock as $data) : ?>
                        <tr>
                            <th scope="row"><?= date("d", strtotime($data->tanggal)); ?></th>
                            <td><?= $data->harga_jual * $data->stock; ?></td>
                            <td><?= $data->harga_jual * $data->quantity; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>