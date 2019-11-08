<?php
include("../controller/config.php");
$tbl_cuinfo="CREATE TABLE IF NOT EXISTS	cuinfo(
cuid INT(11) NOT NULL auto_increment,
PRIMARY KEY(cuid),
name VARCHAR(50) NOT NULL,
phone VARCHAR(13) NOT NULL,
uname  VARCHAR(13) NOT NULL,
password  VARCHAR(18) NOT NULL
)";
$cuinfo=mysqli_query($myconn,$tbl_cuinfo);

if($cuinfo===TRUE)
{
	echo "Cuinfo tabel created ):";
}
else
{
		echo "Cuinfo tabel not created (:";

}

?>