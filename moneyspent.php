<?php
$res2 = [null];
//get connection
$conn=new PDO("mysql:host=localhost;dbname=web", "root");
$money = $_POST["field2"];
$user = $_POST["user"];
$date = $_POST["date"];

if(!$conn){
  die("Connection failed: " . $conn->error);
}
$sql ="INSERT INTO money_amount (username,moneyspent,dateentered) VALUES (?,?,?)";
$res2 = $conn->prepare($sql);


$res2->execute(array($user, $money,$date));

header("Location:index.php");
?>
