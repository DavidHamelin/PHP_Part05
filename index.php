<?php

echo "<h1>PHP Part 05</h1>";
// Ex 01
echo "<h3>Ex 01</h3>";
$months = ['janvier',
'février',
'mars',
'avril',
'mai',
'juin',
'juillet',
'aout',
'septembre',
'octobre',
'novembre',
'décembre'];
// Ex 02
echo "<h3>Ex 02</h3>";
echo $months[2] . '</br>';
// Ex 03
echo "<h3>Ex 03</h3>";
echo $months[5] . '</br>';
// Ex 04
echo "<h3>Ex 04</h3>";
$months[7] = 'août';
echo $months[7] . '</br>';
// Ex 05
echo "<h3>Ex 05</h3>";
$HautsDeFrance = [
    '02' => 'Aisne',
    '59' => 'Nord',
    '60' => 'Oise',
    '62' => 'Pas-de-Calais',
    '80' => 'Somme'
];
// Ex 06
echo "<h3>Ex 06</h3>";
echo $HautsDeFrance[59];
// Ex 07
echo "<h3>Ex 07</h3>";
$HautsDeFrance[51] = 'Marne';
// Ex 08
echo "<h3>Ex 08</h3>";
echo "<p> Mois : </p>";
foreach($months as $element)
{
    echo $element . '</br>';
}
// Ex 09
echo "<h3>Ex 09</h3>";
echo "<p> Haut de France : </p>";
foreach($HautsDeFrance as $element)
{
    echo $element . '</br>';
}
// Ex 10
echo "<h3>Ex 10</h3>";
foreach($HautsDeFrance as $key => $valeur)
{
    // var_dump($HautsDeFrance);
    echo  $key . ' ' . $valeur . '</br>';
}
?>