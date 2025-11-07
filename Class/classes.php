<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class</title>
    <style>
        body{
             background-color:lightpink;
        }

        h1{
            text-align: center;
            width: fit-content;
            height: fit-content;
            border-radius: 10px;
            border-color: chartreuse;
            border-style: outset;
            border-width: 5px;
            position:relative;
            left: 680px;
            background-color: darkcyan;
            color:beige;


        }
          .box{
             /* text-align: center;  */
            width: 350px;
            height: 380px;
            border-radius: 10px;
            border-color: blue;
            border-style: outset;
            border-width: 50px;
            background-color: white;
         
            
        }
        div{
            display: flex;
            flex-direction: row;
            justify-content: center;
            flex-wrap: wrap;
        }
        .head{
            text-align: center;
            text-decoration:underline;
            color: blue;
        }
        .head1{
            position:relative;
            bottom:10px;
        }
        img{
            position:absolute;
            left:210px;
            bottom:150px;
        }
    </style>

</head>
<body>
        <h1>SWIVEL</h1>
        <div>
       <div class="box">
          <h3 class="head"> EMPLOYEE ID </h3> 
        <h3 class="head1">
            <img src="emp_id_image.avif" width="100px" height="150px">
        <?php
        class EmployeeDetails
        {
            public $employee_id = "SWIV001";
            public $employee_name = "Shalini";
            public $employee_age = "22";
            public $employee_gender = "Female";
            public $employee_email = "shalini@gmail.com";
            public $employee_phone = "1234567890";
            public $employee_address = "Dno:1, MOOKANDAPALLI";
            public $employee_city = "Hosur";
            public $employee_state = "Tamil Nadu";
            public $employee_postcode = "123456";
            public $employee_country = "India";
        }

        $employee = new EmployeeDetails();

        echo "Id : " . $employee->employee_id . "<br>";
        echo "Name: " . $employee->employee_name . "<br>";
        echo "Age: " . $employee->employee_age . "<br>";
        echo "Gender: " . $employee->employee_gender . "<br>";
        echo "Email: " . $employee->employee_email . "<br>";
        echo "Phone: " . $employee->employee_phone . "<br>";
        echo "Address: " . $employee->employee_address . "<br>";
        echo "City: " . $employee->employee_city . "<br>";
        echo "State: " . $employee->employee_state . "<br>";
        echo "Postcode: " . $employee->employee_postcode . "<br>";
        echo "Country: " . $employee->employee_country . "<br>";
        ?>
        </h3>
        </div>
    </div>
    
</body>
</html>
