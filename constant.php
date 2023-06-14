<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
        //Case-Sensitive
        define("Welcome","Hello my name is K b");
        echo Welcome;
        echo "<hr/>";

        //case-insensetive
        define("welcome2","Hello my name is K b",true);
        echo  welcome2;
        echo "<hr/>";


        // constants are Global
        define("Car","Volvo");

        function myCar(){
            echo Car;
        }
        myCar();
        ?>


    </p>
</body>
</html>