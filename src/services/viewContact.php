<?php
include_once('../config/function.php');

$data = new DB_con();

$firstname = $_POST['firstName'];
$lastname = $_POST['lastName'];
$mobileNumber = $_POST['mobileNumber'];
$detail = $_POST['detail'];
$rank_case_id = $_POST['rank_case_id'];
$contact_id = $data->generateRandomString(10);

$sql = $data->createCase($firstname, $lastname, $mobileNumber, $detail, 0, $rank_case_id, $contact_id);

$result = "";

$result .= "<dev class='table table-responsive'>
<table class='table table-bordered'>";

$result .= '<tr>
                <td>ชื่อ</td>
                <td>' . $firstname . '</td>
                </tr>';
$result .= '<tr>
                <td>นามสกุล</td>
                <td>' . $lastname . '</td>
                </tr>';
$result .= '<tr>
                <td>หมายเลขติดตามการแจ้งซ่อม</td>
                <td>' . $contact_id . '</td>
                </tr>';

echo $result;

?>
