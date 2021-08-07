<?php
$in_user_name = $_POST["in_user_name"];
$in_user_email = $_POST["in_user_email"];
$in_purchase = $_POST["in_purchase"];

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "fruitchest";

$handler = mysqli_connect($servername,$username,$password,$dbname);

$sql_query = "INSERT INTO purchase (In_user_name, In_user_email, In_purchase)
            VALUES ('$in_user_name','$in_user_email','$in_purchase')";
if (!$handler) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
 }    

 mysqli_query($handler, $sql_query);