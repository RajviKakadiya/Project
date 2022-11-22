<?php

    $host="localhost";
    $username="root";
    $pwd="";
    $db="registration";

    $conn = mysqli_connect($host,$username,$pwd,$db) ;

    if ($conn === false)
    {
        die("Error:could not connect.".mysqli_connect_error());
    }
    
    else
    {
        echo "connection successfully";
    }

	
?>