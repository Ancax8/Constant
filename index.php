<?php
require('./propertyConstant');
use anca\pbo\Produk;


//input data
$produk = new Produk('P0001', 'Laptop', 10000000, 5);

//hasil
echo "Produk : ".$produk->nama;
echo "<br/>";
echo "Harga : ".$produk->harga;
echo "<br/>";
echo "Stok : ".$produk->stok;
echo "<br/>";
echo "Pajak : ".$produk->pajak() ."%";
echo "<br/>";
echo "Total Harga Setelah Pajak : Rp".$produk->total();