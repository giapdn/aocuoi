<?php 
require_once "BaseModel.php";

class LienHe extends BaseModel{
    public function getLienHe(){
        $sql = "SELECT * FROM tb_lienhe";
        return $this->SqlExecute($sql);
    }
}


?>