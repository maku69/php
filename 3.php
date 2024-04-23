<?php
// Kogu tärnid
$tarnide_arv = 100;
// Veergude arv
$veergude_arv = 10;

// Keskmine veeru pikkus
$keskmine_pikkus = floor($tarnide_arv / $veergude_arv);

// Alusta tärnide väljastamist
for ($i = 0; $i < $tarnide_arv; $i++) {
    // Kui jõutakse veeru lõppu, lisa reavahetus
    if ($i % $keskmine_pikkus == 0 && $i != 0) {
        echo "<br>";
    }
    // Väljasta täht
    echo "* ";
}
?>
