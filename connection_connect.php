<?php
$servername = "localhost";
$username = "db21_001";
$password = "db21_001";
$dbname = "db21_001";
$conn = new mysqli($servername,$username,$password);
mysqli_set_charset($conn, "utf8");
if ($conn->connect_error) {
    die("Connection failed:" .$conn->connect_error);
}
if (!$conn->select_db($dbname)){
    die("Connection failed:" .$conn->connect_error);
}
?>