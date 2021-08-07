<?php 
    

    $serverName = "localhost";
    $userName = "root";
    $password = "amedari4";
    $dbName = "medical";

    $con = mysqli_connect($serverName, $userName, $password, $dbName);
    if (!$con)
    {
        die("Connection failed: " . mysqli_connect_error());
    }


//for user informationa making available for all pages

    $array = $con->query("select * from users where id ='$_SESSION[userId]'");
    $user = $array->fetch_assoc();

	$base_path = "http://localhost/dev.test/medical";
?>
