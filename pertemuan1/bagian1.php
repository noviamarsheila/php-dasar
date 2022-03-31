<?php 
$name = $age = "";

if( isset($_POST["submit"]) ){
    $name = input($_POST["name"]);
    $age = input($_POST["age"]);

}
function input($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    return $data;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form php</title>
</head>

<body>
    <form action="" method="POST">
        <label for="name">Nama : </label>
        <input type="text" name="name" id="name"><br><br>
        <label for="age">Umur : </label>
        <input type="text" name="age" id="age"><br><br>
        <button type="submit" name="submit">Submit</button>
    </form>

</body>

</html>


<?php 
echo "<h2>Your Input : </h2>";
echo "<br>";
echo "<br>";
echo "Nama kamu adalah $name";
echo "<br>";
echo "<br>";
echo "Umur kamu adalah $age";


?>