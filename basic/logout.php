<?php
    session_start();

    session_destroy();      // hủy session

    header('Location: /LEARN/PHP/basic/session.php');

?>