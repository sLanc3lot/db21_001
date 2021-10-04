<?php
class orders_detail{
    public $OD_ID:
    public $O_ID;
    public $C_ID;
    public $O_AMOUNT;

    public function_construct($OD_ID,$O_ID,$C_ID,$O_AMOUNT){
        $this->OD_ID=$OD_ID;
        $this->O_ID=$O_ID;
        $this->C_ID=$C_ID;
        $this->O_AMOUNT=$O_AMOUNT;
    }
}
?>