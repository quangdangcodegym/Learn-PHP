<?php
    echo 'Working with file' . '<br>';

    $file_path = './fruits1.txt';
    if(file_exists($file_path)){        // kiểm tra file có tồn tại ko
        echo readfile($file_path);      // đọc xong trả về nội dung và dung lượng file 
        $file_handle = fopen($file_path, 'r');          // open for read
        $file_content = fread($file_handle, filesize($file_path));

        fclose($file_handle);

        echo $file_content;
    }else{
        $file_handle = fopen($file_path, 'w');      // open for write
        $file_content = 'banna'.PHP_EOL . 'mango' .PHP_EOL . 'kk';      // PHP_EOL: dùng để xuống dòng
        fwrite($file_handle, $file_content);
        fclose($file_content);
    }

?>