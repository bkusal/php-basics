<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //String
    $x = "Hello world";
    $y = "Hello world";
    echo  $x;
    echo "<br>";
    echo  $y;
    echo "<hr/>";

    //Integer
    $num = 600;
    var_dump($num);  //dump declares the data type
    echo "<hr/>";

    //Float
    $num2 =20.5;
    var_dump($num2);
    echo "<hr/>";

    //Array
    $sports = array("Soccer", "Tennis", "Baseball", "Football");
    var_dump($sports);
    echo "<hr/>";


    //Null 
    $color = "Blue";
    $color = null;
    var_dump ($color);
    echo "<hr/>";

    //Boolean
    $x = true;
    $y = false;
    var_dump($x);
    echo "<br>";
    var_dump($y);

    ?>
</body>
</html>