<?php
/**
 * Afficher les ages des dates de naissances qui vous sont fournis
 */

$birthDates = [
    ['year' => 2010, 'month' => 8, 'day' => 12],
    ['year' => 1978, 'month' => 5, 'day' => 2],
    ['year' => 1999, 'month' => 11, 'day' => 14],
    ['year' => 2008, 'month' => 6, 'day' => 23],
    ['year' => 1985, 'month' => 4, 'day' => 28],
    ['year' => 1955, 'month' => 3, 'day' => 17],
];

foreach($birthDates as $birthDate) {
    $date = new DateTime();
    $date->setDate($birthDate['year'], $birthDate['month'], $birthDate['day']);
    $age = ($date->diff(new DateTime()))->y;

    echo 'la personne née le ' . $birthDate['day'] .
    '/' . $birthDate['month'] .
    '/' . $birthDate['year'] . 
    ' est agée de ' . $age . ' ans' . PHP_EOL;
}