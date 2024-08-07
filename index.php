<?php $conn = mysqli_connect('localhost', 'root', '', 'gyeonggido')?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C_module</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- 헤더 영역 -->
    <header>
        <div class="logo">달빛기행축제</div>
        <nav>
            <ul class="main_menu">
                <li><a href="index.html">홈</a></li>
                <li><a href="#">소개</a>
                    <ul class="sub_menu">
                        <li><a href="sub01.html">- 달빛기행축제란</a></li>
                        <li><a href="#">- 지역별 달빛기행축제 안내</a></li>
                        <li><a href="course.html">- 코스소개</a></li>
                    </ul>
                </li>
                <li><a href="#">참여/소식</a>
                    <ul class="sub_menu">
                        <li><a href="#">- 공지사항</a></li>
                        <li><a href="sub02.html">- 문화달력</a></li>
                        <li><a href="#">- 퀴즈 이벤트 참가</a></li>
                    </ul>
                </li>
                <li><a href="#">예약하기</a></li>
                <li><a href="#">마이페이지</a></li>
            </ul>
        </nav>
        <div class="sgin_area">
            <a href="login.php"><button class="login_btn">로그인</button></a>
            <a href="join.php"><button class="join_btn">회원가입</button></a>
        </div>
    </header>
    <!-- 헤더 영역 -->

    <!-- 푸터 영역 -->
    <div class="footer_area">
        <footer>
            <div class="footer_logo">달빛기행축제</div>
            <div class="copy">© Moonlight Travel Festival all rights reserved.</div>
            <div class="sns">
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-x-twitter"></i>
            </div>
        </footer>
    </div>
    <!-- 푸터 영역 -->
</body>
</html>