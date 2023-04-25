<?php
/**
 * 1/ Créer une fonction getRange() qui prend un chiffre positif en entrée 
 * (si un négatif est passé la fonction renvoit un tableau vide) et qui renvoit 
 * un tableau contenant toutes les valeurs de 0 au chiffre passé. 
 * Avant de le renvoyer la fonction devra également ranger aléatoirement les éléments 
 * du tableau.
 * 
 * 2/ Afficher les éléments retournés par la fonction sous la forme : 
 * => X - X - X - X - X ...
 */

 function getRange(int $limit): array
 {
    if($limit < 0) return [];
    
    $range = range(0, $limit);
    shuffle($range);
    return $range;
 }

 echo implode(' - ', getRange(5)) . PHP_EOL;
 echo implode(' - ', getRange(8)) . PHP_EOL;
 echo implode(' - ', getRange(0)) . PHP_EOL;
 echo implode(' - ', getRange(-4)) . PHP_EOL;