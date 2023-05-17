<?php

// if(isset($_POST['firstName'])){
//     $firstName = $_POST['firstName'];
//     }
//     if(isset($_POST['lastName'])){
//     $lastName = $_POST['lastName'];
//     }
//     if(isset($_POST['email'])){
//     $email = $_POST['email'];
//     }

$firstName = $_POST['firstName'];
$lastName  = $_POST['lastName'];
$email = $_POST['email'];
$Error =[
    'firstNameError' => '',
    'lastNameError' => '',
    'emailError' => ''
];
if(isset($_POST['submit'])){




    $sql = "INSERT INTO users(firstName, lastName, email)
    VALUES ('$firstName', '$lastName', '$email')";

    if(empty($firstName)){
        $Error['firstNameError'] ='Enter first name';
        // echo 'Enter first name';

    }if(empty($lastName)){
        $Error['lastNameError'] ='Enter last name';
        // echo 'Enter Last name';

    }if(empty($email)){
        $Error['emailError'] = 'Enter email';
        // echo 'Enter Email';
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $Error['emailError'] = 'enter a vaild email';
        // echo 'enter a vaild email';
    }

    if (!array_filter($Error)){
        $firstName =   mysqli_real_escape_string($conn,$_POST['firstName']);
        $lastName =  mysqli_real_escape_string($conn,$_POST['lastName']);
        $email =  mysqli_real_escape_string($conn,$_POST['email']);

        $sql = "INSERT INTO users(firstName, lastName, email)
        VALUES ('$firstName', '$lastName', '$email')";

        if(mysqli_query($conn, $sql)){
        header('Location:' . $_SERVER['PHP_SELF']);
        }else{
        echo 'Error: ' . mysqli_error($conn);
        }


    }

   

}




