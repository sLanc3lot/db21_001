<?php
class category{
    public $CAT_ID;
    public $CAT_NAME;

    public function_construct($CAT_ID,$CAT_NAME){
        $this->CAT_ID=$CAT_ID;
        $this->CAT_NAME=$CAT_NAME;
    }

    public function getAll(){
        $categoryList=[];
        require("connection_connect.php");
        $sql="SELECT * FROM category ";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc()){
            $CAT_ID=$my_row[CAT_ID];
            $CAT_NAME=$my_row[CAT_NAME];
            $categoryList[]=new category($CAT_ID,$CAT_NAME);
        }
        require("connection_close.php");
        return $categoryList;
    }
}
?>