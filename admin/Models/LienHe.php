<?php 
require_once "BaseModel.php";

class LienHe extends BaseModel{
    public function getLienHe(){
        $sql = "SELECT * FROM tb_lienhe ";
        return $this->SqlExecute($sql);
    }
    public function addLienHe($ten_khach_hang,$email,$dien_thoai,$noi_dung){
        $sql = "INSERT INTO tb_lienhe(ten_khach_hang,email,dien_thoai,noi_dung) 
                VALUES ('$ten_khach_hang','$email','$dien_thoai','$noi_dung')";

        return $this->SqlExecute($sql);
    }
    public function editTrangThai($id_lienhe){
        if($_POST['daLienHe']){
            $sql = "UPDATE tb_lienhe SET trang_thai='Đã Liên Hệ' WHERE id_lienhe=".$id_lienhe;
        }
        
        return $this->SqlExecute($sql);
    }
}


?>