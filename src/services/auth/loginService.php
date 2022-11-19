<?php
session_start();
include_once('../../config/function.php');

$data = new DB_con();
$email = $_POST['email'];
$password = $_POST['password'];

$result = $data->login($email, $password);
$num = mysqli_fetch_array($result);


if ($num > 0) {
    $_SESSION['token'] = $num['token'];
    $_SESSION['id_rank'] = $num['id_rank'];
} else {
    echo "<script>alert('อีเมลหรือรหัสผู้ใช้งานไม่ถูกต้อง กรุณาตรวจสอบใหม่อีกครั้งค่ะ')</script>";
}

?>