<?php 
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = 'password';
$dbName = 'flowers';

$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName)or die("Connect failed: %s\n". $conn -> error);

 function getData(){
    $sql = "SELECT * FROM 'flowers'";

    $result = mysqli_query($this->con, $sql);

    if(mysqli_num_rows($result) > 0){
        return $result;
    }
    }