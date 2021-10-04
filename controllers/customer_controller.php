<?php
class customerController{
    public function index(){
        $customer_list = customers::getAll();
        require_once('views/customers/index_customers.php');
    }
}
?>