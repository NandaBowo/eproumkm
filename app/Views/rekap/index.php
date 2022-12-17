<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include('/layouts/navbar'); ?>

<div class="container">
    <div class="d-flex">
        <?= $this->include('/layouts/sidebar'); ?>
        <div class="p-2 w-100">
            <h1 class="mb-3">Rekap Penjualan</h1>
            <span>Bulan</span> <select class="form-select mb-3 w-25 d-inline" aria-label="Default select example">
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
            <table class="table table-bordered text-center">
                <thead class="bg-dark text-light">
                    <tr>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Omset</th>
                        <th scope="col">Keutungan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>