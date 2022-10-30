<?php
include_once('../config/function.php');

$existEmail = new DB_con();

$email = $_POST["email"];

$sql = $existEmail->existEmail($email);

if (empty($email)) {
    echo "<span></span>";
} elseif (mysqli_num_rows($sql) > 0) {
    echo "<span style='color: red'>Email already exist.</span>";
    echo "<script>$('#submit').prop('disabled',true);</script>";
} else {

    echo "<span style='color: green'>Email available for register.</span>";
    echo "<script>$('#submit').prop('disabled',false);</script>";
}

?>