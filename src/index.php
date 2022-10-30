<?php
Session_start();
if (isset($_SESSION['token'])) {
    header("location: main.php");

} else {

    include('includes/header.php');
    include('includes/sidebar.php');
    include('includes/topbar.php');
    ?>

    <?php
    include_once('config/function.php');
//
    $data = new DB_con();
//    $contact_id = $data->generateRandomString(10);
//
//    if (isset($_POST['send'])) {
//
//        $firstname = $_POST['firstname'];
//        $lastname = $_POST['lastname'];
//        $mobileNumber = $_POST['mobileNumber'];
//        $detail = $_POST['detail'];
//        $rank_case_id = $_POST['rank_case_id'];
//
//        $sql = $data->createCase($firstname, $lastname, $mobileNumber, $detail, 0, $rank_case_id, $contact_id);
//


//        if ($sql) {
//            echo "<script>alert('หมายเลขติดตามการแจ้งซ่อม : $contact_id')</script>";
//        } else {
//            echo "<script>alert('Something went wrong Please try again!')</script>";
//        }
//    }
    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">แจ้งรายการซ่อมโทรศัพท์</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">แจ้งรายการซ่อมโทรศัพท์</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <dev class="d-flex justify-content-center">
            <div class="col-sm-8">
                <div class="container-fluid">
                    <!-- general form elements disabled -->
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">กรุณากรองรายละเอียดการแจ้งซ่อม
                            </h3>
                        </div>
                        <!-- /.card-header -->

                        <div class="card-body ">

                                <div class="row justify-content-center">
                                    <div class="col-sm-4">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>ชื่อ</label>
                                            <input type="text" name="firstname" id="firstName" required class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>นามสกุล</label>
                                            <input type="text" name="lastname" id="lastName" required class="form-control">
                                        </div>
                                    </div>

                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-sm-4">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>เบอร์โทรศัพท์</label>
                                            <input type="text" name="mobileNumber" id="mobileNumber" required class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <!-- select -->
                                        <label>ตำแหน่ง</label>
                                        <div class="form-group">
                                            <select class="form-control select2" id="rank_case_id" required name="rank_case_id"
                                                    style="width: 100%;">
                                                <option selected="selected">-- กรุณาเลือกตำแหน่ง --</option>

                                                <?php
                                                $post = $data->findAllRankCase();
                                                foreach ($post as $result) {
                                                    ?>
                                                    <option value="<?php echo $result['id'] ?>"><?php echo $result['rank_case'] ?></option>
                                                    <?php
                                                }

                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label>รายละเอียด</label>
                                            <textarea class="form-control" id="detail_case" name="detail" rows="3"></textarea>
                                        </div>
                                    </div>

                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-sm-8">
                                        <button type="submit" onclick="showModalContactId()" data-toggle="modal"
                                                name="send" class="btn btn-info ">ส่งข้อมูล
                                        </button>
                                        <button type="submit" class="btn btn-default float-right">ยกเลิก</button>
                                    </div>
                                </div>

                        </div>

                        <?
                        include ('modal/case.contact.php');
                        ?>


                        <!-- /.card-body -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
        </dev>

    </div>
    <?php
}
?>

<?php
include('includes/footer.php');
?>