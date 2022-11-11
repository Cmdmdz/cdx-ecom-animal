<?php
include_once('../../config/function.php');

$findCase = new DB_con();

$id = $_POST["case_id"];

$sql = $findCase->findCaseById($id);
$result = "";
$case_repairman = "";
$result .= "<dev class='table table-responsive'>
<table class='table table-bordered'>";

while ($row = mysqli_fetch_array($sql)) {

    if ($row['email'] == "admin@gmail.com") {
        $case_repairman = "อยู่ระหว่างการตรวจสอบ";
    }else{
        $case_repairman = $row['name'];
    }

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
    $result .= '<tr>
                <td>ช่างที่ดูแล</td>
                <td>'.$case_repairman.'</td>
                </tr>';
}

echo $result;

?>
