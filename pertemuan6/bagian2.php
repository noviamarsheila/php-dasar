<?php

$mahasiswa = [
[
"nama" => "Novia Sheila",
"nim" => "202151082",
"email" => "sheila@gmail.com",
"jurusan" => "T. Informatika",
"gambar" => "satu.jpeg",
],
[
"nama" => "Santi",
"nim" => "202142132",
"email" => "santi@gmail.com",
"jurusan" => "T. Industri",
"gambar" => "dua.jpeg",
],
];

// metode riquest GET adalah metode pengirimman data melalui url dan  data tersebut bisa diambil atau ditangkap oleh variabel superglobal GET. 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>
    <h1>Data Mahasiswa</h1>
    <ul>
        <?php foreach($mahasiswa as $mhs): ?>
        <li>
            <a
                href="bagian3.php?nama=<?php echo $mhs["nama"]; ?>&nim=<?php echo $mhs["nim"]; ?>&email=<?php echo $mhs["email"]; ?>&jurusan=<?php echo $mhs["jurusan"] ?>&gambar=<?php echo $mhs["gambar"] ?>">
                <?php echo $mhs["nama"] ?> </a>
        </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>