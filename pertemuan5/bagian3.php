<?php 

$mahasiswa = [
["Sheila", "202151082", "T.Informatika", "sheila@gmail.com"],
["Salsa", "202151000", "T.Industri", "salsa@gmail.com"],

]

// array dalam array 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>




    <?php foreach($mahasiswa as $mhs): ?>
    <ul>
        <li>Nama : <?= $mhs[0]  ?></li>
        <li>NIM :<?= $mhs[1]  ?></li>
        <li>Jurusan :<?= $mhs[2]  ?></li>
        <li>Email :<?= $mhs[3]  ?></li>
    </ul>
    <?php endforeach; ?>


</body>

</html>