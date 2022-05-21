<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'dbfollowercategory';
$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    echo("err". mysqli_connect_error());
    exit();
}
?>