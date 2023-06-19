<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
    // print_r($_FILES);        _FILES: là biến toàn cục để xem các file gửi lên
    $message = "";
    if(isset($_POST['submit'])){
        $permitted_extension = ['jpg', 'png', 'jpeg'];
        $file_name = $_FILES['upload']['name'];
        print_r($_FILES);
        if(!empty($file_name)){
            $file_size = $_FILES['upload']['size'];
            $file_tmp_name = $_FILES['upload']['tmp_name'];
            $destination_path = "/LEARN/PHP/basic/uploads/$file_name";

            // explode('.', $file_name): tách theo dấu .
            // end lấy phần cuối cùng chính là đuôi jpg, png
            $file_extension = end(explode('.', $file_name));        //
            $file_extension =  strtolower($file_extension);

            if(in_array($file_extension, $permitted_extension)){
                if($file_size<=1000000){
                    move_uploaded_file($file_tmp_name, $destination_path);      // hàm uploaded file
                    $error_message = '<p style="color:blue">File upload suscess</p> ';
                }else{
                    $error_message = '<p style="color:red">File to large</p> ';
                }
            }else{
                $error_message = '<p style="color:red">Invalid file type</p> ';
            }

        }else{
            $error_message = '<p style="color:red">No file selected</p> ';
        }
    }
?>
<body>
    <h1>File upload in PHP</h1>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>"       
        method="POST" enctype="multipart/form-data"
    >
        <input type="file" name="upload" />
        <input type="submit" value="Submit" />
    </form> 

    <?php
        echo "<h5>$message</h5>";
    ?>
</body>
</html>