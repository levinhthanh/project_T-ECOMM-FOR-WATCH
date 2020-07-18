<?php

if (isset($_GET['control'])) {
    $control = $_GET['control'];
    switch ($control) {
        case 'logout': {
                $hiUser = "";
                $log_in = "block";
                $log_out = "none";
                session_destroy();
                include('Model/home_model.php');
                include('View/home_view.php');
                break;
            }
        case 'new_product_list': {
                include('Model/home_model.php');
                $new_list_group = Customer::get_new_list();
                $slide_show = 'none';
                $new_list = 'none';
                $hot_list = 'none';
                include('View/home_view.php');
            }
        case 'hot_product_list': {
                include('Model/home_model.php');
                $hot_list_group = Customer::get_hot_list();
                $slide_show = 'none';
                $new_list = 'none';
                $hot_list = 'none';
                include('View/home_view.php');
            }
        case 'watch_product': {
                $line = $_GET['product_line'];
                include('Model/home_model.php');
                $line_list_group = Customer::get_line_list($line);
                $slide_show = 'none';
                $new_list = 'none';
                $hot_list = 'none';
                include('View/home_view.php');
            }
    }
}
