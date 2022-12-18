<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include('/layouts/navbar'); ?>

<div class="container">
    <div class="d-flex">
        <?= $this->include('/layouts/sidebar'); ?>
        <div class="p-2 w-100">
            <h1 class="mb-3">Rekap Penjualan</h1>
            <form action="/rekap" method="post">
                <span>Bulan : </span> <select class="form-select mb-3 w-25 d-inline" aria-label="Default select example" name="rekapBulan">
                    <option value="<?= $rekapBulan; ?>" selected><?= ($rekapBulan == null) ? "Pilih Bulan" : $rekapBulan; ?></option>
                    <option value="01">Januari</option>
                    <option value="02">Februari</option>
                    <option value="03">Maret</option>
                    <option value="04">April</option>
                    <option value="05">Mei</option>
                    <option value="06">Juni</option>
                    <option value="07">Juli</option>
                    <option value="08">Agustus</option>
                    <option value="09">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option>
                </select>
                <span>Tahun : </span> <select class="form-select mb-3 w-25 d-inline" aria-label="Default select example" name="rekapTahun">
                    <option value="<?= $rekapTahun; ?>" selected><?= ($rekapTahun == null) ? "Pilih Tahun" : $rekapTahun; ?></option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                </select>
                <button type="submit" class="btn btn-primary ms-3">Cari</button>
            </form>

            <table class="table table-bordered text-center">
                <thead class="bg-dark text-light">
                    <tr>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Omset</th>
                        <th scope="col">Keutungan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dataStock as $data) : ?>
                        <tr>
                            <th scope="row"><?= date("d", strtotime($data->tanggal)); ?></th>
                            <td><?= $data->name; ?></td>
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