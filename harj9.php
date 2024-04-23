<?php
/*
 09 - PHP - aaaa
 Markus Pilv
 Haapsalu Kutsehariduskeskus
 06.03.2024
*/
// Tervitab kasutajat nimepidi
function greetUser($name) {
    $formattedName = ucfirst(strtolower($name)); // Suure algust�hega nimi
    echo "Tere, $formattedName!<br>";
}

// Lisab etteantud teksti iga t�he j�rgi punkti
function addDots($text) {
    $characters = str_split($text); // Teksti t�keldamine t�htedeks
    $dottedText = implode('.', $characters); // Liidab t�hepunktid
    return strtoupper($dottedText); // Teisendab k�ik t�hed suurteks t�htedeks
}

// Asendab ropud s�nad t�rnidega
function censorWords($text) {
    $badWords = array('noob', 'roogitud', 'm�ttetu'); // M��ratud ropud s�nad
    foreach ($badWords as $word) {
        $text = str_ireplace($word, '***', $text); // Asendab iga roppa s�na t�rnidega
    }
    return $text;
}

// Loob emaili eesnime ja perenime p�hjal
function createEmail($firstName, $lastName) {
    $email = strtolower(str_replace(array('�', '�', '�', '�'), array('a', 'o', 'y', 'o'), $firstName)) . '.' . strtolower(str_replace(array('�', '�', '�', '�'), array('a', 'o', 'y', 'o'), $lastName)) . '@hkhk.edu.ee';
    return $email;
}

// Kasutajalt saadud nimi
$name = "mArKuS";
greetUser($name);

// Etteantud tekst
$text = "stalker";
echo "Tekst punktidega: " . addDots($text) . "<br>";

// Kasutaja sisestatud s�num
$message = "Sa oled taielik noob";
echo "Sonum tarnidega: " . censorWords($message) . "<br>";

// Kasutaja eesnimi ja perenime
$firstName = "Ulle";
$lastName = "Doos";
echo "Email: " . createEmail($firstName, $lastName) . "<br>";
?>
