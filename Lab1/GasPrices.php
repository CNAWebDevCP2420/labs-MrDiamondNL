<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
   
    <title>Gas Prices</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
    <?php
        $GasPrice = 2.57; 
        if ($GasPrice >= 2 && $GasPrice <= 3) {
            echo "<p>Gas prices are between $2.00 and $3.00.</p>"; 
        } else 
        echo "<p>Gas prices are not between $2.00 and $3.00.</p>"; 
    ?>
</body>
</html>