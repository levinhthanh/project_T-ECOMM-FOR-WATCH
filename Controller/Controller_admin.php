<?php

if (isset($_GET['control'])) {
    $control = $_GET['control'];
    switch ($control) {
        case 'show_customer_list': {
                include('Model/admin_model.php');
                include('View/admin_view.php');
                break;
            }
    }
}

if (!isset($_GET['control']) && !isset($_POST['control'])) {
    include('Model/admin_model.php');
    include('View/admin_view.php');
}
