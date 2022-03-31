<?php 
//ini adalah komentar inline dalam php
#ini juga komentar dalam bahasa php
/*
ini juga
komentar dalam php
untuk banyak baris 
*/

//pertemuan 2 belajar php
//syntax php

//standar output (menampilkan sesuatu ke layar)
//echo atau print
//print_r (mencetak isi array)
//var_dump (cek syntax)

echo "Novia Marsheila Louisyana";
echo "<br>"; // break line 
print "Sheila";
echo "<br>"; // break line 
print_r("Novia Sheila");
echo "<br>"; // break line
var_dump("Novia Marsheila Louisyana");
echo "<br>"; // break line
echo true; // boolean
echo "<br>"; // break line 
echo false; // boolean
echo "<br>"; // break line 

//penulisan syntax php
// 1. PHP dalam html
// 2. html dalam PHP


?>

<!--------------contoh penulisan php dalam html------------------->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar php</title>
</head>

<body>
    <h1>Halo, Selamat datang <?php echo "Sheila"; ?> </h1>
    <p><?php echo "ini adalah paragraf"; ?></p>
</body>

</html>

<!--------------contoh penulisan html dalam php------------------->
<!---------------------tidak disarankan -------------------------->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belaar php 2</title>
</head>

<body>
    <?php 
    echo "<h1>Sheila</h1>";
    ?>
</body>

</html>


<?php 
//variabel dan tipe data 
//variabel
//tidak boleh diawali dengan angka, boleh diakhiri dengan angka
$nama = "Novia Marsheila Louisyama";
echo "nama saya adalah $nama";
echo "<br>"; // break line 
echo '$nama'; // interpolasinya tidak nyala karena pakai sigle quotation
echo "<br>"; // break line 
//operator
//aritmatika
//+ - * / %
echo 1 + 1;
echo "<br>"; // break line 
$a = 12;
$b =13;
echo $a + $b;
echo "<br>"; // break line 

// operator penggabung string
// concat / concatenation 
// operatornya .
$nama_depan = "Novia ";
$nama_belakang = "Sheila";
echo $nama_depan . $nama_belakang;
echo "<br>"; // break line 

//operator asssignment
//operator penugasan
// = , +=, -=, *=, dll
$x = 12;
$x += 13;
echo $x;
echo "<br>"; // break line 

// operator perbandingan 
// <, >, <=, >=, ==, ===, !=, !==
var_dump(1>4);
echo "<br>"; // break line 

// operator logika
// &&, ||, !
$x =10;
var_dump($x < 20 && $x % 2 == 0);


?>