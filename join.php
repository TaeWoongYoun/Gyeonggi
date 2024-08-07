<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="join_area">
        <div class="join_modal">
            <h1>회원가입</h1>
            <form action="joinProcess.php" method="post">
                <p><input type="text" name="userid" id="userid" placeholder="아이디"> <button type="button">중복확인</button></p>
                <p><input type="text" name="name" id="name" placeholder="이름"></p>
                <p><input type="text" name="userpw" id="userpw" placeholder="비밀번호"></p>
                <p>
                    <button type="submit">회원가입</button>
                    <a href="index.php"><button type="reset">취소</button></a>
                </p>
            </form> 
        </div>
    </div>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/index.js"></script>
</body>
</html>