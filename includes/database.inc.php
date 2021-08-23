<?php

$servername = "localhost:8111";
$dbUsername = "root";
$dbPassword = "";
$dbName = "chatTime"

$db = new mysqli($servername, $dbUsername, $dbPassword, $dbName);
if($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

$result = array();
$message = isset($_POST['message']) ? $_POST['message'] : null;
$from = isset($_POST['from']) ? $_POST["from"] : null;

if (!empty($messagge) && !empty($from)) {
    $sql = "INSERT INTO `chat` (`message`, `from`) VALUES ('".$message."', '".$from."')";
    $result['send_status'] = $db->query($sql);
}

$db->close();

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

echo json_encode($result);
