<?php
    class db{
        public function connect(){
            try{
                $hostname = 'localhost:4306';
                $db_name = 'demo_dpo';
                $username = 'root';
                $password = '';
                $dsn = "mysql:host=$hostname;dbname=$db_name";
                $conn = new PDO($dsn, $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                echo 'kết nối database thành công';
                return $conn;
            }catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
        }
    }

?>