<!DOCTYPE html>
<html>
<head>
    <title>harj6</title>
</head>
<body>
    <h1>harj6</h1>

    <?php
    /*
    Harj6
    Markus Pilv
    2/14/2024
*/
    // Arvud 1-100
    echo "<h2>Arvud 1-100:</h2>";
    for ($i = 1; $i <= 100; $i++) {
        echo $i;
        if ($i % 10 == 0) { // Reavahetus iga 10 arvu järel
            echo "<br>";
        } else {
            echo ". "; // Punktid iga arvu järel
        }
    }

    // Rida - horisontaalne tärnirida
    echo "<h2>Rida - horisontaalne tärnirida:</h2>";
    echo "**********<br>";

    // Rida II - vertikaalne tärnirida
    echo "<h2>Rida II - vertikaalne tärnirida:</h2>";
    for ($i = 1; $i <= 10; $i++) {
        echo "*<br>";
    }

    // Ruut - tärniruut, mille suuruse määrab kasutaja
    echo "<h2>Ruut - tärniruut:</h2>";
    $ruudu_kylg = 5; // Võib muuta veebivormi sisendiks
    for ($i = 1; $i <= $ruudu_kylg; $i++) {
        for ($j = 1; $j <= $ruudu_kylg; $j++) {
            echo "* ";
        }
        echo "<br>";
    }

    // Kahanevad paarisarvud 10-1
    echo "<h2>Kahanevad paarisarvud 10-1:</h2>";
    for ($i = 10; $i >= 1; $i--) {
        if ($i % 2 == 0) { // Kontroll, kas arv on paaris
            echo "$i<br>";
        }
    }

    // Kolmega jagunevad arvud 1-100
    echo "<h2>Kolmega jagunevad arvud 1-100:</h2>";
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 == 0) { // Kontroll, kas arv jagub kolmega
            echo "$i, ";
        }
    }

    // Tüdrukute ja poiste massiivid
    $tudrukud = array("Mari", "Liis", "Kati", "Anu", "Eva");
    $poisid = array("Peeter", "Jaan", "Toomas", "Mati", "Andres");

    // Väljastamine poiste ja tüdrukute paaridena
    echo "<h2>Paarid:</h2>";
    for ($i = 0; $i < count($tudrukud); $i++) {
        echo $poisid[$i] . " ja " . $tudrukud[$i] . "<br>";
    }

    // Tüdrukute ja poiste massiivide koopiate tegemine
    $uued_tudrukud = $tudrukud;
    $uued_poisid = $poisid;

    // Suvaliste paaride moodustamine
    shuffle($uued_tudrukud);
    shuffle($uued_poisid);

    // Väljastamine uute poiste ja tüdrukute paaridena
    echo "<h2>Suvalised paarid:</h2>";
    for ($i = 0; $i < count($uued_tudrukud); $i++) {
        echo $uued_poisid[$i] . " ja " . $uued_tudrukud[$i] . "<br>";
    }
    ?>
</body>
</html>
