<?php 
// array
// variabel yang dapat memiliki banyak nilai 
// dalam array tipe data nya boleh beda 
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0


// membuat array
// cara lama 
$hari = array("senin", "selasa", "rabu", "kamis", "jumat", "sabtu");

// cara baru
$bulan = ["januari", "februari", "maret"];

// dalam array tipe data nya boleh beda 
$arr1 = ["sela", 12, true, false];

// cara menampilkan array kelayar 
// var_dump() / print_r()
//var_dump($bulan);
//echo "<br>"; // line break 
//print_r($hari);

//menampilkan 1 elemen dalam array
//echo "<br>"; // line break
//echo $bulan[0]

// menambahkan elemen baru dalam array sebelunnya
var_dump($bulan);
$bulan[] = "April";
echo "<br>"; // line break
var_dump($bulan);



?>