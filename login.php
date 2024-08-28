<?php
session_start();  // 세션 시작

$servername = "localhost";
$username = "root";
$password = "1023";
$dbname = "greenguard_db";

// 데이터베이스 연결
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// POST 데이터 처리
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // 사용자 정보 검색
    $sql = "SELECT password FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die('MySQL prepare error: ' . $conn->error);
    }
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        if ($password === $user['password']) {
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email; // 세션에 이메일 저장
            header("Location: index.php"); // 메인 페이지로 리다이렉트
            exit();
        } else {
            echo "Invalid password";
        }
    } else {
        echo "Email not found";
    }
    $stmt->close();
}

$conn->close();
?>
