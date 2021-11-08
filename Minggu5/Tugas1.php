<?php 
    function penjumlahan($hasil,$a, $b){
        $hasil = $a + $b;
        echo "PENJUMLAHAN <br>";
        echo "Operator : + <br>";
        echo "Hasil : $hasil";
        echo "<br>";
    }
    function pengurangan($hasil,$a, $b){
        $hasil = $a - $b;
        echo "PENGURANGAN <br>";
        echo "Operator : - <br>";
        echo "Hasil : $hasil";
        echo "<br>";
    }
    function perkalian($hasil,$a, $b){
        $hasil = $a * $b;
        echo "PERKALIAN <br>";
        echo "Operator : * <br>";
        echo "Hasil : $hasil";
        echo "<br>";
    }
    function pembagian($hasil,$a, $b){
        $hasil = $a / $b;
        echo "PEMBAGIAN <br>";
        echo "Operator : / <br>";
        echo "Hasil : $hasil";
        echo "<br>";
    }
    function modulus($hasil,$a,$b){
        $hasil = $a % $b;
        echo "MODULUS <br>";
        echo "Operator : % <br>";
        echo "Hasil : $hasil";
        echo "<br>";
    }

    $hasil = 0;
    $a = 20;
    $b = 2;

    echo "Bilangan 1 =  $a ";
    echo "<br>";
    echo "Bilangan 2 =  $b ";
    echo "<br>";
    echo "Berikut Merupakan Hasil Dari Setiap Operasi :";
    echo "<br>";
    penjumlahan($hasil,$a,$b);
    echo "<br>";
    pengurangan($hasil,$a,$b);
    echo "<br>";
    pembagian($hasil,$a,$b);
    echo "<br>";
    perkalian($hasil,$a,$b);
    echo "<br>";
    modulus($hasil,$a,$b);
?>