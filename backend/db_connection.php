<?php

// DB setting information
$db_host = "localhost";
$db_username = "root";
$db_password = "devadm!n123";
$db_name = 'sudoku';

try {
    $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_username, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    echo "DB Connection FAILED: " . $e->getMessage();
    exit;
}
