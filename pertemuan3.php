<?php


//* ========================================== Oprator aritmatika ======================================== */
$result = 10 + 10;
var_dump($result);

echo "<br>";
echo "<br>";

$sisa = 100 % 3;
var_dump($sisa);

//* ========================================== Oprator Penugasan ======================================== */
$total = 0;
$fruit = 10000;
$chiken = 35000;
$orangeJuice = 1000;

$total += $fruit;
$total += $chiken;
$total += $orangeJuice;

echo "<br>";
echo "<br>";

var_dump($total);

//* ========================================== Oprator Perbandingan ======================================== */

echo "<br>";
echo "<br>";
var_dump("Oprator Perbandingan");
echo "<br>";
echo "<br>";

$int1 = 10;
$int2 = "10";

echo "<br>";
var_dump($int1 == $int2, "==");
echo "<br>";
var_dump($int1 === $int2, "===");
echo "<br>";
var_dump($int1 != $int2, "!=");
echo "<br>";
var_dump($int1 !== $int2, "!==");
echo "<br>";
var_dump($int1 <> $int2, "<>");
echo "<br>";
var_dump($int1 > $int2, ">");
echo "<br>";
var_dump($int1 >= $int2, ">=");
echo "<br>";
var_dump($int1 < $int2, "<");
echo "<br>";
var_dump($int1 <= $int2, "<=");


//* ========================================== Oprator Logika ======================================== */

$nilai1 = true;
$nilai2 = false;
$nilai3 = false;

echo "<br>";
echo "<br>";
var_dump("Oprator Logika");
echo "<br>";
echo "<br>";
var_dump($nilai1 && $nilai2, "&&");
echo "<br>";
var_dump($nilai2 and $nilai3, "and");
echo "<br>";
var_dump($nilai1 || $nilai2, "||");
echo "<br>";
var_dump($nilai1 or $nilai2, "or");
echo "<br>";
var_dump($nilai1 xor $nilai2, "xor");



//* ========================================== Oprator Perbandingan ======================================== */

$nilai4 = 10;

echo "<br>";
echo "<br>";
var_dump("Oprator Logika");
echo "<br>";
echo "<br>";

$a = 10;
$b = $a++;
$c = ++$a;

var_dump($b, "var++");
echo "<br>";
var_dump($c, "++var");
echo "<br>";
var_dump($a, "var--");
echo "<br>";
var_dump(-$nilai4, "--var");
echo "<br>";


//* ========================================== Oprator Array ======================================== */


$arr1 = ['first_name' => "nofy"];
$arr2 = ['last_name' => "Cahyono"];
$arr3 = [
    'first' => "nofy",
    'last' => 'cahyono'
];
$arr4 = [
    'first' => "nofy",
    'last' => 'cahyono'
];

echo "<br>";
echo "<br>";
var_dump("Oprator Logika");
echo "<br>";
echo "<br>";

var_dump($arr1 == $arr2, "==");
echo "<br>";
var_dump($arr1 === $arr2, "===");
echo "<br>";
var_dump($arr1 != $arr2, "!=");
echo "<br>";
var_dump($arr1 <> $arr2, "<>");
echo "<br>";


var_dump($arr3 == $arr4, "==");
echo "<br>";
var_dump($arr3 === $arr4, "===");
echo "<br>";


//* ========================================== Oprator IF statment ======================================== */

$nilai6 = 70;
$absen = 80;

$rank = "";
echo "<br>";
echo "<br>";
if ($nilai6 >= 80 && $absen >= 80) {
    echo "Nilai anda A" . PHP_EOL;
    $rank = "A";
} elseif ($nilai6 >= 70 && $absen >= 70) {
    echo "Nilai anda B" . PHP_EOL;
    $rank = "B";
} elseif ($nilai6 >= 60 && $absen >= 60) {
    echo "Nilai anda C" . PHP_EOL;
    $rank = "C";
} elseif ($nilai6 >= 50 && $absen >= 50) {
    echo "Nilai anda D" . PHP_EOL;
    $rank = "D";
} else {
    echo "Nilai anda E" . PHP_EOL;
    $rank = "E";
}

echo "<br>";
echo "<br>";
//* ========================================== Switch Oprator ======================================== */
echo "<br>";
echo "<br>";

switch ($rank) {
    case "A":
        echo "Anda lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Ada Lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda tidak lulus" . PHP_EOL;
        break;
    default:
        echo "Mungkin anda salah jurusan" . PHP_EOL;
}

echo "<br>";
//* ========================================== Switch Oprator ======================================== */
echo "<br>";

$gender = "pria";
$greet = $gender === "pria" ? "Hi Bro" : "Hi Nona";
echo ($greet);



echo "<br>";
//* ========================================== Oprator nullcoalising ======================================== */
echo "<br>";

$data = ['action' => 'ramji'];

// $action = $data['action'] ?? 'noting';
if(isset($data['action'])){
    $action = $data['action'];
} else{
    $action = "Noting";
}


var_dump($action);
