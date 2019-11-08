<?php
session_start();
include("config.php");
$user=$_POST['uname'];
$password=$_POST['pass'];
$sql="SELECT * FROM cuinfo WHERE uname='$user' AND password='$password' ";
$result=mysqli_query($myconn,$sql);
$count=mysqli_num_rows(mysqli_query($myconn,$sql));
if($count===1)
{
	$_SESSION['user']=$user;
	header("location:../view/view.php ? user='.$user.'");
}
else
	{
		echo'pasword or user name wrong <a href="../view/login.php"> Please try again</a>';
	}


?>