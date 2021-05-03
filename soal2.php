<?php

$nama = 'setyo';

$nilai_uang_1 = 10000;
$jumlah_uang_1 = 3;
$nilai_uang_2 = 5000;
$jumlah_uang_2 = 4;
$nilai_uang_3 = 2000;
$jumlah_uang_3 = 5;

$harga_mainan = 55000;

$total_uang = ($nilai_uang_1 * $jumlah_uang_1) + ($nilai_uang_2 * $jumlah_uang_2) + ($nilai_uang_3 * $jumlah_uang_3);

$sisa_uang = $total_uang - $harga_mainan;

echo "Jumlah uang " . $nama . " adalah Rp. " . number_format($total_uang, 2, ',', '.');
echo "<br/>Harga mainan adalah Rp. " . number_format($harga_mainan, 2, ',', '.');
echo "<br/>Sisa uang " . $nama . " adalah Rp. " . number_format($sisa_uang, 2, ',', '.');
