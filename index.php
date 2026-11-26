<?php
// call file property
require('./PropertyConstant.php');

use Pbo\Marketplace\Produk;

//object
$produk = new Produk('P0001', 'laptop',10000000,5);


//hitung pajak

// $pajak = produk::PAJAK * 100;
// $jumlahpajak = $produk->harga * Produk::PAJAK;

//total

// $total = $produk->harga + $jumlahpajak;

//hasil

echo "Produk: " . $produk->nama;
echo "<br/>";
echo "Harga: Rp." . $produk->harga;
echo "<br/>";
echo "Stok: " . $produk->stok;
echo "<br/>";
echo "Pajak: " . $produk->pajak() . "%";
echo "<br/>";
echo "Total pajak: Rp. " . $produk->total() ;