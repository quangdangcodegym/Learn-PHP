<?php
    /** 
    echo "hello php class <br>";
    // echo cho in ra nhiều tham số
    echo "pi=", 3.14, "kk", "<br>";
    // print chỉ cho in 1 tham số, có thể để trong print(value)
    print "pi <br>";
    print ("pi(cách 2) <br>");
    echo "Hello" . "php";

    $x = 5;
    function myTest() {
        // sử dụng biến x ở bên trong hàm sẽ sinh ra lỗi
        //global $x;      // sử dụng từ khóa global để lấy giá trị biến toàn cục
        $x+=5;
        echo "<p>Variable x inside function is: $x</p>";
    }
    myTest();
    echo "<p>Variable x outside function is: $x</p>";

     function myTest() {
        static $x = 0;
        echo $x;
        $x++;
    }
    myTest();
    myTest();
    myTest();

    $a = 2;
    $b = "2";
    if($a === $b){
        echo "2 thằng bằng nhau";
    }
    */
    

    
    
    

?>
<h1>HAAAAAAAAAAAAAAAAAAAA</h1>
<!-- có thể chèn code php vào html  -->
<a href="<?php echo '24h.com.vn'?>"></a>

<!-- dùng ?= thì bỏ vào expression  -->
<a href="<?= '24h.com.vn' ?>"></a>