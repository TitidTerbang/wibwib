<?php

namespace InventoryManagement\Models;

class produk {
    public string $nama;
    public float $harga;

    public function __construct(string $nama, float $harga) {
        $this->nama = $nama;
        $this->harga = $harga;
    }

    public function __toString(): string
    {
        return "nama produk: {$this->nama}, harga: {$this->harga}";
    }
}