<?php
$rest2 =[null];
//get connection
$conn=new PDO("mysql:host=localhost;dbname=web", "root");
$moneyy = $_POST["field2"];
$user = $_POST["user"];
$date = $_POST["date"];

if(!$conn){
  die("Connection failed: " . $conn->error);
}
$sql ="UPDATE money_amount SET moneyspent = ?  WHERE username=? AND dateentered=?";
$res2 = $conn->prepare($sql);


$res2->execute(array($moneyy,$user,$date));



header("Location:index.php");
?>
