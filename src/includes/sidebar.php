<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
<!--    <a href="index3.html" class="brand-link">-->
<!--        <img src="assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"-->
<!--             style="opacity: .8">-->
<!--        <span class="brand-text font-weight-light">AdminLTE 3</span>-->
<!--    </a>-->

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
<!--                <img src="assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">-->
            </div>
            <div class="info">
                <!-- <a href="#" class="d-block">ระบบแจ้งซ่อมโทรศัพท์</a> -->
            </div>
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->

                <!--                session don't login-->
                <?
                if (!isset($_SESSION['token'])) {
                    ?>
                 
                    <li class="nav-item">
                        <a href="../login.php" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                เข้าสู่ระบบ
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../register.php" class="nav-link">
                            <i class="nav-icon fas fa-plus"></i>
                            <p>
                                ลงทะเบียนผู้ใช้
                                <span class="right badge badge-danger">New</span>
                            </p>
                        </a>
                    </li>
                    <?
                }
                ?>

                <!--                session already login-->
                <?
                if (isset($_SESSION['token'])) {
                    ?>
                    <li class="nav-item">
                        <a href="../main.php" class="nav-link">
                            <i class="nav-icon fas fa-list-alt"></i>
                            <p>
                                รายการแจ้งซ่อม
                            </p>
                        </a>
                    </li>

                    <?
                    if ($_SESSION['id_rank'] == 1 || $_SESSION['id_rank'] == 3) {

                        ?>
                        <li class="nav-item">
                            <a href="../repairman.php" class="nav-link">
                                <i class="nav-icon fas fa-list"></i>
                                <p>
                                    รายชื่อพนักงาน
                                </p>
                            </a>
                        </li>

                        <?
                    }
                    ?>
                    <li class="nav-item">
                        <a href="../history.php" class="nav-link">
                            <i class="nav-icon fas fa-history"></i>
                            <p>
                                ประวัติการแจ้งซ่อม
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="../logout.php" class="nav-link">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>
                                ออกจากระบบ
                            </p>
                        </a>
                    </li>
                    <?
                }
                ?>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>