<?php
$values = array(1, 2, 3, 4, "adsad", true, false);
$names = ['jajang', 'nofi', 'asdasidb'];

//*  =============== Mencetak value pada array ke 4;

var_dump($values[4]);
echo "<br>";

//*  ====================== Menghapus value pada array index ke 2;

unset($names[1]);
var_dump($names);
echo "<br>";

//* ======================= Mengambil Value dari array index ke 5;

$isArray = $values[5];
var_dump($isArray);
echo "<br>";

//* ======================== Menghitung panjang dari array;

$arrayLength = count($names);
var_dump($arrayLength);
echo "<br>";

//* ======================= Aritmatika pada type data yang berbeda;

$a = '10';
$b = 20;
$c = $a + $b;
var_dump($c);
echo "<br>";

//* ======================== Array assosiatif dengan key value;

$person = array(
    'name' => "cahyo",
    'age' => 12,
    'gender' => 'male',
    'isMarrie' => false,
    'address' => array(
        'street' => 'Jl. Gatot subroto',
        'city' => array(
            'sayidan' => 'Block C',
            'cimone' => 'Block A'
        ),
        'capital' => 'Baten',
        'country' => 'Indonesia'
    ),
);

echo '<br>';
echo $person['address']['city']['cimone'];

$person2 = [
    'name' => 'nofi',
    'age' => 43,
    'gender' => 'female',
    'isMarrie' => true
];

echo "<br>";
// var_dump($person);
echo "<br>";
// var_dump($person2);
echo "<br>";

//* ========================= Mengambil nama dari person

$personName = $person['name'];
// echo $personName;

//* ========================= Mengambil provice dari person

$personCapital = $person['address']['capital'];
// echo $personCapital;


$numArr = array(10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20);
echo "<br>";
// echo $numArr[5];
