<?php
        define("DATABASE_SERVER", "localhost:4306");
        define("DB_USER", "root");
        define("DB_PASSWORD", "");
        define("DB_NAME", "feedback");
        $conn = null;

        try{
            $conn = new PDO(
                "mysql:host=".DATABASE_SERVER.";dbname=".DB_NAME,
                DB_USER, DB_PASSWORD
            );
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "connection success...";

        }catch(PDOException $e){
           echo "Connection faild: " . $e->getMessage();
        }
        
?>