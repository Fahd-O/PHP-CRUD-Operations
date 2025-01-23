<?php
    
    $con= new mysqli("localhost","root","","php_crud_operations");

    if(!$con)
    {
        die(mysqli_error($con));
    }
   
?>