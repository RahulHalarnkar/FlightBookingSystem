<?php

    require_once("connection.php");

    // if(isset($_POST['submit']))
    // {
    //     if(empty($_POST['first-name']) ||empty($_POST['last-name']) ||empty($_POST['email']) ||empty($_POST['phone-number']) || empty($_POST['password'])|| empty($_POST['confirm-password']))
    //     {
    //         echo ' Please Fill in the Blanks ';
    //     }
    //     else
    //     {
            $firstname = $_POST['first-name'];
            $lastname = $_POST['last-name'];
            $email = $_POST['email'];
            $phoneno = $_POST['phone-number'];
            $username = $_POST['username'];
            $password = $_POST['password'];

            $query = " insert into user (user_fname	,user_lname,user_email,user_ph_no,username,user_pwd) values('$firstname','$lastname','$email','$phoneno','$username','$password')";
            $result = mysqli_query($con,$query);
            if(!$result) {
                echo "error: ".mysqli_error();
                return;
            }

            if($result)
            {
                $psqry="INSERT INTO 'login' ( 'username','password'.'user_id')
                VALUES ('$email', '$password', LAST_INSERT_ID());
                $psrun=mysqli_query($con,$psqry);
            }
            else
            {
                echo '  Please Check Your Query ';
            }
?>
