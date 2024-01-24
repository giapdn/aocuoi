<?php 
require_once "BaseModel.php";
class KhachHang extends BaseModel{
    public function getAllusername(){
        $sql = "SELECT * FROM `tb_khachhang`";
        return $this-> SqlExecute($sql);
    }
}

?>