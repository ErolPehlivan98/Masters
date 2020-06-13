<?php

//get connection
$conn=new PDO("mysql:host=localhost;dbname=web", "root");
$user = $_POST["user"];
$date = $_POST["date"];

if(!$conn){
  die("Connection failed: " . $conn->error);
}
$sql ="DELETE FROM money_amount WHERE username = '$user' AND dateentered = '$date'";

$conn->query($sql);

header("Location:index.php");
?>
