<?php
$server = "localhost";
$user = "wedotech";
$pass = "QgAMLo03G#wKHBg8U8CT";
$db = "wedotech"; 

$conn = new mysqli($server, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed");
}

?>