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
        //Word Count
        echo str_word_count("Hello world!");
        echo "<hr/";

        // Rverse words
        echo strrev("Hello world!"); //output !dlrow plleH
        echo"<hr/>";

        //Search for text inside a string
        echo strpos("Hello world", "world");
        echo"<hr/>";

        //Replace text inside a string
        echo str_replace("world", "John", "Hello world");//output Hello John
        echo "<hr/>";
        ?>
    </p>
</body>
</html>