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
    ?>
</head>
<body>
    
    <div class="container">
        <h1>List feedback</h1>
        <?php
            $sql = "SELECT name, email, body from feedback";
            if ($conn != null){
                try{
                    $statement = $conn->prepare($sql);
                    $statement->execute();
                    $result = $statement->setFetchMode(PDO::FETCH_ASSOC);
    
                    $feedbacks = $statement->fetchAll();
                    echo '<ul class="list-group">';
                    foreach($feedbacks as $feedback){
                        $name = $feedback['name'] ?? '';
                        $email  = $feedback['email'] ?? '';
                        $body = $feedback['body'] ?? '';
                        echo "<li class='list-group-item'>";
                        echo "<p>$name</p>";
                        echo "<p>$email</p>";
                        echo "<p>$body</p>";
                        echo "</li>";
                    }
                    echo "</ul>";
                }catch(PDOException $e){
                    echo "Cannot query data" . $e->getMessage();
                }
                
            }
        ?>
        
        <?php

            include('./components/footer.php');     // include nếu 
        ?>
    </div>

   
</body>
</html>