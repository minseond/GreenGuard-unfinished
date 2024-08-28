<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

ob_start();
session_start();

$servername = "localhost";
$username = "root";
$password = "1023";
$dbname = "greenguard_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if (strlen($password) < 4) {
        echo "Password must be at least 4 characters long.";
        exit;
    }

    if ($password !== $confirm_password) {
        echo "Passwords do not match.";
        exit;
    }

    $stmt = $conn->prepare("INSERT INTO users (email, username, password) VALUES (?, ?, ?)");
    if (!$stmt) {
        echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;
        exit;
    }

    $stmt->bind_param("sss", $email, $username, $password);
    $stmt->execute();

    if ($stmt->error) {
        echo "Error inserting data: " . $stmt->error;
        exit;
    } else {
        header("Location: login.html");
        exit();
    }

    $stmt->close();
}
$conn->close();
ob_end_flush();
?>
