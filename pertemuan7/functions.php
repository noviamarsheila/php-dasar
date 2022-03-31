<?php
//koneksi ke database
$conn = mysqli_connect("localhost","root","","phpdasar");

// function query
function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = []; // ibaratkan sebuah wadah kosong untuk data
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}


?>