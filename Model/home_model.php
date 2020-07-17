<?php
if(!isset($_SESSION['account']) && !isset($_SESSION['password'])){
    $hiUser = "";
    $log_in = "block";
    $log_out = "none";  
}
if(!isset($_SESSION['count_in_box'])){
    $label_empty_display = "block";
    $count_in_box = 0;
    $box_products_show = "";
    $btn_buy_display = "none";
}
if(isset($_SESSION['account']) && isset($_SESSION['password']) && $_SESSION['account'] !== 'admin'){
    $log_in = "none";
    $log_out = "block"; 
    $account = $_SESSION['account'];
    $check_account_code = new CRUD_database;
    $check_account_code->connect();
    $sql = "SELECT account_code FROM accounts WHERE account_name = '$account'";
    $row = $check_account_code->executeOne($sql);
    $account_code = $row['account_code'];
    $check_name = new CRUD_database;
    $check_name->connect();
    $sql = "SELECT customer_fullname FROM customers WHERE account_code = $account_code";
    $row = $check_name->executeOne($sql);
    $customer_name = $row['customer_fullname'];
    $hiUser = "Xin chào, $customer_name";
}
 