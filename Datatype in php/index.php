<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Datatypes in php</title>
    <style>

       h1{
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-weight: 200px;
            text-align: center;
            width: 1380px;
            height: 40px;
            padding: 50px;
            border-radius: 5px;
            border-style: inset;
            border-color:  burlywood;
            border-width: 10px;
            background-color: violet;
            color: purple;
        }

        .integer{
            
            font-family: cursive;
            font-weight: 200px;
            text-align: center;
            width: 42%;
            height: 250px;
            padding: 50px;
            border-radius: 5px;
            border-color:  burlywood;
            border-width: 5px;
            background-color: burlywood;
            color: brown;
        }
        .one{
            position:relative;
            left:12px;
        }

         .float{
            
            font-family: cursive;
            font-weight: 200px;
            text-align: center;
            width: 42%;
            height: 250px;
            padding: 50px;
            border-radius: 5px;
            border-color:  burlywood;
            border-width: 5px;
            background-color: burlywood;
            color: brown;
        }
        .two{
            position:relative;
            left:755px;
            bottom: 367px;
        }


        .string{
            
            font-family: cursive;
            font-weight: 200px;
            text-align: center;
            width: 50%;
            height: 100px;
            /* padding: 50px; */
            border-radius: 5px;
            border-color:  burlywood;
            border-width: 5px;
            background-color: burlywood;
            color: brown;
        

        }
        .three{
            position:relative;
            left:400px;
            bottom:350px;
        }



    </style>
</head>
<body>
    <h1> DATATYPE IN PHP </h1>
    

   <div class="one">
    <h2 class="integer"> DATA TYPES <br>
        <?php 
        $name ="INTEGER";
        $X = 10;
        $Y = 5;
        echo "ARITHMETIC FUNCTION OF $name DATATYPE <br>";
        echo "<br> ADDITION RESULT OF $X + $Y =".$X+$Y ;
        echo "<br> SUBTRACTION RESULT OF $X - $Y =".$X-$Y;
        echo "<br> MULTIPLICATION RESULT OF $X * $Y =".$X*$Y;
        echo "<br> DIVISION RESULT OF $X / $Y =".$X/$Y;
        ?>
    </h2>
    </div>

   <div class="two">
    <h2 class="float"> DATA TYPES <br>
        <?php 
        $name1 ="FLOAT";
        $A = 8.2;
        $B = 1.5;
        echo "ARITHMETIC FUNCTION OF $name1 DATATYPE <br>";
        echo "<br> ADDITION RESULT OF $A + $B =".$A+$B;
        echo "<br> SUBTRACTION RESULT OF $A - $B =".$A-$B;
        echo "<br> MULTIPLICATION RESULT OF $A * $B =".$A*$B;
        echo "<br> DIVISION RESULT OF $A / $B =".$A/$B;
        ?>
    </h2>
    </div>
    

    <div class="three">
    <h2 class="string"> DATA TYPES <br>
        <?php 
        $name ="STRING";
        $name1 ="Shalini" ;
        echo " $name DATATYPE <br>";
        echo " Welcome $name1 for the laravel Training class ";
        ?>
    </h2>
    </div>
</body>
</html>