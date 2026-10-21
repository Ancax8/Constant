<?php

class Produk {
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    public const PAJAK = 0.11;

    public function totalPajak() {
        $persen = self::PAJAK * 100;
        $jumlahPajak = $this->harga * self::PAJAK;
        $total = $this->harga + $jumlahPajak;

        echo "Pajak: {$persen}%";
        echo "<br>";
        echo "Jumlah Pajak: Rp" . $jumlahPajak;
        echo "<br>";
        echo "Total Harga Setelah Pajak: Rp" . $total;
    }
}

$produk = new Produk();
$produk->kode = "P001";
$produk->nama = "Laptop";
$produk->harga = 10000000;
$produk->stok = 5;

echo "Produk: " . $produk->nama;
echo "<br>";
echo "Harga: Rp" . $produk->harga;
echo "<br>";
echo "Stok: " . $produk->stok;
echo "<br>";

$produk->totalPajak();

?>
