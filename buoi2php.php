<?php
    // in ra câu xin chào
    echo "Xin chào tất cả mọi người";
    // xuống dòng
    echo "</br>";
    // biến chữ
    $txt = "Quỳnh";
    echo "Xin Chào " . $txt . "!";
    // xuống dòng
    echo "</br>";
    // hàm
    $z =9;
    function Mytest(){
        $x =5;//local scope
        $y =6;
        $y=$x + $y;
        global $z;
        echo $y + $z;
    }
    Mytest();
    // kiểu dữ liệu array
    $cars= array("Volvo","BMW","Toyota");
    var_dump($cars);
    echo "<br>";
    //object
    class Car{
        public $color;
        public $model;
        public function __construct($color, $model){
            $this->color = $color;
            $this->model = $model;
        }
        public function message() {
            return "My car is a" . $this->color . "" . $this->model . "!";
        }
    }
    $myCar = new Car("black", "Volvo");
    echo $myCar -> message();
    echo "<br>";
    $myCar = new Car("red", "BMW");
    echo $myCar -> message();
    //chọn só ngẫu nhiên
    echo "<br>";
    echo(rand(10,200));
    $a="Quynh";
    // $anguoc=strrev($a);
    echo $anguoc=strrev($a);
?>