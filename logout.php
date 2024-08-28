<?php
session_start(); // 세션 시작
session_destroy(); // 모든 세션 변수 제거
header("Location: index.php"); // 로그인 페이지로 리다이렉션
exit();
?>
