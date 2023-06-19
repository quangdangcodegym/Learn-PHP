<?php

    echo "Cookies in php";
    // time(): thời gian hiện tại + 24h*3600 (sau 1 ngày)
    setcookie('name', 'Hoang', time() + 24*3600);

    if(isset($_COOKIE['name'])){
        echo $_COOKIE['name'];
    }

    // xóa cookies xóa thời điểm có hiệu lực là quá khứ
    setcookie('name', 'Hoang', time() - 24*3600);

?>