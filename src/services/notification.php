<?php
include_once('../config/function.php');

$data = new DB_con();


$sql = $data->countNoti();

if (mysqli_num_rows($sql) > 0) {
    $count = mysqli_num_rows($sql);
    echo "
    <span class='badge badge-warning navbar-badge'>" . $count . "</span>
";
} else {
    echo "<span class='dropdown-item dropdown-header' id='countNoti'>0</span>";
    echo "";
}
?>


