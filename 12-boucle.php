<?php

/* Les boucles fonctionnent de la même manière que sur Javascript

Dans les parenthèse de for
    $i = 0 ; incrément  (=la variable va augmenter)
    $i < 3 ; condition de sortie de la boucle (= tant qu'elle est TRUE on ne sort pas dès qu'elle devient FALSE on sort de la bouble)
    $i++ ;  augmenter de + 1 la variable $i . Et de stocker le resultat du calcul dans lui même (=opérateur unaire) 
*/ 

for ( $i = 0 ; $i < 1000 ; $i++){

}

// Spéciale PHP :
?>

<?php for($i = 0 ; $i < 1000 ; $i++) : ?>
   <h1><?php echo $i ?></h1> 
<?php endfor ?>



<?php
for($i = 0 ; $i < 1000 ; $i++){
    echo "<h1>$i</h1>" ;
}


