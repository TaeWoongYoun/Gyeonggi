<?php $conn = mysqli_connect('localhost', 'root', '', 'gyeonggido')?>

<?php
    $course = mysqli_real_escape_string($conn, $_POST['course']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $time = mysqli_real_escape_string($conn, $_POST['time']);
    $sql = "INSERT INTO reservation (course, date, time) VALUES ('$course', '$date', '$time')";
    mysqli_query($conn, $sql);
?>

<script>
    alert("코스등록이 완료되었습니다.");
    location.href = 'reservation.php?id=admin';
</script>