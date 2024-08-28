<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Landing Page - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
    <?php
    session_start();  // 세션 시작
    $loggedin = isset($_SESSION['loggedin']) && $_SESSION['loggedin'];  // 로그인 상태 확인
    ?>
        <!-- Navigation-->
<nav class="navbar navbar-light bg-light static-top">
    <div class="container">
        <a class="navbar-brand" href="#!">GreenGaurd</a>
        <div>  
        <?php if ($loggedin): ?>      
                    <a class="btn btn-primary" href="logout.php">Log Out</a>
                    <a class="btn btn-secondary" href="mypage.php">My Page</a>
                <?php else: ?>
                    <a class="btn btn-primary" href="login.html">Log In</a>
                <?php endif; ?>
        </div>
    </div>
</nav>

        <!-- Masthead-->
        <header class="masthead">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="text-center text-white">
                            <!-- Page heading-->
                            <h1 class="mb-5">Take pictures of your plants!</h1>
                            <!-- Signup form-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- * * SB Forms Contact Form * *-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- This form is pre-integrated with SB Forms.-->
                            <!-- To make this form functional, sign up at-->
                            <!-- https://startbootstrap.com/solution/contact-forms-->
                            <!-- to get an API token!-->
                            <form class="form-subscribe" id="contactForm" action="upload.php" method="post" enctype="multipart/form-data">
                            <!-- Picture upload input-->
                                <!-- Picture upload input-->
                            <div class="row">
                                <div class="col">
                                <input class="form-control form-control-lg" id="pictureUpload" name="pictureUpload" type="file" accept="image/*" data-sb-validations="required" />
                                <div class="invalid-feedback text-white" data-sb-feedback="pictureUpload:required">A picture is required.</div>
                            </div>
                            <div class="col-auto">
                                 <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Upload Picture</button>
                            </div>
                        </div>
                    </form>
                 </div>
            </div>
        </div>
    </div>
                            </form>
                            
                                <!-- Submit success message-->
                                <!-- This is what your users will see when the form has successfully submitted--> 
                                <div class="d-none" id="submitSuccessMessage"> 
                                    <div class="text-center mb-3">
                                        <div class="fw-bolder">Picture upload successful!</div>
                                        <p>Thank you for submitting your picture.</p>
                                    </div>
                                </div>
                                <!-- Submit error message-->
                                <div class="d-none" id="submitErrorMessage">
                                    <div class="text-center text-danger mb-3">Error uploading picture!</div>
                                </div>
                            </form>
                            
                                <div class="d-none" id="submitSuccessMessage">
                                    <div class="text-center mb-3">
                                        <div class="fw-bolder">Form submission successful!</div>
                                        <p>To activate this form, sign up at</p>
                                        <a class="text-white" href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                    </div>
                                </div>
                                <!-- Submit error message-->
                                <!---->
                                <!-- This is what your users will see when there is-->
                                <!-- an error submitting the form-->
                                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
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
        <!-- Image Showcases-->
        <section class="showcase">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/img/bg-showcase-1.jpg')"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>Plant disease prediction feature</h2>
                        <p class="lead mb-0">When a user uploads a photo, it is possible to determine whether the plant is infected with a disease based on the photo entered.</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 text-white showcase-img" style="background-image: url('assets/img/bg-showcase-2.jpg')"></div>
                    <div class="col-lg-6 my-auto showcase-text">
                        <h2>Plant species identification feature</h2>
                        <p class="lead mb-0">In addition to whether the plant is infected, you can know the species of the uploaded plant and its characteristics.</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/img/bg-showcase-3.jpg')"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>Plant photo upload and delete feature</h2>
                        <p class="lead mb-0">Predict whether your plants are infected through free and easy image upload and deletion!</p>
                    </div>
                </div>
            </div>
        </section>
       
        <!-- Call to Action-->
        <section class="call-to-action text-white text-center" id="signup">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <h2 class="mb-4">Ready to get started?</h2>
                        <!-- Signup form-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form class="form-subscribe" id="contactFormFooter" data-sb-form-api-token="API_TOKEN">
                            <!-- Email address input-->
                            <div class="row">
                                <div class="col">
                                    <input class="form-control form-control-lg" id="emailAddressBelow" type="email" placeholder="Email Address" data-sb-validations="required,email" />
                                    <div class="invalid-feedback text-white" data-sb-feedback="emailAddressBelow:required">Email Address is required.</div>
                                    <div class="invalid-feedback text-white" data-sb-feedback="emailAddressBelow:email">Email Address Email is not valid.</div>
                                </div>
                                <div class="col-auto"><button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button></div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    <p>To activate this form, sign up at</p>
                                    <a class="text-white" href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><a href="#!">About</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Contact</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Terms of Use</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Privacy Policy</a></li>
                        </ul>
                        <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2023. All Rights Reserved.</p>
                    </div>
                    <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item me-4">
                                <a href="#!"><i class="bi-facebook fs-3"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!"><i class="bi-instagram fs-3"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- Popup handling script -->
        <script>
    function openPopup() {
        var width = 600;
        var height = 400;
        var left = (screen.width / 2) - (width / 2);
        var top = (screen.height / 2) - (height / 2);
        var popup = window.open('', 'mypopup', 'width=' + width + ', height=' + height + ', left=' + left + ', top=' + top);
        if (popup) {
            popup.document.write('<div class="col-lg-6 my-3">');
            popup.document.write('<div class="card">');
                
           // popup.document.write('<div class="date-overlay">2024/05/05</div>'); // 날짜 추가
            popup.document.write('<div style="display: flex; justify-content: center;">');
            popup.document.write('<img src="assets/img/Fig1.png" class="card-img-top" alt="Infected Apple Leaf" style="max-height: 700px; object-fit: cover;">');
            popup.document.write('</div>');
            popup.document.write('<div class="card-body">');
            popup.document.write('<h4 class="card-title" style="font-size: 30px;">Infected!</h5>');
            popup.document.write('<p class="card-text">');
           
            popup.document.write('<strong>Plant Type:</strong> 체리<br>');
            popup.document.write('<strong>disease_name:</strong> 흰가루병<br>');
            popup.document.write('<strong>explanation:</strong> 첫 번째 관개 시작 후 7~10일에 종종 발생하는 초기 증상은 취약한 어린 잎(새로 펼쳐진 잎과 연한 녹색 확장 잎)에 가볍고 대략 원형의 가루처럼 보이는 (생략)...<br>');
            popup.document.write('<strong>solution:</strong> 절단 가장자리를 소독한 다음 식물의 병든 부분을 잘라내어 즉시 폐기합니다. 동시에, 과일 나무에 남아 있는 잎을 보호하기 위해 살균제를 바르십시오. 계절 전 (생략)...<br>');
            
        
            popup.document.write('</h5> <div class="progress-circle2" style="--percentage: 83.5%; color: red;">Probability: 83.5%</div> </h4>');


            popup.document.title = "GreenGuard";

            
        } else {
            alert('팝업이 차단되었습니다. 팝업 차단을 해제해주세요.');
        }
    }
</script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script>
        document.getElementById('pictureUpload').addEventListener('change', function() {
            var file = this.files[0];
            if (file) {
                document.getElementById('submitButton').disabled = false;
            } else {
                document.getElementById('submitButton').disabled = true;
            }
        });
    </script>
    </body>
</html>