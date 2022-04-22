<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_practice</title>
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
        <h1>This is my third php website</h1>
        <?php
        echo"<br>";


        // simple functions
        function print5(){
        echo "FIVE";
        }
        print5();
        echo"<br>";
        echo"<br>";
        
        // function which takes parameters 
        function printNumber($number){
            echo"your number is: ";
            echo $number;
        }
        printNumber(88);
        echo"<br>";
        printNumber(77);
        echo"<br>";
        echo"<br>";

        $string = "this is my string";
        echo $string;
        echo "<br>";
        $lenn = strlen($string);
        echo $lenn;
        echo "<br>";
        echo "the lenght of the string is " . $lenn ;
        echo "<br>";
        echo "the number of words in the string are " . str_word_count($string) . " thank you";
        echo "<br>";
        echo "the reverse of the string is '" . strrev($string) . "' thank you";
        echo "<br>";
        echo "the position of 'my' in the string is " . strpos($string, "my") . " thank you";
        echo "<br>";
        echo "the replace word is " . str_replace("my", "your" , $string) . " thank you";
        echo "<br>";
        echo "the replace word is " . str_replace($string , "my", "your") . " thank you";
        

        ?>
    </div> 
    
</body>
</html>