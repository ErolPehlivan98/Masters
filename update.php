<?php

//get connection
$conn=new PDO("mysql:host=localhost;dbname=web", "root");
$moneyy = $_POST["field2"];
$user = $_POST["user"];
$date = $_POST["date"];

if(!$conn){
  die("Connection failed: " . $conn->error);
}
$sql ="UPDATE money_amount SET moneyspent ='$moneyy'  WHERE username='$user' AND dateentered='$date'";

$conn->query($sql);

header("Location:index.php");
?>
