<?php

namespace InventoryManagement\Models;

class produkElektronik extends produk {
    public string $garansi;

    public function __construct(string $nama, float $harga, string $garansi)
    {
        parent::__construct($nama, $harga);
        $this->garansi = $garansi;
    }

    public function __toString(): string
    {
        return "nama produk: {$this->nama}, harga: {$this->harga}, garansi: {$this->garansi}";
    }
}