<?php
$controllers = array('pages'=>['home', 'error'],'customers'=>['index'],'quotation_detail'=>['index']); //list controller and action

function call($controller, $action)
{
    require_once("controllers/".$controller."_controller.php");
    switch($controller)
    {
        case "pages":   $controller = new PagesController();
                        break;
        case "customer": require_once("models/customer.php");
                        $controller = new customersController();
                        break;
        case "quotation_detail": require_once("models/quotation_detail.php");
                        $controller = new quotation_detailController();
                        break;
    }
    $controller->{$action}();
}

if(array_key_exists($controller, $controllers))
{   if(in_array($action, $controllers [$controller]))
    {   call($controller, $action); }
    else
    {   call('pages', 'error');}
}
else
{   call('pages', 'error'); }



?>