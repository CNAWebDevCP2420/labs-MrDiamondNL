<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
    <?php
    $Fahrenheit = 0;
        while ($Fahrenheit <=100) {
            $Celsius = (($Fahrenheit - 32) * (5/9));
            $Celsius = round($Celsius, 1);
            echo "Fahrenheit $Fahrenheit is $Celsius Celsius<br />";
            $Fahrenheit++;
        }
    ?>
</body>
</html>