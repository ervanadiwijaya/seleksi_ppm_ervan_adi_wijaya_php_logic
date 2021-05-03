<?php

$nama = 'Rian';

$harga = 1750;
$jumlah = 12;
$uang = 5000;
$banyak_uang = 5;

$total_uang = $uang * $banyak_uang;
$total_harga = $harga * $jumlah;

$sisa_uang = $total_uang - $total_harga;

echo "Jumlah uang yang dibayarkan " . $nama . " adalah Rp. " . number_format($total_uang, 2, ',', '.');
echo "<br/>Total harga 1 lusin bolpoin adalah Rp. " . number_format($total_harga, 2, ',', '.');
echo "<br/>Kembalian yang diterima " . $nama . " adalah Rp. " . number_format($sisa_uang, 2, ',', '.');
