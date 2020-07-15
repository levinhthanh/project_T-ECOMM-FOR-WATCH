<?php
// KHÔNG CÓ LỆNH
if (!isset($_GET['router']) && !isset($_POST['router']) && !isset($_GET['control']) && !isset($_POST['control'])) {
    include('Model/home_model.php');
    include('View/home_view.php');
}
// TỒN TẠI GET-ROUTER
if (isset($_GET['router'])) {
    $router = $_GET['router'];
    switch ($router) {
        case 'admin': {
                include('Controller/Controller_admin.php');
                break;
            }
        case 'employee': {
                break;
            }
        case 'customer': {
                break;
            }
        case 'admin': {
                break;
            }
    }
}
// TỒN TẠI POST-ROUTER
if (isset($_POST['router'])) {
    $router = $_POST['router'];
    switch ($router) {
        case 'admin': {
                break;
            }
        case 'employee': {
                break;
            }
        case 'customer': {
                break;
            }
        case 'admin': {
                break;
            }
    }
}
// VÀO TRANG ĐĂNG NHẬP
if (isset($_GET['control']) && $_GET['control'] === 'login') {
    include('Model/login_model.php');
    include('View/login_view.php');
}
// VÀO TRANG ĐĂNG KÝ
if (isset($_GET['control']) && $_GET['control'] === 'register') {
    include('Model/register_model.php');
    include('View/register_view.php');
}
// YÊU CẦU ĐĂNG KÝ
if (isset($_POST['control']) && $_POST['control'] === 'require_register') {
    include('Model/register_model.php');
    include('View/register_view.php');
}
// YÊU CẦU ĐĂNG NHẬP
if (isset($_POST['control']) && $_POST['control'] === 'require_login') {
    include('Model/login_model.php');
    if ($result_check['status_login'] === 'success') {
        $_SESSION['account'] = $account;
        $_SESSION['password'] = $password;
        if ($result_check['account_of'] === 'admin') {
            include('Model/admin_model.php');
            include('View/admin_view.php');
        }
        if ($result_check['account_of'] === 'employee') {
            include('View/employee_view.php');
        }
        if ($result_check['account_of'] === 'customer') {
            include('Model/home_model.php');
            include('View/home_view.php');
        }
    } else {
        $error_login = $result_check['error_login'];
        include('View/login_view.php');
    }
}
