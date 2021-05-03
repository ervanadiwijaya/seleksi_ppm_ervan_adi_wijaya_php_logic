<?php

$array = ['Makanan', 'Minuman', 'Parsel'];

foreach ($array as $value) {
    echo $value;
    if ($value == 'Makanan') {
        echo "<br/> 1. Menu $value ke 1";
        echo "<br/> 2. Menu $value ke 2";
        echo "<br/> 3. Menu $value ke 3<br/>";
    } elseif ($value == 'Minuman') {
        echo "<br/> 1. Menu $value ke 1";
        echo "<br/> 2. Menu $value ke 2";
        echo "<br/> 3. Menu $value ke 3<br/>";
    } else {
        echo "<br/> 1. Menu $value ke 1";
        echo "<br/> 2. Menu $value ke 2";
        echo "<br/> 3. Menu $value ke 3";
    }
}
