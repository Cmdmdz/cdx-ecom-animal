<?php
include_once('../../config/function.php');

$update = new DB_con();

$name = $_POST["name"];
$email = $_POST["email"];
$id = $_POST['repairmanId'];
$sql = $update->updateRepairman($id,$name, $email);

?>