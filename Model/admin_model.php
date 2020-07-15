<?php
// Khai báo
$display_list_customer = 'none';
// if (isset($result_check['account_of']) && $result_check['account_of'] === 'admin') {
//     $display_list_customer = 'none';
// }
// Hiển thị danh sách khách hàng
if (isset($_GET['control']) && $_GET['control'] === 'show_customer_list') {
    $display_list_customer = 'block';
    $table_list_customer = Admin::get_list_customers();
    $code_cus = "";
    $delete_customer = "";
    $btn_delete = "none";
}
