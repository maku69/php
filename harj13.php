<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faili üleslaadimine</title>
</head>
<body>

<?php
    /*
    Harj13
    Markus Pilv
    2/14/2024
    roh
*/

$kataloog = 'failid';

// pildi kuvamiseks täies suuruses
function kuvapilt($pilt) {
    echo '<img src="' . $pilt . '" alt="Uploaded Image" style="max-width: 100%; height: auto;">';
}

// kas fail on üles laetud
if(!empty($_FILES['minu_fail']['name'])){
    $sinu_faili_nimi = $_FILES['minu_fail']['name'];
    $ajutine_fail = $_FILES['minu_fail']['tmp_name'];
    
    // Salvesta fail kataloogi "failid"
    if(move_uploaded_file($ajutine_fail, $kataloog.'/'.$sinu_faili_nimi)){
        echo 'Faili üleslaadimine oli edukas';    
    } else {
        echo 'Faili üleslaadimine ebaõnnestus';
    }
}

// näitame üleslaetud pildid
if ($kataloog_handle = opendir($kataloog)) {
    while (false !== ($entry = readdir($kataloog_handle))) {
        if ($entry != "." && $entry != "..") {
            echo "<br>";
            echo '<a href="' . $kataloog . '/' . $entry . '" target="_blank">';
            kuvapilt('failid/' . $entry); 
            echo '</a>';
        }
    }
    closedir($kataloog_handle);
}
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
    <input type="file" name="minu_fail"><br>
    <input type="submit" value="Lae üles!">
</form>

</body>
</html>
