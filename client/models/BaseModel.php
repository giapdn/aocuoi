<?php
require_once "env.php";

class BaseModel
{
    private $connect;
    public function __construct()
    {
        $this->connect = new PDO(
            "mysql:host=" . DBHOST . ";dbname=" . DBNAME,
            DBUSER,
            DBPASS
        );
    }

    public function SqlExecute($sql, $type = 2)
    {
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
        if ($type == 2) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } elseif ($type == 1) {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } elseif ($type == 0) {
            if ($stmt->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        }
    }
}
