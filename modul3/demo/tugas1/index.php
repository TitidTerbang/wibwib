<?php

require_once __DIR__ . '/Traits/Reportable.php';
require_once __DIR__ . '/Abstract/StockManagement.php';
require_once __DIR__ . '/Models/produk.php';
require_once __DIR__ . '/Models/produkElektronik.php';
require_once __DIR__ . '/Services/gudang.php';



use InventoryManagement\Models\produkElektronik;
use InventoryManagement\Models\produk;
use InventoryManagement\Services\gudang;
use InventoryManagement\Traits\Reportable;

// Class untuk trait.
class barang {
    use Reportable;

    public int $jumlahStok;
    public string $lokasi;

    public function __construct(int $jumlahStok, string $lokasi) {
        $this->jumlahStok = $jumlahStok;
        $this->lokasi = $lokasi;
    }
}




$laptop = new produkElektronik("Laptop A", 7000000, "1 year");
$mouse = new produk("Mouse B", 200000);

$warehouse = new barang(100, "Jakarta");
$warehouseInventory = new gudang();

$warehouseInventory->tambahProduk($laptop, 50);
$warehouseInventory->hapusProduk($mouse, 10);
$warehouse->buatLaporan();

echo $laptop;
echo $mouse;