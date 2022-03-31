<?php
//pengulangan dan pengkondisian
//perulangan for, while, do-while, foreach (khusus array)
//pengkondisian if-else, if-else if-else, ternary, switch

//pengulangan
//for
for($i = 0; $i <= 10; $i++){
    echo "helloworld $i <br> ";
}

echo "<br>"; //line break
//pengulangan
//while
$i = 0;
while($i < 5) {
    echo "Hello Dunia <br>";
    $i++;
}
echo "<br>"; //line break

//pengulangan 
// do-while
//true
$i = 0;
do{
    echo "Hello <br>";
    $i++;
}while($i < 8);
//false
echo "<br>"; //line break

$i = 5;
do{
    echo "Sheila <br>";
    $i++;
}while($i <3);

echo "<br>"; //line break


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan1</title>
</head>

<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php 
        for($i = 1; $i <= 3; $i++){
            echo "<tr>";
            for($j = 1; $j <=5; $j++){
                echo "<td>$i, $j</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

    <br>

    <table border="1" cellpadding="10" cellspacing="0">
        <?php for($i = 1; $i <=3; $i++){ ?>
        <tr>
            <?php for($j = 1; $j <=5; $j++){ ?>
            <td><?php echo "$i, $j" ?></td>
            <?php } ?>
        </tr>
        <?php } ?>
    </table>
    <br>
</body>

</html>


<?php
//pengkondisian
$x = 10;
if ($x <15){
    echo "Benar";
}else{
    echo "salah";
}







?>