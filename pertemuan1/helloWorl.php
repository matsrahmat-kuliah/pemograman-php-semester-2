<?php
echo "<h1>Hello World</h1>";
// echo "<br>";
echo "Floating point: ";
var_dump(1.234);
echo "<br>";
echo "Floating point dengan E notation Plus (1.2 X 1000) : ";
var_dump(1.2e3);
echo "<br>";
echo "Floating point dengan E notation Minus (7 X 0.001) : ";
var_dump(7e-3);
echo "<br>";
echo "Underscore di Floating point: ";
var_dump(1_234.567);


$alias = "yanto";
echo "<br>";
$name = "Cahyo ";
$name .= "Cahaya" . $alias;
$age = 20;

echo "Name: $name";
echo "<br>";

echo "Age : $age";
echo "<br>";


$contoh = "management";
$$contoh = "Informatika";
$$$contoh = "tes ke 3";

echo "<hr>";
echo $contoh;
echo "<br>";
echo $management;
echo "<br>";
echo $Informatika;


define("APP_VERSION", "1.23");
echo APP_VERSION;


echo "<br>";
echo "<br>";
echo "<br>";

$nulVar = null;

if(is_null($nulVar)){
    echo "variable null";
} else {
    echo "variable ada";
}

$tes = "ini tes";

echo "<br>";
echo "<br>";
echo "Sebelum unset";
echo "<br>";
var_dump(isset($tes));
echo "<br>";
var_dump($tes);
unset($tes);
echo "<br>";
echo "<br>";
echo "sesudah unset";
echo "<br>";
var_dump(isset($tes));
echo "<br>";

