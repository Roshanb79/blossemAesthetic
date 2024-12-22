<?php
include 'connect.php';

if (isset($_POST['Submit'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];

    $select="SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
    $sql=mysqli_query($conn,$select);

    if (mysqli_num_rows($sql)>0) {
        header('location:query.php');
    }
    else{
        echo 'Please Enter valid username and password';
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blossem Aesthetic - admin login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container">
        <div class="box">
            <h2>LOGIN</h2>
            <p>Please enter your user and password!</p>
            <form action="admin_login.php" method="post">
                <input type="text" placeholder="Username" name="username">
                <input type="password" name="password" placeholder="Password" name="password">
                <button type="submit" placeholder="Login" id="box" name="Submit" class="btn">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>