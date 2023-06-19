<?php
    echo 'Supper global';

    // toán tử kiếm tra biến đã được định nghĩa hay khác null không
    if(isset($_GET['name'])){
        print_r($_GET['name']);
    }
    
    $name = $_GET['name'] ?? "";    // coolescing
    $age = $_GET['name'] ?? "";


?>