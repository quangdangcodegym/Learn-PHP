<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        /**
        htmlspecialchars($_GET['name'])tương đương với lệnh filter_var
        filter_var($_GET['name'], FILTER_SANITIZE_SPECIAL_CHARS)
         */
        $name = $_GET['name'] ?? "";    // coolescing
        $age = $_GET['name'] ?? "";

        echo $name;
        echo $age;

    ?>
    <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div>
            <label >Your name:</label>
            <input type="text" name="name">
        </div>
        <div>
            <label >Age:</label>
            <input type="text" name="age">
        </div>
        <input type="submit" value="Submit" name="submit" >
    </form>
</body>
</html>