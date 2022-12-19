<?php if ((session()->get("name") != null)) : ?>
    <div class="p-2">
        <div class="card me-3">
            <ul class="list-group list-group-flush" style="width: 18vw;">
                <a class="list-group-item <?= (isset($activeHome)) ? $activeHome : ""; ?>" href="/">Beranda</a>
                <a class="list-group-item <?= (isset($activeKasir)) ? $activeKasir : ""; ?>" href="/kasir">Kasir</a>
                <a class="list-group-item <?= (isset($activeSales)) ? $activeSales : ""; ?>" href="/sales">Sales</a>
                <a class="list-group-item <?= (isset($activeStock)) ? $activeStock : ""; ?>" href="/stock">Stok Barang</a>
                <a class="list-group-item <?= (isset($activeRecap)) ? $activeRecap : ""; ?>" href="/rekap">Rekap Penjualan</a>
            </ul>
        </div>
    </div>
<?php endif; ?>