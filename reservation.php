<?php require('머리부터발끝/header.php')?>



<div class="reservation_area">
    <div class="reservation">
        <h1>예약하기 페이지</h1>
        <?php
            $id = mysqli_real_escape_string($conn, $_GET['id']);
            $sql = "SELECT * FROM user WHERE userid = '$id'";
            $result = mysqli_query($conn, $sql);
            if ($id == 'admin') { ?>
                <!-- 예약하기 관리자 페이지 -->
                <?php require('./reservation/reservation_admin.php')?>
            <?php } elseif ($id == 'guide1' || $id == 'guide2') { ?>
                <!-- 예약하기 해설가 페이지 -->
                <?php require('./reservation/reservation_guide.php')?>
            <?php } else { ?>
                <?php require('./reservation/reservation_user.php')?>
            <?php } ?>
    </div>
</div>
<?php require('머리부터발끝/footer.php')?>