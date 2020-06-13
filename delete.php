<?php

//get connection
$res2 = [null];
$conn=new PDO("mysql:host=localhost;dbname=web", "root");
$user = $_POST["user"];
$date = $_POST["date"];

if(!$conn){
  die("Connection failed: " . $conn->error);
}
$sql ="DELETE FROM money_amount WHERE username = ? AND dateentered = ?";
$res2 = $conn->prepare($sql);


$res2->execute(array($user, $date));



header("Location:index.php");
?>
