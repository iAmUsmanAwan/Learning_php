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
        <h1>This is my first php website</h1>
        <?php 
            echo "<br>";
            echo " ..... ";
            echo "<br>";
            $variable1 = 12;
            $variable2 = 21;
            echo "<br>";
            echo "the sum of two variables is :";
            echo $variable1 + $variable2;
            echo "<br>";
            var_dump ( $variable1<=$variable2 );
            echo "<br>";

            $newvar = $variable1;
            echo $newvar;
            echo "<br>";

            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo"AND Operator Example";
            echo "<br>";
            $checkvar = (true && true);
            echo var_dump($checkvar);
            echo "<br>";
            $checkvar = (true && false);
            echo var_dump($checkvar);
            echo "<br>";
            $checkvar = (false && true);
            echo var_dump($checkvar);
            echo "<br>";
            $checkvar = (false && false);
            echo var_dump($checkvar);
            
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo"OR Operator Example";
            echo "<br>";
            $checkvar = (true || true);
            echo var_dump($checkvar);
            echo "<br>";
            $checkvar = (true || false);
            echo var_dump($checkvar);
            echo "<br>";
            $checkvar = (false || true);
            echo var_dump($checkvar);
            echo "<br>";
            $checkvar = (false || false);
            echo var_dump($checkvar);
            echo "<br>";

            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo"XOR Operator Example";
            echo "<br>";
            $checkvar = (true xor true);
            echo var_dump($checkvar);
            echo "<br>";
            $checkvar = (true xor false);
            echo var_dump($checkvar);
            echo "<br>";
            $checkvar = (false xor true);
            echo var_dump($checkvar);
            echo "<br>";
            $checkvar = (false xor false);
            echo var_dump($checkvar);
            echo "<br>";
            
            ?>

            <?php
            define ('pi' , 3.14);
            // Data types inn php
            // 1. String
            // 2. Integer
            // 3. Float
            // 4. Boolean
            // 5. Array
            // 6. Object
            
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "Data Types in php <br>";
            $myString = "this string";
            echo var_dump($myString);
            echo "<br>";
            
            $myInteger = 88;
            echo var_dump($myInteger);
            echo "<br>";
            
            $myFloat = 55.5;
            echo var_dump($myFloat);
            echo "<br>";
            
            $myBoolean = true;
            echo var_dump($myBoolean);
            echo "<br>";
            
            $myArray = "this string";
            echo var_dump($myArray);
            echo "<br>";
            
            $myObject = "this string";
            echo var_dump($myObject);
            echo "<br>";
            
            echo var_dump(pi);
            echo "<br>";
            
            ?>
    </div>
</body>
</html>