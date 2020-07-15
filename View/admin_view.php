<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="View/css/fontawesome/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="View/css/admin.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>

    <div class="container_full">
        <div class="container_left">
            <div class="title">
                <i id="icon_watch" class="far fa-clock"></i>
                <label id="name_page">T-eComm for Watch</label>
            </div>
            <br>
            <div class="welcome">
                <label id="welcome_admin">Welcome</label><br>
                <label id="name_admin">ADMIN - Lê Vĩnh Thành</label>
            </div>
            <div class="general">
                <label id="general_lable">GENERAL</label>
                <br>
                <div class="dropdown_home">
                    <div class="dropdown">
                        <i class="fas fa-home"></i>
                        <label id="lable_home">Home</label>
                        <i class="fas fa-angle-down"></i>
                        <div class="dropdown-content">
                            <a id="a_select" href="index.php?router=admin&control=show_employee_list">Danh sách nhân viên</a>
                            <a id="a_select" href="index.php?router=admin&control=show_product_list">Danh sách sản phẩm</a>
                            <a id="a_select" href="index.php?router=admin&control=show_customer_list">Danh sách khách hàng</a>
                        </div>
                    </div>
                </div>
                <br>
                <div class="dropdown_manager">
                    <div class="dropdown">
                        <i class="fas fa-edit"></i>
                        <label id="lable_manager">Manager</label>
                        <i class="fas fa-angle-down"></i>
                        <div class="dropdown-content">
                            <label id="lable_select">Quản lý nhân viên</label><br>
                            <a id="a_select" href="index.php?router=admin&control=add_employee">Thêm nhân viên</a>
                            <a id="a_select" href="index.php?router=admin&control=show_employee_list">Chỉnh sửa nhân viên</a>
                            <label id="lable_select">Quản lý sản phẩm</label><br>
                            <a id="a_select" href="index.php?router=admin&control=add_product">Thêm sản phẩm</a>
                            <a id="a_select" href="index.php?router=admin&control=show_product_list">Chỉnh sửa sản phẩm</a>
                            <label id="lable_select">Quản lý khách hàng</label><br>
                            <a id="a_select" href="index.php?router=admin&control=show_customer_list">Chỉnh sửa tài khoản</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container_right">
            <div class="header">
                <i id="icon_bars" class="fas fa-bars"></i>
                <div class="log_out">
                    <a href="index.php?router=admin&control=logout">
                        <i id="logout" class="fas fa-sign-out-alt"></i>
                    </a>
                    <a href="index.php?router=admin&control=logout" id="label_logout">Logout</a>
                </div>
            </div>
            <!-- *
            *
            * -->
            <!------------------------- NỘI DUNG TRANG ADMIN --------------------------- -------------------------- -->
            <!-- *
            *
            * -->
            <div class="show_content">
                <!-- HIỂN THỊ DANH SÁCH KHÁCH HÀNG -->
                <div class="list_product" style="display: <?= $display_list_customer ?>;">
                    <label id="label_manager_customer">Danh sách khách hàng</label><br>
                    <div class="tools_customer">
                        <a id="a_manager_customer" href="index.php?router=admin">Home</a>
                    </div>
                    <table id="table_list_customer">
                        <tr>
                            <th id="th_list_customer">Mã khách hàng</th>
                            <th id="th_list_customer">Tên khách hàng</th>
                            <th id="th_list_customer">Địa chỉ</th>
                            <th id="th_list_customer">Ngày sinh</th>
                            <th id="th_list_customer">Số điện thoại</th>
                            <th id="th_list_customer">Email</th>
                            <th id="th_list_customer">Account</th>
                            <th id="th_list_customer">Ngày đăng ký</th>
                            <th id="th_list_customer">Trạng thái</th>
                            <th id="th_list_customer">Sửa/Xóa</th>
                        </tr>
                        <?= $table_list_customer ?>
                    </table>
                    <!-- Xóa tài khoản KH -->
                    <label id="lable_delete_customer"><?= $delete_customer ?></label>
                    <div class="btn_delete">
                        <form action="index.php" method="post">
                            <input type="hidden" name="router" value="admin">
                            <input type="hidden" name="control" value="require_delete_customer">
                            <input type="hidden" name="code" value="<?= $code_cus ?>">
                            <input id="confirm_delete" type="submit" value="Xác nhận" style="display: <?= $btn_delete ?>;">
                        </form>
                        <form action="index.php" method="get">
                            <input type="hidden" name="router" value="admin">
                            <input type="hidden" name="control" value="show_customer_list">
                            <input id="cancel_delete" type="submit" value="Hủy bỏ" style="display: <?= $btn_delete ?>;">
                        </form>
                    </div>

                    <!-- Khóa/Mở tài khoản KH -->
                    <!-- <label id="lable_edit_customer"><?= $edit_customer ?></label>
                    <div class="btn_delete">
                        <form action="index.php" method="post">
                            <input type="hidden" name="router" value="admin">
                            <input type="hidden" name="control" value="require_edit_customer">
                            <input type="hidden" name="code" value="<?= $code_cus ?>">
                            <input id="confirm_delete" type="submit" value="Xác nhận" style="display: <?= $btn_edit ?>;">
                        </form>
                        <form action="index.php" method="get">
                            <input type="hidden" name="router" value="admin">
                            <input type="hidden" name="control" value="show_customer_list">
                            <input id="cancel_delete" type="submit" value="Hủy bỏ" style="display: <?= $btn_edit ?>;">
                        </form>
                    </div> -->
                </div>
            </div>
        </div>
</body>


</html>