<!DOCTYPE html>
<html>
<head>
    <title>harj4</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>harj4</h1>

       
        <div class="mt-4">
            <h3>Jagamine</h3>
            <form method="get">
                <div class="form-group">
                    <label for="number1">Esimene number:</label>
                    <input type="number" class="form-control" id="number1" name="number1" required>
                </div>
                <div class="form-group">
                    <label for="number2">Teine number:</label>
                    <input type="number" class="form-control" id="number2" name="number2" required>
                </div>
                <button type="submit" class="btn btn-primary" name="divide">Jaga</button>
            </form>

            <?php
            
            if(isset($_GET['divide'])) {
                $number1 = $_GET['number1'];
                $number2 = $_GET['number2'];
                if ($number2 == 0) {
                    echo "<div class='alert alert-danger mt-2' role='alert'>Nulliga jagamine ei ole lubatud!</div>";
                } else {
                    $result = $number1 / $number2;
                    echo "<div class='alert alert-success mt-2' role='alert'>$number1 / $number2 = $result</div>";
                }
            }
            ?>
        </div>

        
        <div class="mt-4">
            <h3>Vanus (if…elseif)</h3>
            <form method="get">
                <div class="form-group">
                    <label for="age1">Vanus 1:</label>
                    <input type="number" class="form-control" id="age1" name="age1">
                </div>
                <div class="form-group">
                    <label for="age2">Vanus 2:</label>
                    <input type="number" class="form-control" id="age2" name="age2">
                </div>
                <button type="submit" class="btn btn-primary" name="compare_ages">Võrdle vanuseid</button>
            </form>

            <?php
        
            if(isset($_GET['compare_ages']) && !empty($_GET['age1']) && !empty($_GET['age2'])) {
                $age1 = $_GET['age1'];
                $age2 = $_GET['age2'];
                if ($age1 > $age2) {
                    echo "<div class='alert alert-success mt-2' role='alert'>Vanus 1 ($age1 aastat) on vanem kui vanus 2 ($age2 aastat).</div>";
                } elseif ($age2 > $age1) {
                    echo "<div class='alert alert-success mt-2' role='alert'>Vanus 2 ($age2 aastat) on vanem kui vanus 1 ($age1 aastat).</div>";
                } else {
                    echo "<div class='alert alert-success mt-2' role='alert'>Mõlemad isikud on ühevanused ($age1 aastat).</div>";
                }
            }
            ?>
        </div>

    
        <div class="mt-4">
            <h3>Ristkülik või ruut</h3>
            <form method="get">
                <div class="form-group">
                    <label for="side1">Külje pikkus 1:</label>
                    <input type="number" class="form-control" id="side1" name="side1" required>
                </div>
                <div class="form-group">
                    <label for="side2">Külje pikkus 2:</label>
                    <input type="number" class="form-control" id="side2" name="side2" required>
                </div>
                <button type="submit" class="btn btn-primary" name="calculate_shape">Arvuta</button>
            </form>

            <?php
         
            if(isset($_GET['calculate_shape']) && !empty($_GET['side1']) && !empty($_GET['side2'])) {
                $side1 = $_GET['side1'];
                $side2 = $_GET['side2'];
                if ($side1 == $side2) {
                    echo "<div class='alert alert-success mt-2' role='alert'>Sisestatud külgedega ($side1 x $side2) on tegemist ruuduga.</div>";
                } else {
                    echo "<div class='alert alert-success mt-2' role='alert'>Sisestatud külgedega ($side1 x $side2) on tegemist ristkülikuga.</div>";
                }
            }
            ?>
        </div>

 
        <div class="mt-4">
            <h3>Juubel</h3>
            <form method="get">
                <div class="form-group">
                    <label for="birth_year">Sünniaasta:</label>
                    <input type="number" class="form-control" id="birth_year" name="birth_year">
                </div>
                <button type="submit" class="btn btn-primary" name="check_jubilee">Kontrolli</button>
            </form>

            <?php
      
            if(isset($_GET['check_jubilee']) && !empty($_GET['birth_year'])) {
                $birth_year = $_GET['birth_year'];
                $current_year = date("Y");
                $age = $current_year - $birth_year;
                if ($age % 5 == 0) {
                    echo "<div class='alert alert-success mt-2' role='alert'>Aasta $birth_year on juubeliaasta ($age aastat).</div>";
                } else {
                    echo "<div class='alert alert-success mt-2' role='alert'>Aasta $birth_year ei ole juubeliaasta ($age aastat).</div>";
                }
            }
            ?>
        </div>

   
        <div class="mt-4">
            <h3>Hinne (switch)</h3>
            <form method="get">
                <div class="form-group">
                    <label for="points">Punktide arv:</label>
                    <input type="number" class="form-control" id="points" name="points">
                </div>
                <button type="submit" class="btn btn-primary" name="check_grade">Kontrolli</button>
            </form>

            <?php
       /*
    Harj4
    Markus Pilv
    2/14/2024
*/
            if(isset($_GET['check_grade']) && !empty($_GET['points'])) {
                $points = $_GET['points'];
                switch (true) {
                    case $points > 10:
                        echo "<div class='alert alert-success mt-2' role='alert'>SUPER!</div>";
                        break;
                    case $points >= 5 && $points <= 9:
                        echo "<div class='alert alert-success mt-2' role='alert'>TEHTUD!</div>";
                        break;
                    case $points < 5:
                        echo "<div class='alert alert-success mt-2' role='alert'>KASIN!</div>";
                        break;
                    default:
                        echo "<div class='alert alert-danger mt-2' role='alert'>SISESTA OMA PUNKTID!</div>";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
