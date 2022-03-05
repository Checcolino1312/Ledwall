


<?php 



$dbHost     = "31.11.39.64";
$dbUsername = "Sql1592799";
$dbPassword = "Francesco.2022";
$dbName     = "Sql1592799_2";





// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>
