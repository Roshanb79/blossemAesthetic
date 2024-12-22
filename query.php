<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Bloosem Aesthetic - Users Query</title>
</head>
<body>
    <div class="table-container">
        <h1 style="text-align:center;">Users Query</h1>

        <table class="mytable" id="mytable">
            <thead>
                <tr>
                    <th>Sr no</th>
                    <th>Username</th>
                    <th>Phone no</th>
                    <th>Email</th>
                    <th>Query</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $select='SELECT * FROM `user_info`';
                $result=mysqli_query($conn,$select);
                $srno=0;

                while ($rows=mysqli_fetch_assoc($result)) {
                    $srno=$srno+1;

                echo' 
                <tr>
                    <td>'.$srno.'</td>
                    <td>'.$rows['username'].'</td>
                    <td>'.$rows['phone'].'</td>
                    <td>'.$rows['email'].'</td>
                    <td>'.$rows['message'].'</td>
                </tr>';
                }
            ?>
                </tbody>
        </table>
    </div>
</body>
</html>