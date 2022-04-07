<?php
$servername="localhost";
$username="root";
$password="";
$dbname="web_db";

//Create the connection
$conn= new mysqli($servername, $username, $password, $dbname);

//check the connection
if($conn->connect_error){
    die("Failed to Connect the database: ".$conn->connect_error);
}
?>