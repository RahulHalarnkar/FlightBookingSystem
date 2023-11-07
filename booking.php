<?php

    require_once("connection.php");
     if(isset($_POST['submit']))
     {
            $firstname = $_POST['first-name'];
            $lastname = $_POST['last-name'];
            $age = $_POST['age'];
            $passportnumber = $_POST['passnum'];
            $dob = $_POST['dob'];
            $gender = $_POST['check'];

            $query = " insert into passenger (pfname,plname,p_age,p_dob,psprt_num,p_gender) values('$firstname','$lastname','$age','$dob','$passportnumber','$gender')";
            $result = mysqli_query($con,$query);
            if(!$result) {
                echo "error: ".mysqli_error();
                return;
            }

            if($result)
            {
                header("location:main.html");
            }
            else
            {
                echo '  Please Check Your Query ';
            }
        }


?>