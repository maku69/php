<?php
// Kogu t�rnid
$tarnide_arv = 100;
// Veergude arv
$veergude_arv = 10;

// Keskmine veeru pikkus
$keskmine_pikkus = floor($tarnide_arv / $veergude_arv);

// Alusta t�rnide v�ljastamist
for ($i = 0; $i < $tarnide_arv; $i++) {
    // Kui j�utakse veeru l�ppu, lisa reavahetus
    if ($i % $keskmine_pikkus == 0 && $i != 0) {
        echo "<br>";
    }
    // V�ljasta t�ht
    echo "* ";
}
?>
