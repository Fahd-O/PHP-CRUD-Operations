<?php
include 'connect.php';

$id = $_GET['updateid'];

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobileNumber = $_POST['mobileNumber'];
    $password = $_POST['pwd'];

    $sql = "UPDATE `user_data` SET `name`='$name', `email`='$email', `mobileNumber`='$mobileNumber', `password`='$password' WHERE id = $id";

    $result = mysqli_query($con,$sql);

    if($result)
    {
        header("location:display.php");
    }
    else
    {
        die(mysqli_error($con));
    }
}
?>




<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

        <title>PHP CRUD Operations</title>
    </head>

    <body>
        <div class="container my-5">

            <form method="post">

                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" required>
                </div>
                
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off" required>
                </div>

                <div class="form-group">
                    <label>Mobile number</label>
                    <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobileNumber" autocomplete="off" required>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Enter your password" name="pwd" autocomplete="off" required>
                </div>

                <button type="submit" class="btn btn-primary" name="submit">Update</button>

            </form>
        </div>

    </body>

</html>