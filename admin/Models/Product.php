<?php
require_once "BaseModel.php";
require_once "khachhang.php";

class Product extends BaseModel
{
    public function allProduct()
    {
        $sql = "SELECT * FROM tb_sanpham where status = 1";
        return $this->SqlExecute($sql);
    }
    public function xoaProduct($id)
    {
        $sql = "DELETE FROM tb_sanpham WHERE id_san_pham=$id";
        return $this->SqlExecute($sql);
    }
    public function xoaMemProduct($id){
        $sql = "UPDATE tb_sanpham SET status = 0 WHERE id_san_pham=$id";
        return $this->SqlExecute($sql, 1);
    }
    public function themProduct($ten_san_pham, $gia_san_pham, $img_path_default, $mo_ta_san_pham, $ma_san_pham, $id_danh_muc)
    {
        $sql = "INSERT INTO tb_sanpham( ten_san_pham, gia_san_pham, img_path_default, mo_ta_san_pham, ma_san_pham, id_danh_muc) 
        VALUES ('$ten_san_pham','$gia_san_pham','$img_path_default','$mo_ta_san_pham','$ma_san_pham','$id_danh_muc')";
        return $this->SqlExecute($sql);
    }
    public function hienthi($id_san_pham)
    {
        $sql = "SELECT * FROM tb_sanpham WHERE id_san_pham=$id_san_pham";
        return $this->SqlExecute($sql, 1);
    }
    public function suaProduct($id_san_pham, $ten_san_pham, $gia_san_pham, $img_path_default, $mo_ta_san_pham, $ma_san_pham, $id_danh_muc)
    {
        $sql = "UPDATE tb_sanpham SET ten_san_pham='$ten_san_pham',gia_san_pham='$gia_san_pham',img_path_default='$img_path_default',mo_ta_san_pham='$mo_ta_san_pham',ma_san_pham='$ma_san_pham',id_danh_muc='$id_danh_muc' WHERE id_san_pham=$id_san_pham";
        return $this->SqlExecute($sql, 1);
    }
    public function timProduct($ten_san_pham)
    {
        $sql = "SELECT * FROM tb_sanpham WHERE 1";
        if ($ten_san_pham != "") {
            $sql.=" and ten_san_pham like '%".$ten_san_pham."%'";
        }
        return $this->SqlExecute($sql);
    }
}
