<?php
session_start();
include 'dbconnect.php'; // 데이터베이스 연결 설정 포함

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["pictureUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// 업로드한 이미지 파일 post로 받음
if(isset($_POST["submit"])) {  
    $check = getimagesize($_FILES["pictureUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// 파일을 서버에 업로드
if ($uploadOk == 1) {
    if (move_uploaded_file($_FILES["pictureUpload"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename($_FILES["pictureUpload"]["name"])). " has been uploaded.";
        
        // 이미지 분석 수행 (분석 기능)
        $analysisResult = analyzeImage($target_file);

        // 데이터베이스에 파일 경로와 분석 결과 저장
        $email = $_SESSION['email']; // 세션에서 이메일을 가져옵니다. -> 해당하는 이메일로 로그인한 사용자의 db에 값이 저장, 마이페이지에 값이 저장
        $sql = "UPDATE users SET image_path = ?, plant_type = ?, disease_name = ?, explanation = ?, solution = ?, image_url = ? WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssss", 
            $target_file, 
            $analysisResult['plant_type'], 
            $analysisResult['disease_name'], 
            $analysisResult['explanation'], 
            $analysisResult['solution'], 
            $analysisResult['image_url'],
            $email
        );
        
        if ($stmt->execute()) {
            echo "File path and analysis saved in database. Rows affected: " . $stmt->affected_rows;
        } else {
            echo "Error updating record: " . $stmt->error;
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
} else {
    echo "File upload not valid.";
}

function analyzeImage($filePath) {
    // 여기에 이미지 분석 로직 구현 


    return [  // 예시값
        'plant_type' => '체리',
        'disease_name' => '흰가루병',
        'explanation' => '첫 번째 관개 시작 후 7~10일에 종종 발생하는 초기 증상...',
        'solution' => '절단 가장자리를 소독한 다음 식물의 병든 부분을 잘라내어 즉시 폐기합니다.',
        'image_url' => 'http://treefruit.wsu.edu/wp-content/uploads/2017/05/Fig1.png'
    ];
}
?> 