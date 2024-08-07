<?php $conn = mysqli_connect('localhost', 'root', '', 'gyeonggido')?>

<?php
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $member = mysqli_real_escape_string($conn, $_POST['member']);
    $sql = "INSERT INTO reservation_user (username, phone, email, member) VALUES ('$username', '$phone', '$email', '$member')";
    $result = mysqli_query($conn, $sql);
    if ($result){
        echo "        
        <script>
            alert('예약이 완료되었습니다');
            location.href = 'reservation.php?id=$id'
        </script>";
    }
?>