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
    <button type="submit" class="course_submit">코스등록</button>
</form>

<script>
    document.addEventListener('DOMContentLoaded', function(){
        document.querySelector('.course_submit').addEventListener('click', function(e){
            const course = document.querySelector('#course').value;
            const date = document.querySelector('#date').value;
            const time = document.querySelector('#time').value;

            if (course === '' || date === '' || time === '') {
                alert("데이터를 모두 입력해주세요.")
                e.preventDefault();
                return false
            }
        })
    })
</script>
<div class="reservation_card_area">
    <?php
    $sql = "SELECT * FROM reservation";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $startTime = intval($row['time']);
        $exTime = ($startTime - 1) ."시 ~ ". ($startTime + 1)."시";
        echo "
        <div class='reservation_card'>
            <h4>코스 이름 : {$row['course']}</h4>
            <p>진행 날짜 : {$row['date']}</p>
            <p>시작 시간 : {$row['time']}</p>
            <p>예상 진행 시간 : $exTime</p>
            <p>현재 인원 : 5명</p>
            <p>해설가 : guide1</p>
        </div>";
    }
?>
</div>