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
            <?php } elseif ($id == 'guide1') { ?>
2
            <?php } elseif ($id == 'guide2') { ?>
3
            <?php } else { ?>
4
            <?php } ?>
    </div>
</div>
<?php require('머리부터발끝/footer.php')?>