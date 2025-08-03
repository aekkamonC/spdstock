<?php
$host = "sql301.infinityfree.com";
$user = "if0_39620839";
$pass = "S4rDgEnpEeZh3";
$dbname = "if0_39620839_spdstock";
$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->set_charset("utf8");
?>