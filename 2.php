<?php
// Funktsioon tollide teisendamiseks sentimeetriteks
function tollid_sentimeetriteks($tollid) {
    return round($tollid * 2.54, 2); // Teisenda tollid sentimeetriteks ja �marda kaks kohta
}

// N�ide: teisendame 5 tolli sentimeetriteks
$tollid = 5;
$sentimeetrid = tollid_sentimeetriteks($tollid);
echo $tollid . ' tolli on ' . $sentimeetrid . ' sentimeetrit.';
?>
