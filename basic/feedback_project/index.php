<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        require('./components/header.php');
        require('./configuration/database.php');

        $name = $email = $body = '';
        $name_error = $email_error = $body_error = "";

        //<input type="submit" class="btn btn-primary" name="submit" value="submit" />
        // nhớ bỏ thuộc tính name='submit'
        if(isset($_POST['submit']) ){
           
            if(empty($_POST['name'])){
                $name_error = 'Name is required';
            }else{
                $name = htmlspecialchars($_POST['name']);
            }
            if(empty($_POST['email'])){
                $email_error = 'Email is required';
            }else{
                $email = filter_input(INPUT_POST, 'email',
                FILTER_SANITIZE_EMAIL);
            }
            if(empty($_POST['body'])){
                $email_error = 'Body is required';
            }else{
                $email = filter_input(INPUT_POST, 'body',
                FILTER_SANITIZE_SPECIAL_CHARS);
            }
            $validate_success = empty($name_error) && empty($email_error)
                                &&empty($body_error);
                                echo 'submit';
            if($validate_success){
                echo 'validate_success';
                $sql = "INSERT INTO feedback(name, email, body) values (?,?,?)";
                try {
                    if($conn!=null){
                        $statement = $conn->prepare($sql);
                        $statement->bindParam(1, $name);
                        $statement->bindParam(2, $email);
                        $statement->bindParam(3, $body);
                        $statement->execute();
                        //echo "feedback inserted successfully";
                        header("Location: ./list.php");
                    }
                }catch(PDOException $e) {
                    echo "Cannot insert feedback into database"
                            .$e->getMessage();
                }
            }
        }

        echo $name_error;
    ?>
</head>
<body>
    
    <div class="container">
        <h1>Feed back project</h1>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="post">
            <div>
                <input class="form-control" type="text"name="name" placeholder="what is your name" />
                <p class='text-danger'>
                    <?php echo $name_error  ?>
                </p>
            </div>
            <div>
                <input class="form-control" type="text"name="email" placeholder="what is your email" />
                <p class='text-danger'>
                    <?php echo $name_error  ?>
                </p>
            </div>
            <div>
                <textarea name="body" >

                </textarea>
                <p class='text-danger'>
                    <?php echo $name_error  ?>
                </p>
            </div>
            <input type="submit" class="btn btn-primary" name="submit" value="submit" />
        </form>
        <?php
        include('./components/footer.php');     // include nếu 
    ?>
    </div>

   
</body>
</html>