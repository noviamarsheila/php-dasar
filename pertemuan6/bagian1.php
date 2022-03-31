<?php 
//variabel scope (lingkup variabel)
$x = 10;

function tampilX(){
    global $x; // keyword global 
    echo $x;
}
tampilX();
echo "<br>"; //line break 


//variabel superglobals 
// $_GET , $_POST, $_REQUEST, $_SESSION, $_COOKIE, $_SERVER, $_ENV,
// variabel global milik php
// array assosiative
var_dump($_GET);
echo "<br>"; //line break 
var_dump($_POST);
echo "<br>"; //line break 
//var_dump($_SERVER);
echo $_SERVER["SERVER_NAME"];
echo "<br>"; //line break 
echo "<br>"; //line break 

// $_GET
$_GET["nama"] = "Sheila";
$_GET["nim"] = "202151082";
$_GET["alamat"] = "rembang";

var_dump ($_GET);

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
    <title>GET</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs): ?>
    <ul>
        <li><img src="img/<?php echo $mhs["gambar"] ?>" alt=""></li>
    </ul>
    <?php endforeach; ?>
</body>

</html>