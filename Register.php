<?php

$res = [null];
$username = $_POST["username"];
$password = $_POST["pass"];

$conn=new PDO("mysql:host=localhost;dbname=web", "root");

 $sql2 = "SELECT COUNT(*) FROM login where username = '$username'";
if ($res =$conn->query($sql2))
{
  if ($res->fetchColumn() > 0){
    echo '<script language="javascript">
          alert("Username already in use ");
          window.location.href = "register.html";
  </script>';
}

else{


$sql ="INSERT INTO login (username,password) VALUES ('$username','$password')";

$conn->query($sql);

header("Location:index.php");
$_SESSION["login_key"] = "$username";
}
}

 ?>
