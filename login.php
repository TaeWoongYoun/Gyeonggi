<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="join_area">
        <div class="login_modal">
            <h1>로그인</h1>
            <form action="loginProcess.php" method="post">
                <p><input type="text" name="userid"  placeholder="아이디"> </p>
                <p><input type="password" name="userpw" placeholder="비밀번호"></p>
                <p class="login_btn_area">
                    <button type='button' class="join_submit">로그인</button>
                    <button type="reset">취소</button>
                </p>

                <div class="captcha">
                    <img src="1.jpg" alt="">
                    <button type="submit">완료</button>
                </div>
            </form> 
        </div>
    </div>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/index.js"></script>
</body>
</html>