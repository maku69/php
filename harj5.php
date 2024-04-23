<!DOCTYPE html>
<html>
<head>
    <title>Kasutaja otsing</title>
    <!-- Lisame Bootstrapi stiilid -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Kasutaja otsing</h1>
        <?php
        /*
    Harj5
    Markus Pilv
    2/14/2024
*/
        // Pildid
        $pildid = array("prentice.jpg", "freeland.jpg", "peterus.jpg", "devlin.jpg", "gabriel.jpg", "pete.jpg");

        // Otsitav nimi
        $otsitav_nimi = "devlin.jpg";
       

        // Kasutaja otsingu kontroll
        if (in_array($otsitav_nimi, $pildid)) {
            echo "<div class='alert alert-success mt-4' role='alert'>Kasutaja $otsitav_nimi on massiivis olemas!</div>";
        } else {
            echo "<div class='alert alert-danger mt-4' role='alert'>Kasutaja $otsitav_nimi ei ole massiivis olemas!</div>";
        }

        // Tekitame /img kataloogi
        if (!is_dir('img')) {
            mkdir('img');
        }

     
        // Kolmas pilt massiivist
        echo "<h2>Kolmas pilt massiivist:</h2>";
        echo "<img src='img/$pildid[2]' class='img-fluid' alt='Kolmas pilt'>";

        // Kõik pildid massiivist
        echo "<h2>Kõik pildid massiivist:</h2>";
        echo "<div class='row'>";
        foreach ($pildid as $pilt) {
            echo "<div class='col-md-2'><img src='img/$pilt' class='img-fluid' alt='$pilt'></div>";
        }
        echo "</div>";
        ?>
    </div>
</body>
</html>
