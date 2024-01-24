<?php 
require_once "Models/LienHe.php";
class LienHeController{
    public $lienHe;
    public function __construct(){
        $this->lienHe = new LienHe;
    }
    public function AllLienHe(){
        $lienhe = $this->lienHe->getLienHe();
        include_once "Views/LienHe/list.php";
    }
}


?>