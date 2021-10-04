<?php class Department{
    public $id,$name;
    public function_construct($id,$name)
    {
        $this->id=$id;
        $this->name=$name;
    }
    public static function getAll()
    {
        $departmentList =[];
        require("connection_connect.php");
        $sql = "select * from department";
        $result=$conn->query($sql);
        while($my_row = = $result->fetch_assoc())
        {
            $depID=$my_row[depID];
            $depName=$my_row[depName];
            $departmentList[]=new Department($depID,$depName);
        }
        require("connection_close.php");
        return $departmentList;
    }
}
?>