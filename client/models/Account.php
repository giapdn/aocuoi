<?php
require_once 'BaseModel.php';
class Account extends BaseModel
{
    public function registers($username, $password, $email, $fullname, $phone)
    {
        $sql = "INSERT INTO tb_khachhang( username, password, email, ten_khach_hang, dien_thoai) VALUES ('$username','$password','$email','$fullname','$phone')";
        return $this->SqlExecute($sql);
    }

    public function logins($username, $password)
    {
        $sql = "SELECT * FROM tb_khachhang WHERE username = '$username' AND password = '$password' AND trang_thai = 'Kích Hoạt'";
        return $this->SqlExecute($sql, false);
    }

    public function Forgots($Email)
    {
        $sql = "SELECT * FROM tb_khachhang WHERE email = '$Email'";
        // var_dump($this->SqlExecute($sql));
        // die;
        return $this->SqlExecute($sql);
    }
}
