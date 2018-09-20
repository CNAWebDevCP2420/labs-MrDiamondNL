<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
   
    <title>Conditional Script</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        $IntVariable = 75;
        if ($IntVariable > 100) {
            $Result = '$IntVariable is greater than 100';
        } else {
            $Result = '$IntVariable is less than or equal to 100';
        }
        
        echo "<p>$Result</p>"; 
    ?>
</body>
</html>