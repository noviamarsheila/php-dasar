<?php 
//isset --> apakah (...) sudah dibikin apa belum --> jika sudah 
// !isset --> belum
//cek apakah tidak ada data di $_GET
if( !isset($_GET["nama"]) ||
    !isset($_GET["nim"])  ||
    !isset($_GET["email"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["gambar"]))
    {
    //redirect --> memindahkan usernya dari halaman satu ke halaman lain
    header("Location: bagian2.php");
    exit; // berfungsi ntuk tidak mengerjakan script yang ada dibawahnya 
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>

<body>
    <ul>
        <li><img src="img/<?php echo $_GET["gambar"] ?>"></li>
        <li><?php echo $_GET["nama"]; ?></li>
        <li><?php echo $_GET["nim"]; ?></li>
        <li><?php echo $_GET["email"]; ?></li>
        <li><?php echo $_GET["jurusan"]; ?></li>
    </ul>
    <a href="bagian2.php">Kembali ke halaman utama</a>
</body>

</html>