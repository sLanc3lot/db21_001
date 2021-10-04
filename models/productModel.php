<?php
class product{
    public $PR_CODE;
    public $PR_NAME;
    public $PR_DETAIL;
    public $CAT_ID;
    public $PR_AMOUNT_MIN;
    public $category;

    public function_construct($PR_CODE,$PR_NAME,$PR_DETAIL,$CAT_ID,$PR_AMOUNT_MIN,$category){
        $this->PR_CODE=$PR_CODE;
        $this->PR_NAME=$PR_NAME;
        $this->PR_DETAIL=$PR_DETAIL;
        $this->CAT_ID=$CAT_ID;
        $this->PR_AMOUNT_MIN=$PR_AMOUNT_MIN;
        $this->category=$category;
    }
}
?>