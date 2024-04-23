<!DOCTYPE html>
<html>
<head>
    <title>Funktsioonid</title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Funktsioonid</h1>

        <?php
    /*
    Harj7
    Markus Pilv
    2/14/2024
*/

        // Tervitusfunktsioon
        function tervitus() {
            echo "<p>Tere paiksekesekene!</p>";
        }

        // Liitu uudiskirjaga funktsioon
        function uudiskirjaga_liitumine_vorm() {
            echo "<form method='post'>
                    <div class='form-group'>
                        <label for='email'>Email:</label>
                        <input type='email' class='form-control' id='email' name='email' required>
                    </div>
                    <button type='submit' class='btn btn-primary' name='subscribe'>Liitu uudiskirjaga</button>
                </form>";
        }

        // Kasutajanime ja emaili funktsioon
        function kasutajanimi_email($kasutajanimi) {
            $kasutajanimi = strtolower($kasutajanimi);
            $email = $kasutajanimi . "@hkhk.edu.ee";
            $kood = generateRandomString(7); // Genereerib 7-kohalise koodi
            return array("kasutajanimi" => $kasutajanimi, "email" => $email, "kood" => $kood);
        }

        // Funktsioon arvude vahemiku valimiseks
        function arvude_vahemik($algus, $lopp, $samm = 1) {
            $arvud = array();
            for ($i = $algus; $i <= $lopp; $i += $samm) {
                $arvud[] = $i;
            }
            return $arvud;
        }

        // Ristküliku pindala funktsioon
        function ristkyliku_pindala($pikkus, $laius) {
            return $pikkus * $laius;
        }

        // Isikukoodi pikkuse ja muude andmete kontroll
        function isikukoodi_kontroll($isikukood) {
            $sugu = substr($isikukood, 0, 1) % 2 == 0 ? "Naine" : "Mees";
            $sunniaeg = substr($isikukood, 1, 6); // Näiteks YYYYMMDD
            if (strlen($isikukood) == 11) {
                return array("sugu" => $sugu, "sunniaeg" => $sunniaeg);
            } else {
                return "Vigane isikukood!";
            }
        }

        // Funk kolme hepikkust massiivi hoidmiseks
        function head_motet() {
            $alus = array("Elu", "Armastus", "Õnn");
            $oeldis = array("toob", "teeb", "annab");
            $sihitis = array("rõõmu", "õnne", "harjumuse");
            $lause = $alus[array_rand($alus)] . " " . $oeldis[array_rand($oeldis)] . " " . $sihitis[array_rand($sihitis)];
            return $lause;
        }

        // Funk suvalise stringi genereerimiseks
        function generateRandomString($length = 10) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }

        // Kutsume valja funkid ja kuvame tulemused
        tervitus();

        echo "<h2>Liitu uudiskirjaga:</h2>";
        uudiskirjaga_liitumine_vorm();

        $kasutajanimi = "JohnDoe";
        $kasutajainfo = kasutajanimi_email($kasutajanimi);
        echo "<h2>Kasutajanimi ja email:</h2>";
        echo "Kasutajanimi: " . $kasutajainfo['kasutajanimi'] . "<br>";
        echo "Email: " . $kasutajainfo['email'] . "<br>";
        echo "Kood: " . $kasutajainfo['kood'] . "<br>";

        echo "<h2>Arvude vahemik 2-8, samm 3:</h2>";
        $arvud = arvude_vahemik(2, 8, 3);
        echo implode(", ", $arvud) . "<br>";

        echo "<h2>Ristküliku pindala:</h2>";
        $pikkus = 5;
        $laius = 10;
        echo "Pikkus: $pikkus, Laius: $laius<br>";
        echo "Pindala: " . ristkyliku_pindala($pikkus, $laius) . "<br>";

        echo "<h2>Isikukoodi kontroll:</h2>";
        $isikukood = "39305270222";
        $kontroll = isikukoodi_kontroll($isikukood);
        if (is_array($kontroll)) {
            echo "Sugu: " . $kontroll['sugu'] . "<br>";
            echo "Sunniaeg: " . $kontroll['sunniaeg'] . "<br>";
        } else {
            echo $kontroll . "<br>";
        }

        echo "<h2>Head motted:</h2>";
        echo head_motet();
        ?>
    </div>
</body>
</html>
