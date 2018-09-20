<!DOCTYPE html> 
<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />    
    <title>Single Family Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">    
</head>
<body>
    <?php
        $SingleFamilyHome = 399500; 
        $SingleFamilyHome_Display = number_format($SingleFamilyHome, 2);
        echo "<p>The current median price of a single family home in Pleasanton, CA is $$SingleFamilyHome_Display.</p>";
    ?>
</body>
</html>