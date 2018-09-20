<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Is Even?</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        $FirstValue = 8.33;
        echo $FirstValue;
        if (is_numeric($FirstValue) && (round($FirstValue) % 2 == 0)) {
            echo " The number is even.";
        } else {
            echo " The number is odd";
        }
        echo "<br /><br />";
        $SecondValue = 7;
        echo $SecondValue;
        if (is_numeric($FirstValue) && (round($SecondValue) % 2 == 0)) {
            echo " The number is even.";
        } else
            echo " The number is odd";
    ?>
</body>
</html>