<?php

$out = "";
if (isset($_POST['a']) &&  $_POST['a']!=''   ){
    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=$_POST['c'];
if ( $a + $b > $c && $a + $c > $b && $c + $b > $a ){
        $out="Rezultatas: Trikampį sudaryti galima";
    }else{
        $out="Rezultatas: Trikampio sudaryti negalima";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pirma Uzduotis</title>
</head>
<body>
<div class="container">
    <?php
      include ("navigacija.php");
    
    ?>
    <h1>Pirmoji užduotis</h1>
    <h4>Įvedami skaičiai -a, b, c –kraštinių ilgiai (į atskirus input laukus). Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir rezultatą išvestų.</h4>
    <form action="" method="post">
        <input type="text" name="a" placeholder="Kraštinės a ilgis"> <br>
        <input type="text" name="b" placeholder="Kraštinės b ilgis"> <br>
        <input type="text" name="c" placeholder="Kraštinės c ilgis"> <br>
        <button>Skaičiuoti</button>
        <link rel="stylesheet" href="styles.css">
    </form>
    <hr>
     <p><?=$out?></p>
</div>
</body>
</html>