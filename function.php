<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //BASIC FUNCTION
    function displaytxt(){
        echo "My First Function";
    }
    displaytxt();
    echo"<hr />";
    

    //FUNCTION ARGUMENTS
    function myCar($car , $color){
        echo "$car, $color<br>";
    }
    myCar("i10", "green");
    myCar("i20", "blue");
    myCar("Hero", "red");
    ?>
</body>
</html>