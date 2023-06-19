<?php

// biến toàn cục bên trong hàm không truy xuất được, muốn truy xuất phải dùng từ khóa global
$x = 5;
function test(){
    global $x;
    echo $x;
}
// test();


function demoStatic(){
    $y = 5;
    echo $y . "<br>";
    $y++;
}
demoStatic();
demoStatic();
demoStatic();


function sum(props){   // tham số
    return $a+$b;
}

sum(4);       // đối số
?>