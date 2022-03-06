


<?php 


$sname = "remotemysql.com";
$uname = "WHjoihI1Cb";
$password = "5rlzrnfJMq";

$db_name = "WHjoihI1Cb";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
	exit();
}

?>
