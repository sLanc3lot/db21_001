<?php
class employee{
    public $EMP_CODE;
    public $EMP_NAME;
    public $EMP_TITLE;
    public $EMP_USERNAME;
    public $EMP_PASSWORD;

    public function_construct($EMP_CODE,$EMP_NAME,$EMP_TITLE,$EMP_USERNAME,$EMP_PASSWORD){
        $this->EMP_CODE=$EMP_CODE;
        $this->EMP_NAME=$EMP_NAME;
        $this->EMP_TITLE=$EMP_TITLE;
        $this->$EMP_USERNAME=$EMP_USERNAME;
        $this->$EMP_PASSWORD=$EMP_PASSWORD;
    }

    public static function getAll(){
        $customersList=[];
        require("connection_connect.php");
        $sql = "SELECT * FROM employee";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $EMP_CODE=$my_row[EMP_CODE];
            $EMP_NAME=$my_row[EMP_NAME];
            $EMP_TITLE=$my_row[EMP_TITLE];
            $EMP_USERNAME=$my_row[EMP_USERNAME];
            $EMP_PASSWORD=$my_row[EMP_PASSWORD];
            $employeeList[]=new employee($EMP_CODE,$EMP_NAME,$EMP_TITLE,$EMP_USERNAME,$EMP_PASSWORD);
        }
        require("connection_close.php");
        return $customersList;
    }
}
?>