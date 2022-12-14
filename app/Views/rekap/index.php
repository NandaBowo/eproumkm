<?= $this->extend('layouts/template'); ?>

<?= $this->section('styles'); ?>
<link rel="stylesheet" href="/css/sidebar.css">
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="d-flex">
        <?= $this->include('/layouts/sidebar'); ?>
        <div class="p-2 w-100">
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