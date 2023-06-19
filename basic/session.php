<?php

echo "Session in PHP";
    session_start();            // muốn lấy session phải có dòng này
    if(isset($_POST['submit'])){
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
        $password = $_POST['password'];
        if($email == 'quang@codegym.vn' && $password == '123123'){
            $_SESSION['email'] = $email;
            header('Location: /LEARN/PHP/basic/dashboard.php');      // chuyển qua trang admin
        }else{
            echo 'Lỗi username password';
        }
    }
?>
<h4>Login to account</h4>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div>
        <div><label>Your name:</label></div>
        <input type="text" name="email">
    </div>
    <div>
        <div><label>Age:</label></div>
        <input type="text" name="password">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>