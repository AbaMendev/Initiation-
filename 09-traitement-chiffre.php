<?php
//09-traitement-chiffre

$a=10 ;
$b=30 ;

echo $a + $b . "<br>" ; // addition
echo $a - $b . "<br>" ; // soustraction
echo $a * $b . "<br>" ; // multiplication
echo $a / $b . "<br>" ; // division
echo $a ** $b . "<br>" ; //puissance
echo $a % $b . "<br>" ; // modulo


// http://localhost/php-initiation/jour1/09-traitement-chiffre.php


$animaux= "12 vaches" ;
$prix= "500 euros" ;
$total= @($animaux * $prix) ."<br>" ;
echo $total ;
// Pour enlever le warning sur un traitement mettre le "@" devant notre calcul, c'est déconseillé mais possible.

$c= 30 ;
$d="40" ;
echo $c + $d . "<br>";  // => 70 en PHP mais en JS => "3040 

