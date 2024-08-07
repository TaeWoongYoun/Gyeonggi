<?php require('머리부터발끝/header.php')?>



<div class="reservation_area">
    <div class="reservation">
        <h1>예약하기 페이지</h1>
        <?php
            $id = mysqli_real_escape_string($conn, $_GET['id']);
            $sql = "SELECT * FROM user WHERE userid = '$id'";
            $result = mysqli_query($conn, $sql);
            if ($id == 'admin') { ?>
                <form action="reservationProcess.php" method="post" class="reservationForm">
                    <div>
                        <p>코스 선택 : </p>
                        <select name="course" id="course">
                            <option value="" disabled selected>--코스 선택--</option>
                            <option value="창덕궁 달빛기행">창덕궁 달빛기행</option>
                            <option value="경복궁 달빛기행">경복궁 달빛기행</option>
                            <option value="신라 달빛기행">신라 달빛기행</option>
                        </select>
                    </div>
                    <div>
                        <p>날짜 선택 : </p>
                        <input type="date" name="date" id="date">
                    </div>
                    <div>
                        <p>시간 선택 :</p>
                        <select name="time" id="time">
                            <option value="" selected disabled>--시간 선택--</option>
                            <option value="0시">0시</option>
                            <option value="1시">1시</option>
                            <option value="2시">2시</option>
                            <option value="3시">3시</option>
                            <option value="4시">4시</option>
                            <option value="5시">5시</option>
                            <option value="6시">6시</option>
                            <option value="7시">7시</option>
                            <option value="8시">8시</option>
                            <option value="9시">9시</option>
                            <option value="10시">10시</option>
                            <option value="11시">11시</option>
                            <option value="12시">12시</option>
                            <option value="13시">13시</option>
                            <option value="14시">14시</option>
                            <option value="15시">15시</option>
                            <option value="16시">16시</option>
                            <option value="17시">17시</option>
                            <option value="18시">18시</option>
                            <option value="19시">19시</option>
                            <option value="20시">20시</option>
                            <option value="21시">21시</option>
                            <option value="22시">22시</option>
                            <option value="23시">23시</option>
                        </select>
                    </div>
                </form>
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