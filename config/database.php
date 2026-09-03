<?php
$host = "mysql";
$username = "inventory_user";
$password = "inventory_pass";
$database = "inventory_system";

$conn = mysqli_connect( $host, $username, $password, $database );

if(!$conn){
    die("Database Connection Failed: "
    . mysqli_connect_error());
}

?>