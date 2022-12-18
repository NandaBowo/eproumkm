<div class="p-2">
    <div class="card" style="width: 18rem;">
        <ul class="list-group list-group-flush">
            <a class="list-group-item" href="/">Beranda</a>
            <?php if ((session()->get("name") != null)) : ?>
                <a class="list-group-item" href="/kasir">Kasir</a>
                <a class="list-group-item" href="/sales">Sales</a>
                <a class="list-group-item" href="/stock">Stok Barang</a>
                <a class="list-group-item" href="/rekap">Rekap Penjualan</a>
            <?php endif; ?>
        </ul>
    </div>
</div>