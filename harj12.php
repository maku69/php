<?php
    /*
    Harj12
    Markus Pilv
    2/14/2024
    rah
*/

// Funktsioon sõiduaegade arvutamiseks
function arvuta_soiduaeg($stardi_aeg, $loppaeg) {
    // Kontrollime, kas stardi ja lõppaja on vähemalt viis sümbolit pikad
    if(strlen($stardi_aeg) < 5 || strlen($loppaeg) < 5) {
        return "Vale sisendformaad! Lisage stardi ja lõppaja kujul hh:mm.";
    }
    
    // Eraldame tunnid ja minutid stardi ja lõppaja stringidest
    $stardi_andmed = explode(":", $stardi_aeg);
    $loppaeg_andmed = explode(":", $loppaeg);
    
    // Arvutame tunnid ja minutid
    $stardi_tunnid = intval($stardi_andmed[0]);
    $stardi_minutid = intval($stardi_andmed[1]);
    
    $loppaeg_tunnid = intval($loppaeg_andmed[0]);
    $loppaeg_minutid = intval($loppaeg_andmed[1]);
    
    // Arvutame sõiduaja tunnites ja minutites
    $soiduaeg_tunnid = $loppaeg_tunnid - $stardi_tunnid;
    $soiduaeg_minutid = $loppaeg_minutid - $stardi_minutid;
    
    // Kui sõiduaeg minutites on negatiivne, siis korrigeerime seda
    if($soiduaeg_minutid < 0) {
        $soiduaeg_minutid += 60;
        $soiduaeg_tunnid--;
    }
    
    return "S6iduaeg: $soiduaeg_tunnid tundi ja $soiduaeg_minutid minutit." . "<br>";
}

// Funktsioon palgade võrdlemiseks
function voi_sugu_palga_jargi($failinimi) {
    // Loome tühjad massiivid meeste ja naiste palkade hoidmiseks
    $meeste_palgaad = [];
    $naiste_palgaad = [];
    
    // Loeme CSV faili ja lisame palgad vastavalt soole
    $read = file($failinimi);
    foreach ($read as $rida) {
        $andmed = explode(";", $rida);
        $sugu = $andmed[1];
        $palk = intval($andmed[2]);
        
        if ($sugu == 'm') {
            $meeste_palgaad[] = $palk;
        } elseif ($sugu == 'n') {
            $naiste_palgaad[] = $palk;
        }
    }
    
    // Arvutame keskmise palga meestele ja naistele
    $meeste_keskmine_palk = array_sum($meeste_palgaad) / count($meeste_palgaad);
    $naiste_keskmine_palk = array_sum($naiste_palgaad) / count($naiste_palgaad);
    
    // Leime kõrgeima palga mõlemast soost
    $meeste_maks_palk = max($meeste_palgaad);
    $naiste_maks_palk = max($naiste_palgaad);
    
    // Tagastame tulemused
    return [
        'meeste_keskmine_palk' => $meeste_keskmine_palk,
        'naiste_keskmine_palk' => $naiste_keskmine_palk,
        'meeste_maks_palk' => $meeste_maks_palk,
        'naiste_maks_palk' => $naiste_maks_palk
    ];
}

// Kasutame funktsioone
$stardi_aeg = "10:15";
$loppaeg = "14:30";
echo arvuta_soiduaeg($stardi_aeg, $loppaeg);

$tulemused = voi_sugu_palga_jargi('tootajad.csv');
echo "Meeste keskmine palk: " . $tulemused['meeste_keskmine_palk'] . "<br>";
echo "Naiste keskmine palk: " . $tulemused['naiste_keskmine_palk'] . "<br>";
echo "K6rgeim meeste palk: " . $tulemused['meeste_maks_palk'] . "<br>";
echo "K6rgeim naiste palk: " . $tulemused['naiste_maks_palk'] . "<br>";

?>
