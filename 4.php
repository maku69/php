<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morsekoodi teisendaja</title>
</head>
<body>
    <h2>Sisesta tekst, mida soovid teisendada morsekoodiks:</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <textarea name="sisendtekst" rows="4" cols="50"></textarea><br><br>
        <input type="submit" value="Teisenda">
    </form>

    <?php
    // Funktsioon, mis tagastab morsekoodi vastava t�he v�i s�mboli j�rgi
    function morse_kood($symbol) {
        // Morsekoodi t�lkimine
        $morse_koodid = array(
            'A' => '.-', 'B' => '-...', 'C' => '-.-.', 'D' => '-..', 'E' => '.', 'F' => '..-.', 'G' => '--.', 'H' => '....',
            'I' => '..', 'J' => '.---', 'K' => '-.-', 'L' => '.-..', 'M' => '--', 'N' => '-.', 'O' => '---', 'P' => '.--.',
            'Q' => '--.-', 'R' => '.-.', 'S' => '...', 'T' => '-', 'U' => '..-', 'V' => '...-', 'W' => '.--', 'X' => '-..-',
            'Y' => '-.--', 'Z' => '--..',
            '0' => '-----', '1' => '.----', '2' => '..---', '3' => '...--', '4' => '....-', '5' => '.....',
            '6' => '-....', '7' => '--...', '8' => '---..', '9' => '----.',
            '.' => '.-.-.-', ',' => '--..--', '?' => '..--..', '!' => '-.-.--', "'" => '.----.', '"' => '.-..-.',
            '(' => '-.--.', ')' => '-.--.-', '&' => '.-...', ':' => '---...', ';' => '-.-.-.', '/' => '-..-.',
            '=' => '-...-', '+' => '.-.-.', '-' => '-....-', '_' => '..--.-', '@' => '.--.-.'
        );

        // Konverteeri s�mbolid suurtelt�htedeks
        $symbol = strtoupper($symbol);

        // Tagastame morsekoodi, kui see eksisteerib
        return isset($morse_koodid[$symbol]) ? $morse_koodid[$symbol] : '';
    }

    // Funktsioon, mis teisendab teksti morsekoodiks
    function tekst_morseks($tekst) {
        // T�hja stringi morsekoodi salvestamiseks
        $morse_kood = '';

        // L�bime iga t�he tekstis
        for ($i = 0; $i < strlen($tekst); $i++) {
            // Kui t�ht ei ole t�hik, lisame selle morsekoodi
            if ($tekst[$i] != ' ') {
                // Lisame t�hik morsekoodi vahel s�nade jaoks
                if ($i > 0 && $tekst[$i - 1] != ' ') {
                    $morse_kood .= ' ';
                }
                // Lisame t�he morsekoodi
                $morse_kood .= morse_kood($tekst[$i]);
            }
        }

        // Tagastame morsekoodi
        return $morse_kood;
    }

    // Kontrollime, kas vormi kaudu on sisestatud tekst ja teisendame selle morsekoodiks
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Kui sisendtekst on saadaval
        if (!empty($_POST['sisendtekst'])) {
            $sisendtekst = $_POST['sisendtekst'];
            // V�ljastame teisendatud morsekoodi
            echo '<h2>Teisendatud morsekood:</h2>';
            echo '<p>' . tekst_morseks($sisendtekst) . '</p>';
        } else {
            // Kui sisendtekst on t�hi, v�ljastame veateate
            echo '<p>Sisesta tekst, mida soovid teisendada morsekoodiks!</p>';
        }
    }
    ?>

</body>
</html>
