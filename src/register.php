<?php
session_start();
if (isset($_SESSION['token'])) {
    header("location: main.php");

} else {

    include('includes/header.php');
    include('includes/sidebar.php');
    include('includes/topbar.php');
    include_once('config/function.php');

    $data = new DB_con();

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $id_rank = $_POST['rank'];

        $sql = $data->register($name, $email, $password, "TOKEN", $id_rank);

        if ($sql) {
            echo "<script>alert('Registered Successfully !')</script>";
            echo "<script>window.location.href='login.php'</script>";
        } else {
            echo "<script>alert('Something went wrong Please try again!')</script>";
        }
    }

    ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">ลงทะเบียนเข้าสู่ระบบ</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php">แจ้งรายการซ่อมโทรศัพท์</a></li>
                            <li class="breadcrumb-item active">ลงทะเบียนเข้าสู่ระบบ</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <div class="d-flex justify-content-center">

            <div class="register-box">
                <div class="card">
                    <div class="card-body register-card-body">
                        <p class="login-box-msg">สมัครสมาชิค</p>

                        <form method="post">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" required id="name" name="name"
                                       placeholder="ชื่อ - นามสกุล">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <select class="form-control select2" name="rank" style="width: 100%;">
                                    <option selected="selected" value="0">-- กรุณาเลือกตำแหน่ง --</option>

                                    <?php
                                    $post = $data->findAllRank();
                                    foreach ($post as $result) {
                                        ?>
                                        <option value="<?php echo $result['id'] ?>"><?php echo $result['rank'] ?></option>
                                        <?php
                                    }

                                    ?>
                                </select>
                            </div>

                            <div class="input-group mb-3">

                                <input type="email" class="form-control" required id="email" name="email"
                                       placeholder="อีเมล"
                                       onblur="existEmail(this.value)">

                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>

                            </div>
                            <div class="input-group mb-2"><span id="exsitingemail"></span></div>

                            <div class="input-group mb-3">
                                <input type="password" class="form-control" required name="password" id="password"
                                       placeholder="รหัสผ่าน">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" placeholder="ยืนยันรหัสผ่าน">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <div class="icheck-primary">
                                        <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                        <label for="agreeTerms">
                                            ยอมรับข้อตกลง <a href="#">terms</a>
                                        </label>
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-4">
                                    <button type="submit" name="submit" id="submit"
                                            class="btn btn-primary btn-block">
                                        ยืนยัน
                                    </button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>


                        <a href="login.php" class="text-center">ฉันมีบีญชีผู้ใช้แล้ว</a>
                    </div>
                    <!-- /.form-box -->
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>

<?php
include('includes/footer.php');
?>