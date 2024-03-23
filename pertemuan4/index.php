<?php

// $counter = 0;

// * ============================ Loop ==========================
// for(;$counter < 5;){
    //     echo "Hello for loop " . $counter . PHP_EOL;
    //     $counter++;
    //     echo "<br>";
    // }
    
// * ================================= Loop ==========================
// for ($i = 0; $i < 10;) {
    //     echo "for ke dua " . $counter . PHP_EOL;
    //     echo "<br>";
    //     $i++;
    // }
    
// * ================================= Loop ==========================
    // for ($i = 0; $i < 10; $i++) {
    //     if ($i === 5) {
    //         echo "Ini loop pada hitungan ke {$i}";
    //         echo "<br>";
    //     } else {
    //         echo "for ke dua " . $i . PHP_EOL;
    //         echo "<br>";
    //         echo "<br>";
    //     }
    // }
// * ================================= Loop dari array ==========================
                
// $listMenu = ['nasgor', 'ubi', 'nasi bakar'];
// for($i = 0; $i < count($listMenu); $i++){
//     if($listMenu[$i] === 'ubi'){
//         echo $i . PHP_EOL;
//     }
// }

// * ================================= Loop dengan endfor ==========================

// for ($i = 0; $i < 4; $i++) :
//     echo "Dengan endfor " . $i;
//     echo "<br>";
//     $var1 = "q";
// endfor;

// * ================================= Loop dengan while ==========================

// while ($couter < 6) {
//     echo "While loop {$couter}";
//     echo "<br>";
//     echo "<hr>";
//     $couter++;
// }

// * ================================= Loop dengan while dan endwhile ==========================

// while ($couter < 6) :
//     echo "While loop {$couter}";
//     echo "<br>";
//     echo "<hr>";
//     $couter++;
// endwhile;

// $couter = 1;
// * ================================= Loop dengan do while ==========================

// do {
//     $couter++;
//     echo "Ini do while {$couter}";
//     echo "<br>";
//     echo "<hr>";
//     if($couter === 5) break;
// } while (True);

// * ================================= Loop dengan continue ==========================

// for ($i = 0; $i < 10; $i++) {
//     if ($i % 2 == 0) {
//         continue;
//     }
//     echo "Hello continue {$i}";
//     echo "<hr>";
// }

// * ================================= Loop dari array ==========================

// $names = ['nofi', 'cahyono','mugiyarto'];

// for($i = 0; $i < count($names); $i++){
//     echo "Hello $names[$i]";
//     echo "<br>";
// }

// * ================================= Loop dengan foreach ==========================

// foreach ($names as $name) {
//     echo "Hello {$name}";
//     echo "<br>";
// }


// $names = [
//     'name depan' => 'nofi',
//     'nama belakang' => 'cahyono'
// ];

// * ================================= Loop dengan foreach dari array ==========================

// foreach($names  as $key => $value) {
//     echo "{$key} : {$value}";
//     echo "<hr>";
// }

// * ================================= Loop dengan while dengan goto ==========================

// $counter = 1;
// while (true) {
//     echo "While loop {$counter}";
//     echo "<hr>";
//     $counter++;
//     if ($counter > 5) {
//         goto end;
//     }
// }

// end:
// echo "End loop";
