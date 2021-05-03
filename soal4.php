<?php

cetak(1);
function cetak($number)
{
    if ($number > 10) {
        return;
    } else {
        if ($number % 2 == 0) {
            echo "$number Bilangan Genap";
        } else {
            echo "$number Bilangan Ganjil";
        }
        echo "<br/>";
        cetak(++$number);
    }
}
