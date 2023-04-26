<?php
/**
 * Compléter la fonction whoIsTheWinner() pour afficher le gagnant
 * des grilles de morpion passées en paramètre (ou "personne" s'il n'y pas de gagnant) 
 */

 function whoIsTheWinner(array $grid): string
 {
    if($grid[0][0] == $grid[0][1] && $grid[0][0] == $grid[0][2]) return $grid[0][0];
    if($grid[1][0] == $grid[1][1] && $grid[1][0] == $grid[1][2]) return $grid[1][0];
    if($grid[2][0] == $grid[2][1] && $grid[2][0] == $grid[2][2]) return $grid[2][0];

    if($grid[0][0] == $grid[1][0] && $grid[0][0] == $grid[2][0]) return $grid[0][0];
    if($grid[0][1] == $grid[1][1] && $grid[0][1] == $grid[2][1]) return $grid[0][1];
    if($grid[0][2] == $grid[1][2] && $grid[0][2] == $grid[2][2]) return $grid[0][2];


    if($grid[0][0] == $grid[1][1] && $grid[0][0] == $grid[2][2]) return $grid[0][0];
    if($grid[0][2] == $grid[1][1] && $grid[0][2] == $grid[2][0]) return $grid[0][2];

    return 'personne :-(';
 }

 $game1 = [
    ['X','X','X'],
    ['O','O','X'],
    ['X','O','O'],
 ];

 $game2 = [
    ['X','X','O'],
    ['X','O','X'],
    ['X','O','O'],
 ];

 $game3 = [
    ['X','O','X'],
    ['O','O','X'],
    ['X','O','O'],
 ];

 $game4 = [
    ['X','O','X'],
    ['O','O','X'],
    ['X','X','O'],
 ];

 $game5 = [
    ['O','X','X'],
    ['O','O','X'],
    ['X','X','O'],
 ];


 echo "Pour la partie 1 le gagnant est : " . whoIsTheWinner($game1) . PHP_EOL;
 echo "Pour la partie 2 le gagnant est : " . whoIsTheWinner($game2) . PHP_EOL;
 echo "Pour la partie 3 le gagnant est : " . whoIsTheWinner($game3) . PHP_EOL;
 echo "Pour la partie 4 le gagnant est : " . whoIsTheWinner($game4) . PHP_EOL;
 echo "Pour la partie 5 le gagnant est : " . whoIsTheWinner($game5) . PHP_EOL;