<?php

$host = "db01.dbhost.dev";
$user = "user_455my8936";
$password = "p455my8936";
$database = "db_455my8936";
$port = "5051";

$conn = new mysqli($host, $user, $password, $database, $port);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");

?>