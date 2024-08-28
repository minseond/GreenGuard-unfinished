<?php
$host = 'localhost'; // 또는 다른 DB 서버 호스트
$dbname = 'greenguard_db';
$username = 'root';
$password = '1023';

// 데이터베이스 연결
$conn = new mysqli($host, $username, $password, $dbname);

// 연결 오류 확인
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>