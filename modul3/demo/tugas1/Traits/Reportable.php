<?php

namespace InventoryManagement\Traits;

trait Reportable {
    public function buatLaporan() {
        echo "Laporan stok untuk kota " . $this->lokasi . "...\n";
        echo "Stok Produk: " . $this->jumlahStok . "\n";
    }
}