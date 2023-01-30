<?php

//--------------Ennoncé--------------


$prenom= "Victor" ;
$nom= "Hugo" ;
$ville= "Paris" ;

$phrase= " $prenom $nom à vécu à $ville en 1800. <br>" ;
echo $phrase ;

$phrase2= " {$prenom} a quitté {$ville} à la fin de sa carrière. <br>" ;
echo $phrase2 ;

$phrase3= "$prenom $nom à ecrit \"  Notre Dame de $ville\"." ;
echo $phrase3 ;