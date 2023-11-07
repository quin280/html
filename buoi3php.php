<?php
    //Khai báo biến với kiểu số và chuỗi.
    $A = 28;
    $B = 10;
    $C = "Bài tập";
    //Xuất ra màn hình
    echo "Đây là A: ", $A, "; B: ", $B, "; C: ", $C;
    //Một số phép toán số học đơn giản
    echo "<br>";
    echo "A + B = ", $A + $B;
    echo "<br>";
    echo "A - B = ", $A - $B;
    echo "<br>";
    echo $A == $B;
    echo "<br>";
    echo $A > $B;
    //Cấu trúc điều kiện
    $D = date("30");
    if ( $D < "20"){
        echo "Nay la ngay dep troi";
    }
    else {
        echo "Nay la ngay mat me";
    }
    //vòng lặp for
    echo "<br>";
    for ($X = 1; $X <= 5; $X++){
        echo "<br>";
        echo "Biến X là: $X";
    }
    //while
    echo "<br>";
    $X = 1;
    while ( $X <= 5){
        echo "Biến x là: $X <br>";
        $X ++;
    }
    //do...while
    do {
        echo "x là: $X <br>";
        $X++;
    } while($X <= 5);
?>