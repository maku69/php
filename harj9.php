<?php
/*
 09 - PHP - aaaa
 Markus Pilv
 Haapsalu Kutsehariduskeskus
 06.03.2024
*/
// Tervitab kasutajat nimepidi
function greetUser($name) {
    $formattedName = ucfirst(strtolower($name)); // Suure algustähega nimi
    echo "Tere, $formattedName!<br>";
}

// Lisab etteantud teksti iga tähe järgi punkti
function addDots($text) {
    $characters = str_split($text); // Teksti tükeldamine tähtedeks
    $dottedText = implode('.', $characters); // Liidab tähepunktid
    return strtoupper($dottedText); // Teisendab kõik tähed suurteks tähtedeks
}

// Asendab ropud sõnad tärnidega
function censorWords($text) {
    $badWords = array('noob', 'roogitud', 'mõttetu'); // Määratud ropud sõnad
    foreach ($badWords as $word) {
        $text = str_ireplace($word, '***', $text); // Asendab iga roppa sõna tärnidega
    }
    return $text;
}

// Loob emaili eesnime ja perenime põhjal
function createEmail($firstName, $lastName) {
    $email = strtolower(str_replace(array('ä', 'ö', 'ü', 'õ'), array('a', 'o', 'y', 'o'), $firstName)) . '.' . strtolower(str_replace(array('ä', 'ö', 'ü', 'õ'), array('a', 'o', 'y', 'o'), $lastName)) . '@hkhk.edu.ee';
    return $email;
}

// Kasutajalt saadud nimi
$name = "mArKuS";
greetUser($name);

// Etteantud tekst
$text = "stalker";
echo "Tekst punktidega: " . addDots($text) . "<br>";

// Kasutaja sisestatud sõnum
$message = "Sa oled taielik noob";
echo "Sonum tarnidega: " . censorWords($message) . "<br>";

// Kasutaja eesnimi ja perenime
$firstName = "Ulle";
$lastName = "Doos";
echo "Email: " . createEmail($firstName, $lastName) . "<br>";
?>
