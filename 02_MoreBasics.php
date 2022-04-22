<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_Tutorial</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container{
        max-width: 80%;
        background-color: rgb(228,195,195);
        margin: auto;
        padding: 23px;
    }
</style>
<body>
    <div class="container">
        <h1>This is my second php website</h1>
        <p>Your party status is here:</p>
        <?php
        echo"***";
        echo"<br>";

        // if else in php
        $age = 40;
        if($age>18){
            echo"You can go to the party";
        }
        else if($age==10){
            echo"you are a very little child and are only 10 year old";
        }
        else{
            echo"you are a child and can not go to the party";
        }
        echo"<br>";
        echo"<br>";
        
        // arrays in php
        $languages = array("Python" , "C++" , "PHP" , "Node.js" , "React.js");
        echo $languages[4];
        echo"<br>";
        echo count($languages);
        echo"<br>";
        echo"<br>";
        
        // loops in php
        $a = 0;
        while ($a <= 10) {
            echo"The value of 'a' from 'while loop' is: ";
            echo $a;
            echo"<br>";
            $a++ ;
        }
        echo"<br>";
        
        // iterating arrays in php using while loop
        $a = 0;
        while ($a < count($languages)) {
            echo"The value of language is: ";
            echo $languages[$a];
            echo"<br>";
            $a++ ;
        }
        echo"<br>";
        
        // do while loop
        $a = 12;
        do{
        echo"The value of 'a' from 'do while loop' is: ";
        echo $a;
        echo"<br>";
        $a++ ;} while ($a < 10) ;
        echo"<br>";

        // for loop 
        for ($a=0; $a < 10 ; $a++) { 
            echo"<br> The value of 'a' from 'for loop' is: ";
            echo $a;
        }
        echo "<br>";
        echo "<br>";

        // for each
        foreach ($languages as $value) {
            echo "The value of array from 'for each loop' is: ";
            echo $value;
            echo "<br>";
        }

        ?>
    </div>
</body>
</html>
