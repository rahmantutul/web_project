<?php
include("../controller/config.php");

$name=$_POST['name'];
$phone=$_POST['phone'];
$uname=$_POST['uname'];
$pass=$_POST['pass'];

$sql="INSERT INTO cuinfo(name, phone, uname, password) VALUES('$name','$phone','$uname','$pass')";
$result=mysqli_query($myconn,$sql);
if($result===TRUE)
{
	header("location:../view/view.php");
}
else
{
	echo "registration fail";
	}

?>
