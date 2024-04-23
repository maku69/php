<!DOCTYPE html>
<html>
<head>
    <title>Harj10</title>
</head>
<body>
    <ul>
        <li><a href="index.php?leht=1">Leht 1</a></li>
        <li><a href="index.php?leht=2">Leht 2</a></li>
        <li><a href="index.php?leht=3">Leht 3</a></li>
	<li><a href="index.php?leht=4">Leht 4</a></li>

    </ul>
    <div id="sisu">
        <?php
        if (!empty($_GET['leht'])) {
            $leht = htmlspecialchars($_GET['leht']);
            $lubatud = array('1', '2', '3');
            if (in_array($leht, $lubatud)) {
                include('leht'.$leht.'.php');
            } else {
                echo 'Valitud lehte ei eksisteeri!';
            }
        } else {
            echo 'Vali leht menüüst.';
        }
        ?>
    </div>
</body>
</html>
