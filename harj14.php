<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suvaline pilt ja pisipildid</title>
    <style>
        .thumbnail {
            width: 200px;
            height: auto;
            margin: 10px;
        }
        .thumbnail img {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>

<?php
$kataloog = 'failid2'; // Kataloogi nimi, kus pildid asuvad
$pildid = glob($kataloog . '/*.{jpg,jpeg,png,gif}', GLOB_BRACE); // Loetle kataloogi pildifailid

// Vali suvaline pilt
$suvaline_pilt = $pildid[array_rand($pildid)];

// Kuvame suvalise pildi
echo '<h2>Suvaline pilt:</h2>';
echo '<img src="' . $suvaline_pilt . '" alt="Suvaline pilt" style="max-width: 600px; height: auto;">';
echo '<br><br>';

// Kuvame pisipildid mitmes veerus
echo '<h2>Pisipildid:</h2>';
echo '<div class="thumbnails">';
$veergude_arv = 3; // Muuda siin soovitud veergude arvu
foreach ($pildid as $pilt) {
    echo '<div class="thumbnail">';
    echo '<a href="' . $pilt . '" target="_blank">';
    echo '<img src="' . $pilt . '" alt="Pisipilt">';
    echo '</a>';
    echo '</div>';
}
echo '</div>';
?>

</body>
</html>
