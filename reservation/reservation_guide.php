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
                <p>현재 인원 : 5명</p>
                <button class='reservation_guide'>해설신청</button>
            </div>";
        }
    ?>
</div>

<script>
    document.querySelector('.reservation_guide').addEventListener('click', function(){
        alert('해설신청이 완료되었습니다.');
    })
</script>