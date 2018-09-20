<!DOCTYPE html>
<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Interest Array</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        /*$InterestRate1 = .0725;
        $InterestRate2 = .0750; 
        $InterestRate3 = .0775; 
        $InterestRate4 = .0800; 
        $InterestRate5 = .0825; 
        $InterestRate6 = .0850; 
        $InterestRate7 = .0875; */
        
        $RateArray = array('.0725', '.0750', '.0775', '.0800', '.0825', '.0850', '.0875');

        foreach ($RateArray as $value) {
            echo $value;
        }
    ?>
</body>
</html>