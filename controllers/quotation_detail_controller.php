<?php
class quotation_detailController
{
    public function index(){
        $quotation_detail_list=quotation_detail::getAll();
        require_once('views/quotation_detail/index_quotation_detail.php');
    }
}
?>