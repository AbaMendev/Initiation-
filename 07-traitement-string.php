<?php

/* Le traitement à connaitre => la concaténation = addition  de plusieurs textes*/

$prenom="Alain" ;
$nom="Doe";

//  1ère manière 
$phrase="$prenom $nom découvre le PHP" ; // => concaténation " " nous avons écrit les variables dans les guillemets .
// Executer le code :
echo $phrase ;
// Pour voir l'execution il faut appeler : http://localhost/php-initiation/jour1/07-traitement-string.php
// Cette fonction permet d'écrire dans le HTML


//  2ème manière 
$phrase2=" {$prenom} {$nom} découvre le PHP <br>" ; // => concaténation " " dans les guillemets $variables entourées de { }
echo $phrase2 ;
// Actualiser la page pour visualiser la nouvelle fonction

//  3ème manière : utilisation de l'opération . 
$phrase3 = $prenom . " " . $nom . "  " . "découvre le PHP <br>" ;
echo $phrase3 ;

/* Ecrire en PHP la phrase suivante : " Victor Hugo a dit "Vive les Misérables"
Caractére d'échappement
*/
// revoir Caractére d'échappement

$parole= " Victor Hugo a dit \"Vive les Misérables \""  ;
echo $parole ;





