<?php
    //1.Viết một chương trình PHP để đếm số ký tự trong một chuỗi sử dụng hàm strlen()
    $cau1 = "Nguyen Thi Quynh";
    echo strlen($cau1);
    //2.Viết một chương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count()
    echo "<br>";
    $cau2 = "Xin chao moi nguoi to la Quynh";
    echo str_word_count($cau2);
    //3.Viết một chương trình PHP để đảo ngược một chuỗi sử dụng hàm strrev()
    echo "<br>";
    $cau3 = "Nguyen Thi Quynh";
    echo strrev($cau3);
    //4.Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos()
    echo "<br>";
    $cau4 = "Nguyen Thi Quynh";
    echo strpos($cau4,"Thi");
    //5.Viết một chương trình PHP để thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace()
    echo "<br>";
    $cau5 = "Quynh duoc B Tu tuong Ho Chi Minh";
    echo str_replace("B","A",$cau5);
    //6.Viết một chương trình PHP để kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp()
    //7.Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper()
    //8.Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower()
    //9.Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords()
    //10.Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim()
    //11.Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim()
    //12.Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim()
    //13.Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode()
    //14.Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode()
    //15.Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad()
    //16.Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr()
    //17.Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr()
    //18.Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace()
    //19.Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int()
    //20.Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var()
?>