<?php

//* ========================== FUNCTION DECLARATION ======================= 

function sayHello()
{
    echo "Say Hello from function" . PHP_EOL;
    echo "<br>";
}


//* ========================== FUNCTION DECLARATION IN IF CONDITION ======================= 

$isTrue = true;
if ($isTrue) {
    function hi()
    {
        echo "Hi";
    }
}
// hi();

//* ========================== FUNCTION ARGUMENT ======================= 

function sayHello2($name)
{
    echo "<h1>Hello $name </h1>";
}

// sayHello2("Cahaya");
// sayHello2("Jajaj");


//* ========================== FUNCTION ARGUMENT WITH DEFAULT PARAMETER ======================= 

function sayHello3($name = "Tamu")
{
    echo "<h1>Hello $name </h1>";
}

// sayHello3("Erik");
// sayHello3();


//* ========================== FUNCTION ARGUMENT WITH DEFAULT PARAMETER ======================= 

function sayHello4($firstName = "kurni", $lastname = "Barbeque")
{
    echo "Hello $firstName $lastname" . PHP_EOL;
}

// sayHello4("ryan", "mega");

$nilai = [10, 20];

//* ========================== FUNCTION ARGUMENT FOR SUM ======================= 

function sum($first, $last)
{
    $total = $first + $last;
    echo "Total $first + $last = $total";
    echo "<br>";
}

// sum("2", "5");
// sum(2, 5);
// sum(true, false);
// sum($nilai[0], $nilai[1]);


//* ========================== FUNCTION ARGUMENT RETURN VALUE ======================= 

function sum2($first, $last)
{
    return $first + $last;
}

// $total = sum2(2,3);
// $total2 = sum2(5,9);

// echo "Total pertama : $total";
// echo "<br>";
// echo "Total ke 2 : $total2";

//* ========================== FUNCTION VARIABLE ======================= 

function foo()
{
    echo "FOO";
}

function bar()
{
    echo "BAR";
}


$functionName = "foo";
// $functionName();

echo "<br>";

$functionName2 = "bar";
// $functionName2();

//* ========================== PENGGUNAAN VARIABLE ======================== 

function sayHello5(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
    echo "<br>";
}

// sayHello5("Eko", "strtoupper");

// sayHello5("Eko", "strtolower");

//* ========================== ANONYMOUSE FUNCTION SEBAGAI ARGUMENT ======================== 

function sayGoodBy(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good Bye $finalName";
    echo "<br>";
}

// sayGoodBy("eko", function (string $name){
//     return strtoupper($name);
// });


echo "Index file";

//* ========================== FUNCTION WITH GLOBAL VARIABLE ======================== 

$firstName = "Jhon";
$lastName = "Khanedi";

echo "<br>";
$myName = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName";
};

$myName();
