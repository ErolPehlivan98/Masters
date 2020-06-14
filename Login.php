<?php
$row2=[null];
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

	$result2=("SELECT  FROM login WHERE username= ? AND password= ? ");

	$res2 = $conn->prepare($result2);


	$res2->execute(array($username, $password));
}
	/*$result3=$conn->query("SELECT user_type FROM login WHERE username='$username' AND password='$password'");
		$row2=$result3->fetch();


		if ($row2 == "admin") {*/
			header("Location: index.php");
	/*	}
		else {
			header("Location: admin.php");
		}*/






	$_SESSION["login_key"] = "$username";

?>
