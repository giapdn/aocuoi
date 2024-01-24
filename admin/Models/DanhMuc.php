<?php 
require_once "BaseModel.php";
class DanhMuc extends BaseModel{
    public function getDanhMuc(){
        $sql = "SELECT * FROM tb_danhmuc";
        return $this->SqlExecute($sql);
    }
}
?>