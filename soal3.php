<?php
$key1 = 1;
$value1 = 10000;
$key2 = 68;
$value2 = 30100;
$key3 = 81;

$beda = ($value2 - $value1) / ($key2 - $key1);

$hasil = 0;

for ($i = 0; $i <= 100; $i++) {
    $hasil = $value1 + (($i - 1) * $beda);

    if ($i == $key3) {
        echo "Jumlah pengeluaran untuk toko kelontong ke " . $key3 . " adalah Rp. " . number_format($hasil, 2, ',', '.');
    }
}
