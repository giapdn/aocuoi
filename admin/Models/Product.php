<?php
require_once "BaseModel.php";
class Product extends BaseModel
{

    //cần sửa lại cho phù hợp (sửa lệnh sql, số lượng đối số truyền vào)
    /*--------
    ----------
    ----------*/



    // public function getProduct($id_product)
    // {
    //     if ($id_product == "detail") {
    //         $sql = "SELECT * FROM `products` WHERE prod_id = '$id_product'";
    //         return $this->sqlExecute($sql, 1);
    //     } else {
    //         $sql = "SELECT * FROM `products`";
    //         return $this->sqlExecute($sql, 2);
    //     }
    // }

    // public function insertProduct($prodName, $prodPrice)
    // {
    //     $sql = "INSERT INTO `products`(`prod_name`, `prod_price`) VALUES ('$prodName', '$prodPrice')";
    //     return $this->sqlExecute($sql, 0);
    // }

    // public function updateProduct($id, $newName, $newPrice)
    // {
    //     $sql = "UPDATE `products` SET `prod_name` = '$newName', `prod_price` = '$newPrice' WHERE `prod_id` = '$id'";
    //     return $this->sqlExecute($sql, 0);
    // }

    // public function deleteProduct($prodID)
    // {
    //     $sql = "DELETE FROM `products` WHERE `prod_id` = '$prodID'";
    //     return $this->sqlExecute($sql, 0);
    // }

    
    
}
