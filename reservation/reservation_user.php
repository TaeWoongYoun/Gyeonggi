<div class="reservation_card_area">
    <?php
        $sql = "SELECT * FROM reservation";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)) {
            $date = $row['date'];
            $nowDate = date('Y-m-d');
            $isDisabled = $date <= $nowDate ? 'disabled' : '';
            echo "
            <div class='reservation_card'>
                <h4>코스 이름 : {$row['course']}</h4>
                <p>진행 날짜 : {$row['date']}</p>
                <p>시작 시간 : {$row['time']}</p>
                <p>예약 인원 : 5명</p>
                <button class='reservation_user' onclick='openModal()' {$isDisabled}>예약</button>
            </div>";
        }
    ?>
</div>
<div class="reservation_modal">
    <h2>예약하기</h2>
    <form action="reservationUser.php" method="post">
        <input type="hidden" name="id" value="<?=$_GET['id']?>">
        <input type="text" name="username" id="username" placeholder="이름"> <br> 
        <input type="text" name="phone" id="phone" placeholder="전화번호"> <br>
        <input type="email" name="email" id="email" placeholder="이메일"> <br>
        <input type="number" name="member" id="member" min='1' max='5' placeholder="참가 인원"> <br>
        <div class="modal_btn_area">
            <button type="submit" class="reservation_modal_submit">예약하기</button>
            <button type="reset" onclick='closeModal()'>취소</button>
        </div>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function(){
        document.querySelector('.reservation_modal_submit').addEventListener('click', function(e){
            const username = document.getElementById('username').value;
            const phone = document.getElementById('phone').value;
            const email = document.getElementById('email').value;
            const member = document.getElementById('member').value;

            if (username === '' || phone === '' || email === '' || member === ''){
                alert("모든 데이터를 입력해주세요.");
                e.preventDefault();
                return false;
            }
        })

    })
    function openModal(){
        document.querySelector('.reservation_modal').style.display = 'block';
    }

    function closeModal(){
        document.querySelector('.reservation_modal').style.display = 'none';
    }
</script>