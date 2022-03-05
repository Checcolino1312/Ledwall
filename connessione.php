


<?php 



$dbHost     = "remotemysql.com";
$dbUsername = "WHjoihI1Cb";
$dbPassword = "5rlzrnfJMq";
$dbName     = "WHjoihI1Cb";





// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>
