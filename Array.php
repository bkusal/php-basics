<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Indexed Array
    $colors = array("Blue", "Green", "Yellow");
    echo "My Favorite Colors are:" . $colors[0] .",". $colors[1] . " and " . $colors[2] . "<hr /";

    //Array Length
    echo count($colors). "<hr/>";

    //Loop Through an indexed array
    $arrlength = count($colors);
    
    for($x = 0; $x < $arrlength; $x++){
        echo $colors[$x]. "<br />";
    }

    echo "<hr/>";

    //Associative arrays
    $tscore = array("John"=>"60", "Bill"=>" 80", "Dan"=>"75");
    echo "Bill scored" . $tscore['Bill'] . "/ 100";
    echo "<hr/>";

    //Loop through an associative array
    foreach($tscore as $x => $score){
        echo "Key=" . $x . ", score=" . $score;
        echo "<br>";
    }
    echo "<hr/>";
    ?>

<?php
    //Multidimensional Array
    $grades = array
(
        array("John",50,60),
        array("Bob",40,20),
        array("John",45,45),
        array("John",55,26),
);

    echo $grades[0][0].": Test 1: ".$grades[0][1].", Test 2: ".$grades[0][2].".<br>";
    echo $grades[1][0].": Test 1: ".$grades[1][1].", Test 2: ".$grades[1][2].".<br>";
    echo $grades[2][0].": Test 1: ".$grades[2][1].", Test 2: ".$grades[2][2].".<br>";
    echo $grades[3][0].": Test 1: ".$grades[3][1].", Test 2: ".$grades[3][2].".<br>";
    ?>
</body>
</html>