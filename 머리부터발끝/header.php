<?php $conn = mysqli_connect('localhost', 'root', '', 'gyeonggido')?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C_module</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php $id = mysqli_real_escape_string($conn, $_GET['id'])?>
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
                <li><a href="reservation.php?id=<?=$id?>">예약하기</a></li>
                <li><a href="#">마이페이지</a></li>
            </ul>
        </nav>
        <?php
        if (isset($_GET['id'])) {
            $id = mysqli_real_escape_string($conn, $_GET['id']);
            $sql = "SELECT * FROM user WHERE userid = '$id'";
            $result = mysqli_query($conn, $sql);
            if ($row = mysqli_fetch_array($result)) {
                echo "
                <div class='sgin_area'>
                    <button class='login_btn'>{$row['name']}</button>
                    <a href='index.php'><button class='join_btn'>로그아웃</button></a>
                </div>";    
            }
        } else {
            echo "
            <div class='sgin_area'>
                <a href='login.php'><button class='login_btn'>로그인</button></a>
                <a href='join.php'><button class='join_btn'>회원가입</button></a>
            </div>";
        }
        ?>
    </header>
    <!-- 헤더 영역 -->