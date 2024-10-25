<?php

namespace InventoryManagement\Services;

use InventoryManagement\Abstract\StockManagement;
use InventoryManagement\Models\produk;

class gudang extends StockManagement {
    public function tambahProduk(produk $product, int $quantity) {
        echo "menambahkan {$quantity} {$product->nama} ke gudang\n";
    }

    public function hapusProduk(produk $product, int $quantity) {
        echo "menghapus {$quantity} {$product->nama} dari gudang\n";

    }

    public function updateStock(produk $product, int $quantity) {
        echo "Updating stock for {$product->nama} in Warehouse (adding {$quantity}).\n";
    }
}