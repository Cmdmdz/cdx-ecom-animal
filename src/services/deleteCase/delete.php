<?php

$caseId = $_POST['case_id'];
$result = "";
$result .= "<dev class='table table-responsive'>
<table class='table table-bordered'>";


$result .= '<tr>
                <td>เลขที่</td>
                <td><input type="text" value=' . $caseId . ' placeholder=' . $caseId . ' disabled name="case_id" id="case_id" class="form-control" ></td>
                </tr>';



echo $result;

