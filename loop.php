<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
</head>
<body>
    <?php
    //While Loop
    $x= 1;
    while($x<10){
        echo "The number is: $x <br>";
        $x++;
    }
    echo "<hr/>";

    //Do-while loop
     $x= 8;
     do{
         echo "The number is: $x <br>";
         $x++;
     } while ($x<=5);


     //For loop
     for ( $x=0; $x<=10; $x++ ){
        echo "$x <br>";
     }
     echo "<hr/>";

     //For Each loop
     $car = array("volvo", "i10", "honda", "ford");
     foreach ($car as $value){
        echo "$value <br>";
     }
    ?>
</body>
</html>