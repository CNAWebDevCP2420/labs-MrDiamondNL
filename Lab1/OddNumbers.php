<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    
    <title>Odd Numbers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<body>
    <?php
        $Counter = 0;

        while ($Counter < 100) {
            if ($Counter % 2 != 0) {
                echo "$Counter <br />";
            }

            $Counter++;
        }
    ?>
</body>
</html>