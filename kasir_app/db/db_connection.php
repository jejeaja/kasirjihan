<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_cashier";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("connection falied: " . $conn->connect_error);
}
//echo "connection succes";
?>