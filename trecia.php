<?php

    $startYear = 1984;
    $endYear = 2043;
  $out="";
  if (isset($_POST['metai']) && is_numeric($_POST['metai']) ){
    $ivestiMetai=$_POST['metai'];
    switch((($ivestiMetai - $startYear))%10){
      case 0:  
        case 1:      
       $spalva="Žalia spalva";
       break;
      case 2:
        case 3: 
        $spalva="Raudona spalva";
          break;
      case 4:
        case 5:
        $spalva="Geltona spalva";
          break;
      case 6:
        case 7:
        $spalva="Balta spalva";
          break; 
        case 8:
      case 9:
        $spalva="Juoda spalva";
          break; 
            
      default:
     
      $spalva="Galimi metai tik nuo 1984";
  }
  if($ivestiMetai > $endYear) {
    
    $out="Galimi metai tik iki 2043";
  } else if($ivestiMetai < $startYear) {
    $out="Galimi metai tik nuo 1984";
  } else {

  $out="$ivestiMetai Metų spalva: $spalva";
 
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trečia uzduotis</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
    <?php
      include ("navigacija.php");
    ?>
    <h1>Trečioji užduotis</h1>
    <h4>Senovės japonų kalendorių sudarė 60 metų ciklas. Visi metai cikle buvo sunumeruoti nuo 1 iki 60 ir suskirstyti poromis, kurių kiekviena turėjo savo spalvą (žalią, raudoną, geltoną, baltą ar juodą). Ciklo metų spalvos buvo paskirstytos taip:
 <ul>
   <li>1, 2, 11, 12, 21, 22, …, 51, 52 metai – žalia spalva;</li>
   <li>3, 4, 13, 14, 23, 24, …, 53, 54 metai – raudona spalva;</li>
   <li>5, 6, 15, 16, 25, 26, …, 55, 56 metai – geltona spalva;</li>
   <li>7, 8, 17, 18, 27, 28, …, 57, 58 metai – balta spalva;</li>
   <li>9, 10, 19, 20, 29, 30, …, 59, 60 metai – juoda spalva.</li>
 </ul>

Žinoma, kad naujasis 60 metų ciklas prasidėjo 1984-aisiais ir baigsis 2043-iaisiais metais; 1984-ieji ir 1985-ieji buvo žalios spalvos metai, 1986-ieji ir 1987-ieji buvo raudonos spalvos metai, 2043-ieji bus juodos spalvos metai. Sukurkite puslapį kuriame būtų įvedami metai ir būtų išvedama kokia yra įvestų metų spalva pagal japonų kalendorių.
</h4>
    <form action="" method="post">
        <input type="text" name="metai" placeholder="Įvekite metus"> <br>
    
        <button>Išveskite metų spalvą</button>
    </form>
    <hr>
    <p><?= $out ?></p>
</div>
</body>
</html>
