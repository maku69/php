<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjutused 1-14 ja Iseseisvad 1-4</title>
</head>
<body>
    <h1>Harjutused 1-14</h1>
    <ul>
        <?php
        // Loop through numbers 1 to 14 to generate links
        for ($i = 1; $i <= 14; $i++) {
            if ($i == 10) {
                $link = "https://liivakast.hkhk.edu.ee/~mpilv/php/Harj10/index.php";
            } elseif ($i == 12) {
                $link = "https://liivakast.hkhk.edu.ee/~mpilv/php/Harj12/harj12.php";
            } elseif ($i == 13) {
                $link = "https://liivakast.hkhk.edu.ee/~mpilv/php/Harj13/harj13.php";
            } elseif ($i == 14) {
                $link = "https://liivakast.hkhk.edu.ee/~mpilv/php/Harj13/harj14.php";
            } else {
                $link = "https://liivakast.hkhk.edu.ee/~mpilv/php/harj{$i}.php";
            }
            echo "<li><a href='{$link}'>Harjutus {$i}</a></li>";
        }
        ?>
    </ul>

    <h1>Iseseisvad Harjutused 1-4</h1>
    <ul>
        <?php
        // Loop through numbers 1 to 4 to generate links for independent exercises
        for ($i = 1; $i <= 4; $i++) {
            $link = "https://liivakast.hkhk.edu.ee/~mpilv/php/iseseisvad/{$i}.php";
            echo "<li><a href='{$link}'>Iseseisev {$i}</a></li>";
        }
        ?>
    </ul>
</body>
</html>
