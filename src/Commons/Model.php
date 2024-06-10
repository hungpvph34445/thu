<?php

namespace Viet\HungPh\Commons;

// './src/Commons/Controller.php';
class Model
{

    protected $conn;

    public function __construct()
    {
        // Thực hiện kết nối tự đông khi khởi tạo bất kỳ 
        // class nào liên quan đến Model 
    }
    public function __destruct(){
        $this->conn = null;
    }
}
