<?php

$server="localhost";
$username="root";
$password="";
$database="blossemaesthetic";

$conn=mysqli_connect($server,$username,$password,$database);

// if (!$conn) {
//     die("Connection failed". mysqli_connect_error());
// }
// else {
//     echo "Connection Succesful";
// }

if (isset($_POST['submitQuery'])) {
    $name=validate_input($_POST['name']);
    $phone=validate_input($_POST['phone']);
    $email=validate_input($_POST['email']);
    $msg=validate_input($_POST['message']);


    $insert="INSERT INTO `user_info` (`username`, `phone`, `email`, `message`) VALUES 
    ('$name', '$phone', '$email', '$msg')";
    $sql=mysqli_query($conn,$insert);

    if ($sql) {
        // echo "Your query submited succefully";
        header("location:index.php");
    }
    else{
        echo "Not submited".mysqli_error($conn);
    }
}

function validate_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  } 
?>