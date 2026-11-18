<!DOCTYPE html>
<html>
<head>
    <title>My First PHP Website</title>
</head>
<body>

    <h1>Welcome to My Website</h1>
    <h2>PHP Basic Calculation</h2>

    <?php
        $a = 10;
        $b = 5;

        echo "First value ".$a." Second value ".$b;
        echo "<br>";
        echo "<br>addition ";
        echo "Result: " . ($a + $b);
        echo "<br>Subtraction";
        echo " Result: " . ($a - $b);
        echo "<br>multiplication";
        echo " Result: " . ($a * $b);
        echo "<br>division";
        echo " Result: " . ($a / $b);
    ?>

</body>
</html>