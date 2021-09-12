<?php 
error_reporting(E_ALL);
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = 'password';
$dbName = 'flowers';

$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
if ($db->connect_error) {
    die("Connect failed: ". $mysqli->connect_error);
}

 function getData(){
    $sql = "SELECT * FROM 'flowers'";
   
    $result = $db->query($sql);

    if($result){
        return $result;
    }
}