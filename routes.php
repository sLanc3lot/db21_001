<?php
$controllers = array('pages'=>['home', 'error'],'customers'=>['index'],'quotation_detail'=>['index']); //list controller and action

function call($controller, $action)
{
    require_once("controllers/".$controller."_controller.php");
    switch($controller)
    {
        case "pages":   $controller = new PagesController();
                        break;
        case "customer": require("models/customer.php");
                        $controller = new customersController();
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