<?php

class Admin
{

    public static function get_list_customers()
    {
        $data = new CRUD_database;
        $data->connect();
        $sql = "SELECT * FROM list_customers";
        $result = $data->executeAll($sql);
        $table_list_customer = "";
        foreach ($result as $key => $value) {
            $code = $value['customer_code'];
            $name = $value['customer_fullname'];
            $birthday = $value['customer_birthday'];
            $address = $value['customer_address'];
            $phone = $value['customer_phone'];
            $email = $value['customer_email'];
            $account = $value['account_name'];
            $register_day = $value['register_day'];
            $status = $value['account_status'];
            $table_list_customer .=
                "
        <tr>
                <td id='td_list_customer'>$code</td>
                <td id='td_list_customer'>$name</td>
                <td id='td_list_customer'>$address</td>
                <td id='td_list_customer'>$birthday</td>
                <td id='td_list_customer'>$phone</td>
                <td id='td_list_customer'>$email</td>
                <td id='td_list_customer'>$account</td>
                <td id='td_list_customer'>$register_day</td>
                <td id='td_list_customer'>$status</td>
                <td id='td_list_customer'>
                <div class='edit_delete'>
                    <a href='index.php?router=admin&control=edit_cus&code=$code&name=$name' id='btn_edit'><i class='far fa-edit'></i></a>
                    <a href='index.php?router=admin&control=delete_cus&code=$code&name=$name' id='btn_delete'><i class='far fa-trash-alt'></i></a>
                </div>
                </td>
        </tr>
        ";
        }
        return $table_list_customer;
    }
}
