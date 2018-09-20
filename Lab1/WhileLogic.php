<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    
    <title>While Logic</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<body>
    <?php
        $Count = 0;
        $Numbers = array();
        while ($Count < 101) {
            $Numbers[] = $Count;
            $Count++;
        }
        foreach($Numbers as $CurNum) {
            echo "<p>$CurNum</p>";
        }
    ?>
</body>
</html>