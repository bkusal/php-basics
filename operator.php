<DOCTYPE html>
    <html>
        <body>
            <h2>PHP Arithmetic operators</h2> 
            <?php
            $x = 4;
            $y = 5;

            //addition
            echo$x+$y;
            echo"<hr/>";

            //sub
            echo$y-$x;
            echo"<hr/>";

            //div
            echo$x/$y;
            echo"<hr/>";
            
            //mul
            echo$x*$y;
            echo"<hr/>";
            ?>

            <h2>Assignment operators</h2>
            <!--Used with numeric values to writevalue to a variable-->
            <?php
            //The left operand is assigned the value on the right
            $x= 20;
            echo $x;
            ?>

            <h2>Comparision operators</h2>
            <!--Used to compare two values (number to a string)-->

            <?php
            //Equal 
            $x = 20;
            $y = "20";
            var_dump($x == $y );//true

            //Identical
            $x = 20;
            $y = "20";
            var_dump($x === $y ); //output false

            //Not Equal
            $x = 20;
            $y = "20";
            var_dump($x != $y );// output false (<> is also used)

            ?>

    <h2>Increment and Decrement operators </h2>
    <?php
    // Post-increment
     $x= 50;
     echo $x++;
     echo "<hr/> "
    ?>
    
<?php
     //Pre-increment 
     $x = 50;
     echo ++$x;
     echo "<hr/> "
?>

<?php
     // Pre-decrement 
     $x= 50;
     echo --$x;
     echo "<hr/> "
?>

<?php
     // Post-decrement 
     $x= 50;
     echo $x--;
     echo "<hr/> "
?>
     