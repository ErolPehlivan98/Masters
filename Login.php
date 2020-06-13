<?php

session_start();


$username = $_POST["username"];
$password = $_POST["pass"];

$conn=new PDO("mysql:host=localhost;dbname=web", "root");

$result=$conn->query("SELECT * FROM login WHERE username='$username' AND password= '$password' ");
$row=$result->fetch();
if($row==false)
{
	echo '<script language="javascript">
				alert("Incorrect username or password ");
				window.location.href = "login.html";
</script>';

}
else
{
	$res2 =[null];
	$result2=("SELECT  FROM login WHERE username= ? AND password= ? ");

	$res2 = $conn->prepare($result2);


	$res2->execute(array($username, $password));

/*$res2->execute(array($username, $password));*/
	header("Location: index.php");
	$_SESSION["login_key"] = "$username";
}
?>
