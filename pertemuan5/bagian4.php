<?php 

//array assosiative
$mahasiswa = [
    [
    "nama" => "Novia Sheila",
    "nim" => "202151082",
    "email" => "sheila@gmail.com",
    "jurusan" => "T. Informatika",
    "gambar" => "satu.jpeg",
    ],
    [
    "nama" => "santi",
    "nim" => "202142132",
    "email" => "santi@gmail.com",
    "jurusan" => "T. Industri",
    "gambar" => "dua.jpeg",
    ],
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bagian4</title>
</head>

<body>

    <?php foreach($mahasiswa as $mhs): ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>" alt="">
        </li>
        <li>Nama : <?= $mhs["nama"] ?></li>
        <li>NIM :<?= $mhs["nim"] ?></li>
        <li>Email :<?= $mhs["email"] ?></li>
        <li>Jurusan :<?= $mhs["jurusan"] ?></li>
    </ul>
    <?php endforeach; ?>




</body>

</html>