<?php
$database_host = '127.0.0.1';
$database_name = 'laravel';
$database_user = 'lara_user';
$database_pass = '123456789';

$conn = new mysqli($database_host, $database_user, $database_pass, $database_name);

// Kiểm tra kết nối
if ($conn->connect_error) {
  die("Kết nối thất bại: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();
?>

