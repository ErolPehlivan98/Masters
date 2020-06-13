<?php

session_start();
$res2 =[null];

$username = $_POST["username"];
$password = $_POST["pass"];

$conn=new PDO("mysql:host=localhost;dbname=web", "root");


$result=$conn->query("SELECT * FROM login WHERE username=? AND password= ? ");
$res2 = $conn->prepare($result);

if($res2==false)
{
	echo "Incorrect username/password!";

}
else
{

$res2->execute(array($username, $password));
	header("Location: index.php");
	$_SESSION["login_key"] = "$username";
}
?>
