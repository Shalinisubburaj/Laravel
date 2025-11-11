<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
    <style>
        body{
            background-color: blueviolet;
            color: bisque;
        }
    </style>
</head>
<body>
    <div>
        <h1>String Functions</h1>
       
        <?php
            $x = "Welcome to Laravel class";
            $y = "Shalini";
            echo "strlen()=> used to find the length of the string : ";
            echo strlen($x )."<br>";
            echo "str_word_count()=> used to find the count of the word : ";
            echo str_word_count($x )."<br>";
            echo "strpos()=> used to find the position of the string : ";
            echo strpos($x, "Laravel" )."<br>";
            echo "strtoupper()=> used to convert into uppercase : ";
            echo strtoupper($x )."<br>";
            echo "strtolower()=> used to convert into lowercase : ";
            echo strtolower("HELLO SHALINI" )."<br>";
            echo "str_replace()=> used to replace the string : ";
            echo str_replace("Laravel","PHP Framework ", $x )."<br>";
            echo "strrev()=> used to reverse the string : ";
            echo strrev("HELLO WORLD" )."<br>";
            echo "trim()=> used to remove the white space : ";
            echo trim($x )."<br>";
            echo "explode()=> used to convert string into array : ";
            $z=explode(" ",$x);
            print_r($z )."<br>";
            echo "Sring Conctenation()=> used to add the strings : ";
            echo $x ." " . $y ."<br>";
        ?>
    </div>
</body>
</html>
