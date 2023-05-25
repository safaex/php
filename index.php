<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>deel 1</h1>
    <?php 
    $myArray = ['auto','fiets','brommer','bus','vliegtuig','trein'];
    $myArray = ['auto','fiets','brommer','bus','vliegtuig','trein','boot'];

    echo count($myArray);
   ?>

   <h2>deel2</h2>
   <?php
   $myArray = ['auto','fiets','brommer','bus','vliegtuig','trein'];
    echo "het array heeft ".count($myArray)." elementen";
    
    $myArray[]= 'boot';
    echo "het array heeft ".count($myArray)." elementen";
    ?>

  <h3>deel3</h3>
  <?php
   echo regel 2 "bar"
   echo regel 5 "4"
   echo regel 8 "Toyota"
   echo regel 9 "volvo, BMW, Toyota"
   echo regel 12 "5"
   echo regel 19 "4"
  ?>


<h4>deel4</h4>
<?php

$cijfersPHP = [4.4, 4.6, 5.6, 6.1, 7.2];

// bereken gemiddelde door alle cijfers op te tellen en te delen door het aantal//
$gemiddelde = array_sum ($cijfersPHP) / count($aantalCijfers);

echo " Gemiddelde is: ". $gemiddelde;
echo(round($gemiddelde). "<br>");

//deel4B//
//Ik denk dat het beter is om de regels samen te voegen, omdat je code korter en makkelijker is om te schrijven//

?>
 
 







</body>
</html>