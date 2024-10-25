<?php

namespace InventoryManagement\Abstract;

use InventoryManagement\Models\produk;


abstract class StockManagement {
    abstract public function tambahProduk(produk $product, int $quantity);
    abstract public function hapusProduk(produk $product, int $quantity);
    abstract public function updateStock(produk $product, int $quantity);
}