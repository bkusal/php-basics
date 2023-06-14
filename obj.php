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
        // Create a class
        Class Person{
            //Create Properties-(Variables tied to objects )
            public $firstname;
            public $lastname;
            public $age;

            // Assigning values to the Property Variables
            public function _construct($firstname, $lastname, $age){
                $this ->firstname = $firstname;
                $this ->lastname = $lastname;
                $this ->age = $age;
            }
        
            // Create a Method (Function tied to an object)
            public function hello(){
                return "I am " . $this->firstname . " " . $this ->lastname . ", my age is:" . $this->age . "";
            }
        }

        // creating a new person named " John Smith" who is 25 years old
        $person1 = new Person("Kushal", "Budhathoi", 25);
        $person2 = new Person("Ram", "Khadka", 24);

        //Print out what the hello method returns
        echo $person1->hello();
        echo "<br>";
        echo $person2->hello();
        ?>
    </p>
</body>
</html>