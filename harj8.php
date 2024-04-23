<?php
    /*
    Harj8
    Markus Pilv
    2/14/2024
*/

// T�nane kuup�ev ja kellaaeg
$date = new DateTime();
echo "Tana on: " . $date->format('d.m.Y H:i') . "<br>";

// Kasutaja s�nniaasta
$birthYear = 2006; // Eeldame, et kasutaja on s�ndinud 2000. aastal

// Kasutaja vanus sellel aastal
$currentYear = date('Y');
$userAge = $currentYear - $birthYear;

echo "Kasutaja vanus sellel aastal: $userAge<br>";

// Kooliaasta l�pp
$endOfSchoolYear = new DateTime($currentYear . '-05-30'); 

// P�evade arv t�na kuni kooliaasta l�puni
$daysUntilEndOfYear = $date->diff($endOfSchoolYear)->days;
echo "Kooliaasta lopuni on jaanud $daysUntilEndOfYear paeva!<br>";

// Aastaaja m��ramine
$month = $date->format('n');
if ($month >= 3 && $month <= 5) {
    echo "<img src='kevad.jpg' alt='Kevad'>";
} elseif ($month >= 6 && $month <= 8) {
    echo "<img src='suvi.jpg' alt='Suvi'>";
} elseif ($month >= 9 && $month <= 11) {
    echo "<img src='sugis.jpg' alt='S�gis'>";
} else {
    echo "<img src='talv.jpg' alt='Talv'>";
}
?>
