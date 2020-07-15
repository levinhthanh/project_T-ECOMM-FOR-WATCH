<?php
// VÀO TRANG ĐĂNG NHẬP
if (isset($_GET['control']) && $_GET['control'] === 'login') {
    $error_login = "";
}
// YÊU CẦU ĐĂNG NHẬP
if (isset($_POST['control']) && $_POST['control'] === 'require_login') {
    $account = $_POST['account'];
    $password = $_POST['password'];
    $result_check = System::check_login($account, $password);
}
