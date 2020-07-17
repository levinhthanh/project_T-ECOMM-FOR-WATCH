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
                <!-- HIỂN THỊ DANH SÁCH NHÂN VIÊN -->
                <div class="list_employee" style="display: <?= $display_list_employee ?>;">
                    <label id="label_manager_employee">Danh sách nhân viên</label><br>
                    <div class="tools_employee">
                        <a id="a_manager_employee" href="index.php?router=admin">Home</a>
                    </div>
                    <table id="table_list_employee">
                        <tr>
                            <th id="th_list_employee">Mã nhân viên</th>
                            <th id="th_list_employee">Tên nhân viên</th>
                            <th id="th_list_employee">Địa chỉ</th>
                            <th id="th_list_employee">Ngày sinh</th>
                            <th id="th_list_employee">Số điện thoại</th>
                            <th id="th_list_employee">Email</th>
                            <th id="th_list_employee">Chức vụ</th>
                            <th id="th_list_employee">Lương</th>
                            <th id="th_list_employee">Ngày gia nhập</th>
                            <th id="th_list_employee">Tài khoản</th>
                            <th id="th_list_employee">Trạng thái</th>
                            <th id="th_list_employee">Sửa/Xóa</th>
                        </tr>
                        <?= $table_list_employee ?>
                    </table>
                    <!-- Xóa nhân viên -->
                    <div class="delete_employee_cover" style="display:<?= $delete_employee ?>">
                        <label id="lable_delete_employee">Bạn có muốn xóa <?= $name ?> khỏi danh sách?</label>
                        <div class="btn_delete_employee">
                            <form action="index.php" method="post">
                                <input type="hidden" name="router" value="admin">
                                <input type="hidden" name="control" value="require_delete_employee">
                                <input type="hidden" name="code" value="<?= $code ?>">
                                <input id="confirm_delete" type="submit" value="Xác nhận">
                            </form>
                            <form action="index.php" method="get">
                                <input type="hidden" name="router" value="admin">
                                <input type="hidden" name="control" value="show_employee_list">
                                <input id="cancel_delete" type="submit" value="Hủy bỏ">
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Chỉnh sửa nhân viên -->
                <div class="edit_employee" style="display: <?= $display_edit_employee ?>;">
                    <label id="label_manager_employee">Chỉnh sửa nhân viên</label><br>
                    <div class="tools_employee">
                        <a id="a_manager_employee" href="index.php?router=admin">Home</a>|
                        <a id="a_manager_employee" href="index.php?router=admin&control=add_employee">Add</a>
                    </div>
                    <form action="index.php" method="post">
                        <input type="hidden" name="router" value="admin">
                        <input type="hidden" name="control" value="require_update_employee">
                        <input type="hidden" name="code" value=<?= $code ?>>
                        <table id="table_edit_employee">
                            <tr>
                                <th id="th_edit_employee">Mục</th>
                                <th id="th_edit_employee">Thông tin nhân viên</th>
                                <th id="th_edit_employee">Chỉnh sửa</th>
                            </tr>
                            <?= $table_one_employee ?>
                        </table>
                        <label id="status_update_employee"><?= $status_update ?></label>
                        <button id="btn_update_employee">Cập nhật</button>
                    </form>
                </div>
                <!-- THÊM NHÂN VIÊN -->
                <div class="add_employee" style="display: <?= $display_add_employee ?>;">
                    <label id="label_manager_employee">Quản lý nhân viên</label><br>
                    <div class="tools_employee">
                        <a id="a_manager_employee" href="index.php?router=admin">Home</a>
                    </div>
                    <label id="label_add_employee">Thêm nhân viên</label>
                    <form action="index.php" method="post">
                        <input type="hidden" name="router" value="admin">
                        <input type="hidden" name="control" value="require_add_employee">
                        <table>
                            <tr>
                                <td id="td_left_add_employee">Tên</td>
                                <td id="td_right_add_employee">
                                    <input id="input_add_employee" type="text" name="fullname_employee" value="<?= $fullname_employee ?>">
                                    <i id="icon_add_employee" style="color:<?= $fullname_color ?>;" class='<?= $fullname_status ?>'></i>
                                </td>
                            </tr>
                            <tr>
                                <td id="td_left_add_employee">Ngày sinh</td>
                                <td id="td_right_add_employee">
                                    <input id="input_add_employee" style="margin-left: 1.5vw;" type="date" name="birthday_employee" value="<?= $birthday_employee ?>">
                                    <i id="icon_add_employee" style="color:<?= $birthday_color ?>;" class='<?= $birthday_status ?>'></i>
                                </td>
                            </tr>
                            <tr>
                                <td id="td_left_add_employee">Địa chỉ</td>
                                <td id="td_right_add_employee">
                                    <input id="input_add_employee" type="text" name="address_employee" value="<?= $address_employee ?>">
                                    <i id="icon_add_employee" style="color:<?= $address_color ?>;" class='<?= $address_status ?>'></i>
                                </td>
                            </tr>
                            <tr>
                                <td id="td_left_add_employee">Điện thoại</td>
                                <td id="td_right_add_employee">
                                    <input id="input_add_employee" type="text" name="phone_employee" value="<?= $phone_employee ?>">
                                    <i id="icon_add_employee" style="color:<?= $phone_color ?>;" class='<?= $phone_status ?>'></i>
                                </td>
                            </tr>
                            <tr>
                                <td id="td_left_add_employee">Email</td>
                                <td id="td_right_add_employee">
                                    <input id="input_add_employee" type="text" name="email_employee" value="<?= $email_employee ?>">
                                    <i id="icon_add_employee" style="color:<?= $email_color ?>;" class='<?= $email_status ?>'></i>
                                </td>
                            </tr>
                            <tr>
                                <td id="td_left_add_employee">Tài khoản</td>
                                <td id="td_right_add_employee">
                                    <input id="input_add_employee" type="text" name="account_employee" value="<?= $account_employee ?>" placeholder="$.....">
                                    <i id="icon_add_employee" style="color:<?= $account_color ?>;" class='<?= $account_status ?>'></i>
                                </td>
                            </tr>
                            <tr>
                                <td id="td_left_add_employee">Mật khẩu</td>
                                <td id="td_right_add_employee">
                                    <input id="input_add_employee" type="text" name="password_employee" value="<?= $password_employee ?>">
                                    <i id="icon_add_employee" style="color:<?= $password_color ?>;" class='<?= $password_status ?>'></i>
                                </td>
                            </tr>
                            <tr>
                                <td id="td_left_add_employee">Chức vụ</td>
                                <td id="td_right_add_employee">
                                    <select name="possition_employee" id="possition_add_employee">
                                        <option value="Nhân viên kinh doanh">Nhân viên kinh doanh</option>
                                        <option value="Quản lý bán hàng">Quản lý bán hàng</option>
                                        <option value="Nhân viên đóng gói">Nhân viên đóng gói</option>
                                        <option value="Nhân viên IT">Nhân viên IT</option>
                                    </select>
                                    <i id="icon_add_employee" class="far fa-hand-pointer"></i>
                                </td>
                            </tr>
                            <tr>
                                <td id="td_left_add_employee">Lương</td>
                                <td id="td_right_add_employee">
                                    <input id="input_add_employee" type="text" name="salary_employee" value="<?= $salary_employee ?>">
                                    <i id="icon_add_employee" style="color:<?= $salary_color ?>;" class='<?= $salary_status ?>'></i>
                                </td>
                            </tr>
                            <tr>
                                <td id="td_left_add_employee"></td>
                                <td id="td_right_add_employee">
                                    <input id="button_add_employee" type="submit" value="Thêm mới">
                                </td>
                            </tr>
                        </table><br>
                        <label id="lable_confirm" style="display:<?= $lable_confirm ?>;">Bạn đã thêm nhân viên thành công !</label><br>
                    </form>

                </div>
                <!-- HIỂN THỊ DANH SÁCH KHÁCH HÀNG -->
                <div class="list_customer" style="display: <?= $display_list_customer ?>;">
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
                    <div class="delete_customer_cover" style="display:<?= $delete_customer ?>">
                        <label id="lable_delete_customer">Bạn có muốn xóa <?= $name ?> khỏi danh sách?</label>
                        <div class="btn_delete_customer">
                            <form action="index.php" method="post">
                                <input type="hidden" name="router" value="admin">
                                <input type="hidden" name="control" value="require_delete_customer">
                                <input type="hidden" name="code" value="<?= $code ?>">
                                <input id="confirm_delete" type="submit" value="Xác nhận">
                            </form>
                            <form action="index.php" method="get">
                                <input type="hidden" name="router" value="admin">
                                <input type="hidden" name="control" value="show_customer_list">
                                <input id="cancel_delete" type="submit" value="Hủy bỏ">
                            </form>
                        </div>
                    </div>
                    <!-- Khóa/Mở tài khoản KH -->
                    <div class="edit_customer_cover" style="display:<?= $edit_customer ?>">
                        <label id="lable_edit_customer">Bạn có muốn khóa/mở tài khoản <?= $name ?> ?</label>
                        <div class="btn_edit_customer">
                            <form action="index.php" method="post">
                                <input type="hidden" name="router" value="admin">
                                <input type="hidden" name="control" value="require_edit_customer">
                                <input type="hidden" name="code" value="<?= $code ?>">
                                <input id="confirm_edit" type="submit" value="Xác nhận">
                            </form>
                            <form action="index.php" method="get">
                                <input type="hidden" name="router" value="admin">
                                <input type="hidden" name="control" value="show_customer_list">
                                <input id="cancel_edit" type="submit" value="Hủy bỏ">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>


</html>