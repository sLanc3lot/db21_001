<?php
class price{
    public $P_ID;
    public $PR_CODE;
    public $P_QUAN_MIN;
    public $P_QUAN_MAX;
    public $P_PRICE;
    public $P_SCREEN;

    public function_construct($P_ID,$PR_CODE,$P_QUAN_MIN,$P_QUAN_MAX,$P_PRICE,$P_SCREEN){
        $this->P_ID=$P_ID;
        $this->PR_CODE=$PR_CODE;
        $this->P_QUAN_MIN=$P_QUAN_MIN;
        $this->P_QUAN_MAX=$P_QUAN_MAX;
        $this->P_PRICE=$P_PRICE;
        $this->P_SCREEN=$P_SCREEN;
    }
}
?>