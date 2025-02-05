<?php
    include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>PHP CRUD Operations</title>
</head>

<body>

    <h1 style="text-align: center; padding-top: 1rem;">PHP CRUD Operations</h1>

    <div class="container">
        <button class="btn btn-primary my-5">
            <a href="user.php" target="_blank" rel="noopener noreferrer" class="text-light">Add User</a>
        </button>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">S/N</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile Number</th>
                    <th scope="col">Password</th>           
                    <th scope="col">TimeStamp</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>

            <tbody>

                <?php
                    $sql = "SELECT * FROM `user_data`";
                    $result = mysqli_query($con, $sql);

                    if($result)
                    {
                        while($row = mysqli_fetch_assoc($result)){
                            $id = $row['id'];
                            echo "<tr>
                                <th scope='row'>". $id ."</th>
                                <td>". $row['name'] ."</td>
                                <td>". $row['email'] ."</td>
                                <td>". $row['mobileNumber'] ."</td>
                                <td>". $row['password'] ."</td>
                                <td>". $row['TimeStamp'] ."</td>
                                <td>
                                    <button class='btn btn-primary'><a href='update.php?updateid=".$id."' target='_blank' class='text-light'>Update</a></button>
                                    <button class='btn btn-danger'><a href='delete.php?deleteid=".$id."' class='text-light'>Delete</a></button>
                                </td>
                            </tr>";
                        }
                    }
                ?>
                
            </tbody>
        </table>
    </div>

</body>

</html>