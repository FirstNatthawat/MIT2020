<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db20_006";
$conn = new mysqli($servername,$username,$password);

if($conn->connect_error){
    die("Connection failed:" .$conn->connect_error);
}
if(!$conn->select_db($dbname)){
    die("connection failed".$conn->connect_error);
}
