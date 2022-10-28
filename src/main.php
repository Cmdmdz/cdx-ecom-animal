<?php
Session_start();
if (!isset($_SESSION['token']) ) {
        header("location: login.php");

} else {

    include('includes/header.php');
    include('includes/sidebar.php');
    include('includes/topbar.php');
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