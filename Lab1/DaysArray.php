<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        $DaysArray = array("Sunday ", "Monday ", "Tuesday ", "Wednbesday ", "Thursday ", "Friday ", "Saturday ");
        echo "The days of the week are ";
        foreach($DaysArray as $day) {
            echo $day;
        }

        echo "<br /><br />";
        $DaysArray = array(" Dimanche", " Lundi", " Mardi", " Mercredi", " Jeudi", " Vendredi", " Samedi");

        echo "The french days of the week are ";
        foreach($DaysArray as $day) {
            echo $day;
        }
    ?>
</body>
</html>