<?php

require_once (__DIR__.'/./controller/CustomerController.php');

use Controller\CustomerController;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>
    <div>
        <a href="<?php echo __DIR__. '/./controller/CustomerController.php' ?>">TEST</a>
        <nav class="navbar navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.php">Home Page</a>
            </div>
        </nav>
        <?php
        
        $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : null;

        $controller = new CustomerController();
        switch ($page) {
            case 'add':
                $controller->add();
                break;
            case 'delete':
                $controller->delete();
                break;
            case 'edit':
                $controller->edit();
                break;
            default:
                $controller->index();
                break;
        }

        ?>
    </div>
</body>

</html>

