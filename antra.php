<?php

  $out="";
  $olimpiadosPradzia = 1896;
  $skaicius = "";
  if (isset($_POST['metai']) && is_numeric($_POST['metai']) ){
  
    $metai=$_POST['metai'];
    if ($metai % 4 == 0 && $metai >= $olimpiadosPradzia){
        $out="$metai metai: Olimpiniai metai, Nr.";
        $skaicius=(($metai - $olimpiadosPradzia) / 4) + 1;
       
    }else{
        $out="$metai Neolimpiniai metai";
        $skaicius="";
    }
 
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antra uzduotis</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
    <?php
      include ("navigacija.php");
    ?>
    <h1>Antroji užduotis</h1>
    <h4>Pirmosios vasaros olimpinės žaidynės įvyko 1896 m. Atėnuose. Po to jos vyko arba turėjo vykti kas ketveri metai, t.y. 1900 m. – antrosios, 1904 m. – trečiosios ir t.t. Neįvykusioms žaidynėms skiriamas eilės numeris, o jų metai vis tiek laikomi olimpiniais. Tinklapyje turi būti įvedami metai, nustatykite olimpinių žaidimų numerį, jei metai yra olimpiniai arba praneškite, kad metai ne olimpiniai. Tinkalpyje turi būti išvedama ar tai buvo olimpiniai metai ar ne, jei tai buvo olimpiniai metai taip pat išvesti ir jų numerį.</h4>
    <form action="" method="post">
        <input type="text" name="metai" placeholder="Įvekite metus"> <br>
    
        <button>Suskaičiuoti</button>
    </form>
    <hr>
    <p><?php echo $out; ?> <?= $skaicius; ?><br></p>
</div>

</body>
</html>