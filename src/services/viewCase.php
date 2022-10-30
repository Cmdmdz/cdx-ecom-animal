<?php
include_once('../config/function.php');

$findCase = new DB_con();

$id = $_POST["case_id"];

$sql = $findCase->findCaseById($id);
$result = "";

$result .= "<dev class='table table-responsive'>
<table class='table table-bordered'>";

while ($row = mysqli_fetch_array($sql)) {
    $result .= '<tr>
                <td>ชื่อ</td>
                <td>'.$row['firstName'].'</td>
                </tr>';
    $result .= '<tr>
                <td>นามสกุล</td>
                <td>'.$row['lastName'].'</td>
                </tr>';
    $result .= '<tr>
                <td>รายละเอียด</td>
                <td>'.$row['detail_case'].'</td>
                </tr>';
}

echo $result;

?>
