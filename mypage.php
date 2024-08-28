<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Page - GreenGuard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/styles.css" rel="stylesheet">
</head>
<style>
    .card {
  height: 100%;
}

.card-body {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.masthead {
  padding-top: 5rem;
  padding-bottom: 5rem;
  background: #6c757d;
  color: white;
}

.masthead-heading {
  font-size: 2.5rem;
  font-weight: 700;
}

.masthead-subheading {
  font-size: 1.5rem;
  font-weight: 300;
}

.date-overlay {
  position: absolute;
  top: 10px;
  right: 10px;
  background: rgba(0, 0, 0, 0.7);
  color: white;
  padding: 5px 10px;
  border-radius: 5px;
}

.progress-circle {
  position: relative;
  font-size: 1.5rem; /* 크기 키우기 */
  font-weight: bold;
  margin-top: 10px; /* 약간의 여백 추가 */
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100px;
  height: 100px;
  border-radius: 50%;
  background: conic-gradient(
      #4caf50 var(--percentage),
      #ddd var(--percentage) 
      );
      display: flex;
  align-items: center;
  justify-content: center;
  font-weight: bold;
  color: #4caf50;
  margin-top: 15px;
  align-self: center; 
}

.progress-circle2 {
  position: relative;
  font-size: 1.5rem; /* 크기 키우기 */
  font-weight: bold;
  margin-top: 10px; /* 약간의 여백 추가 */
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100px;
  height: 100px;
  border-radius: 50%;
  background: conic-gradient(
      #a34a40 var(--percentage),
      #ddd var(--percentage)
    
  
      
  );
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: bold;
  color: #a34a40;
  margin-top: 15px;
  align-self: center;
}


.card-img-top {
  max-height: 300px;
  object-fit: cover;
}

</style>
<body>
    <?php
    session_start();
    include 'dbconnect.php';  // 데이터베이스 연결 파일 포함

    if (!isset($_SESSION['email'])) {
        // 사용자가 로그인하지 않았다면 로그인 페이지로 리다이렉트
        header('Location: login.html');
        exit();
    }

    $email = $_SESSION['email']; // 현재 로그인된 사용자의 이메일
    $query = "SELECT username, image_path, plant_type, disease_name, explanation FROM users WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $userData = $result->fetch_assoc();
    ?>

 <!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">GreenGuard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="mypage.php">My Page</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Masthead -->
    <header class="masthead text-center text-white">
        <div class="masthead-content">
            <div class="container">
                <h1 class="masthead-heading mb-0">Welcome to Your GreenGuard</h1>
                <h2 class="masthead-subheading mb-0">Your Plant's Health Monitor</h2>
            </div>
        </div>
    </header>


    <!-- History Section -->
    <section class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 my-3">
                    <div class="card">
                        <?php if (!empty($userData['image_path'])): ?>
                        <img src="<?= $userData['image_path'] ?>" class="card-img-top" alt="Uploaded Image">
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title"><?= !empty($userData['disease_name']) ? 'Infected!' : 'Healthy' ?></h5>
                            <p class="card-text">
                                <strong>Plant Type:</strong> <?= $userData['plant_type'] ?><br>
                                <strong>Disease Name:</strong> <?= $userData['disease_name'] ?><br>
                                <strong>Explanation:</strong> <?= $userData['explanation'] ?><br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Icons Grid-->
    <section class="features-icons bg-light text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex"><i class="bi-window m-auto text-primary"></i></div>
                        <h3>Plant disease <br> prediction feature</h3>
                        <p class="lead mb-0">사용자는 식물의 사진을 시스템에 <br> 업로드하고, 알고리즘은 이미지<br> 데이터를 분석하여 가능한 질병을 <br> 진단합니다.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex"><i class="bi-layers m-auto text-primary"></i></div>
                        <h3>Plant species identification feature</h3>
                        <p class="lead mb-0">다양한 식물의 특징들 잎의 형태, <br> 색깔, 크기, 꽃의 구조 등을 이용하여 정확한 식별을 수행합니다.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                        <div class="features-icons-icon d-flex"><i class="bi-terminal m-auto text-primary"></i></div>
                        <h3>Plant photo upload <br> and delete feature</h3>
                        <p class="lead mb-0">사용자가 식물의 사진을 웹사이트나 모바일 앱에 업로드하고, 필요에 따라 사진을 손쉽게 삭제할 수 있습니다.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white"></p>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
