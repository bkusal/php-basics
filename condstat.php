<!DOCTYPE html>
<html>
    <body>
        <?php

        #If statement
        $x = 69;

        if($x < 50){
            echo "Condition met";
            echo"<hr/>";
        }
        ?>

   <!--If-Else statement-->
  <?php
   $x = 79;

if($x < 50){
    echo "Condition met";
}else{
    echo "condition not met";
    echo "<hr/>";
}
?>

<!--else if-->
    <?php
    $x= 80;

    if ($x< 50){
        echo "F";
    }else if ($x>= 50 && $x < 60){
        echo "D";
    }else if ($x>=60 && $x<70){
        echo "C";
    }else if ($x>=70 && $x<80){
        echo "B";
    }else if ($x>=80 && $x<90){
        echo "A";
    }else{
        echo "A++";
    }
    echo"<hr/>";
    ?>

    <!--Switch Statement-->
    <?php
    $car = "Volvo";
    
    switch ($car){
        case "Volvo";
        echo "You drive a Volvo";
        break;
        case "Tata";
        echo "You drive a Tata";
        break;
        case "Honda";
        echo "You drive a Honda";
        break;
    }
    ?>

</body>
</html>





   

