<?php
$user_name = $_POST["user_name"];
$user_email = $_POST["user_email"];
$user_question = $_POST["user_question"];

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "fruitchest";

$handler = mysqli_connect($servername,$username,$password,$dbname);

$sql_query = "INSERT INTO faq (User_name, User_email, User_question)
            VALUES ('$user_name','$user_email','$user_question')";
if (!$handler) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
 }    

 mysqli_query($handler, $sql_query);








?>