<?php
    class quotation_detail{
        public $QUD_ID;
        public $QI_ID:
        public $C_ID;
        public $QUD_AMOUNT;
        public $QUD_PRINT;

        public function_construct($QUD_ID,$QI_ID,$C_ID,$QUD_AMOUNT,$QUD_PRINT)
        {
            $this->QUD_ID=$QUD_ID;
            $this->QI_ID=$QI_ID;
            $this->C_ID=$C_ID;
            $this->QUD_AMOUNT=$QUD_AMOUNT;
            $this->QUD_PRINT=$QUD_PRINT;
        }
        
        public static function getAll(){
            $quotation_detailList=[];
            require("connection_connect.php");
            $sql="SELECT * FROM quotation_detail";
            $result=$conn->query($sql);
            while($my_row=$result->fetch_assoc()){
                $QUD_ID=$my_row[QUD_ID];
                $QI_ID=$my_row[QI_ID];
                $C_ID=$my_row[C_ID];
                $QUD_AMOUNT=$my_row[QUD_AMOUNT];
                $QUD_PRINT=$my_row[QUD_PRINT];
                $quotation_detailList=new quotation_detail($QUD_ID,$QI_ID,$C_ID,$QUD_AMOUNT,$QUD_PRINT);
            }
            require("connection_close.php");
            return $quotation_detailList;
        }
        
    }
?>