<?php

require_once "BaseModel.php";
class Category extends BaseModel
{
    //danh mục
    public function AllCategory(){
        $sql = "SELECT * FROM `tb_danhmuc`";
        return $this->SqlExecute($sql);
    }
    public function themCategory($mo_ta,$path){
        $sql = "INSERT INTO `tb_danhmuc`(`mo_ta`, `path`) VALUES ('$mo_ta','$path')";
        return $this->SqlExecute($sql);
    }
    public function hienthiCategory($id){
        $sql = "SELECT * FROM tb_danhmuc WHERE id_danh_muc =" .$id;
        return $this->SqlExecute($sql, 1);
        
    }
    public function suaCategory($id,$mota,$path){
        $sql = "UPDATE `tb_danhmuc` SET `mo_ta`='$mota',`path`='$path' WHERE id_danh_muc=".$id;
        return $this->SqlExecute($sql, 1);
    }
    public function suaCategory2($id,$mota){
        $sql = "UPDATE `tb_danhmuc` SET `mo_ta`='$mota' WHERE id_danh_muc=".$id;
        return $this->SqlExecute($sql, 1);
    }
    public function xoaCategory($id){
        $sql = "DELETE FROM tb_danhmuc WHERE id_danh_muc= $id";
        return $this->SqlExecute($sql);
    }

    
}
