<!DOCTYPE html>

<html>
<head>
    <title>harj3</title>
</head>
<body>
    <h2>Sisesta trapetsi parameetrid</h2>
    <form method="post">
        <label>Alus1 (a):</label>
        <input type="number" name="alus1"><br>
        <label>Alus2 (b):</label>
        <input type="number" name="alus2"><br>
        <label>Kõrgus (h):</label>
        <input type="number" name="korgus"><br>
        
        <h2>Sisesta rombi parameeter</h2>
        <label>Külje pikkus (a):</label>
        <input type="number" name="rombi_kulg"><br>
        
        <input type="submit" value="Arvuta">
    </form>

    <?php
    /*
    Harj3
    Markus Pilv
    2/14/2024
*/
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $alus1 = $_POST["alus1"];
        $alus2 = $_POST["alus2"];
        $korgus = $_POST["korgus"];
        $trapetsi_pindala = ($alus1 + $alus2) * $korgus / 2;

        
        $rombi_kulg = $_POST["rombi_kulg"];
        $rombi_umbermoot = 4 * $rombi_kulg;

        
        echo "<h2>Tulemused:</h2>";
        echo "Trapetsi pindala: " . round($trapetsi_pindala, 1) . " ruutühikut<br>";
        echo "Rombi ümbermõõt: " . round($rombi_umbermoot, 1) . " ühikut";
    }
    ?>
</body>
</html>
