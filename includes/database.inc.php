<?php

$servername = "localhost:8111";
$dbUsername = "root";
$dbPassword = "";
$dbName = "chatTime"

$db = new mysqli($servername, $dbUsername, $dbPassword, $dbName);
if($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

$db->close();