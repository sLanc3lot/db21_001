<?php
    class customers{
        public $ID;
        public $code;
        public $name;
        public $address;
        public $tel;

        public function_construct($ID,$code,$name,$address,$tel){
            $this->ID=$ID;
            $this->code=$code;
            $this->name=$name;
            $this->address=$address;
            $this->tel=$tel;
        }

        
        public static function getAll(){
            $customersList=[];
            require("connection_connect.php");
            $sql = "select * from customers";
            $result=$conn->query($sql);
            while($my_row=$result->fetch_assoc())
            {
                $ID=$my_row[ID];
                $code=$my_row[code];
                $name=$my_row[name];
                $address=$my_row[address];
                $tel=$my_row[tel];
                $customersList[]=new customers($ID,$code,$name,$address,$tel);
            }
            require("connection_close.php");
            return $customersList;
        }
    }
?>