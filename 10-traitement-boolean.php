<?php
//10-traitement-boolean

$toto= false ;
$titi= true ;
$test1 = 50 > 10 ;

echo $test1 ; // => affiche 1, si on souhaite afficher la valeur :
var_dump($test1) ; // ==> affiche true

// !!! pour false il n'affiche aucune réponse
$test2 = 50 < 10 ;
echo $test2 ; // ==> n'affiche aucune réponse
var_dump($test2) ; // ==> affiche false

// var_dump() ; est conseillé pour débugger les variables boolean

/* Les variables utiliser sont les même que JS :
    >
    <
    >=
    <=
    ==
    !=
    ===
    !==
*/

$test4 = 10 === "10" ; // true
// Vérifier la valeur de transtypage
var_dump($test4) ;

/* Les même que JS :
    &&  => "et"
    ||  => "ou"
    !
*/

$test5 = 10 > 30 || 20 < 30 ;
//         FALSE || TRUE
//          TRUE
var_dump($test5) ;

/* Il est déconseiller d'utiliser à la place de && => AND
                                                || => OR
sauf si j'entoure mon opération de (), mais il est preferable de ne pas utiliser cette forme : AND / OR
*/

$test6 = (80 > 60 || 12 < 11) ;
//          TRUE ||FALSE 
//          TRUE
var_dump($test6) ;


