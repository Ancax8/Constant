<?php

class Produk{
    //property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;
    //constant
    public const PAJAK = 0.11;
}
//input data
$produk = new Produk();
$produk->kode = "P001";
$produk->nama = "Laptop";
$produk->harga = 10000000;
$produk->stok = 5;

//hitung total harga
$pajak = Produk::PAJAK * 100;
$jumlahPajak = $produk->harga * Produk::PAJAK;
$total = $produk->harga + $jumlahPajak;

//output data
echo "Produk : ".$produk->nama;
echo "<br/>";
echo "Harga : ".$produk->harga;
echo "<br/>";
echo "Stok : ".$produk->stok;
echo "<br/>";
echo "Pajak : ".$pajak ."%";
echo "<br/>";
echo "Total Harga Setelah Pajak : Rp".$total;
