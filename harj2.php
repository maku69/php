<?php
/*
    Harj1
    Markus Pilv
    2/14/2024
*/
$arv1 = 20;
$arv2 = 5;

echo "Liitmine: $arv1+$arv2=" . ($arv1 + $arv2) . "<br>";
echo "Lahutamine: $arv1-$arv2=" . ($arv1 - $arv2) . "<br>";
echo "Korrutamine: $arv1*$arv2=" . ($arv1 * $arv2) . "<br>";
echo "Jagamine: $arv1/$arv2=" . ($arv1 / $arv2) . "<br>";
echo "Jääk: $arv1%$arv2=" . ($arv1 % $arv2) . "<br>";


$millimeetrid = 1250;
$sentimeetrid = $millimeetrid / 10;
$meetrid = $sentimeetrid / 100;

echo "Millimeetrid: $millimeetrid mm<br>";
echo "Sentimeetrid: " . number_format($sentimeetrid, 2) . " cm<br>";
echo "Meetrid: " . number_format($meetrid, 2) . " m<br>";


$a = 3;
$b = 4;
$c = sqrt($a ** 2 + $b ** 2); 
$umbermoot = $a + $b + $c;
$pindala = ($a * $b) / 2;

echo "Täisnurkse kolmnurga ümbermõõt: " . round($umbermoot) . " ühikut<br>";
echo "Täisnurkse kolmnurga pindala: " . round($pindala) . " ruutühikut<br>";




?>