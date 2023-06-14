<html>
    <head>
        <title>Sorting php arrays</title>
    </head>
    <body>
        <?php
        //Sort
        $names = array("Kushal", "Hari", "Bishal", "Shyam");
        sort($names);

        $nlen= count($names);
        for($x=0; $x< $nlen; $x++){
            echo $names[$x];
            echo "<br>";
        }
        echo"<hr/>";
        ?>
    </body>