<?php
        echo 'Exceptions in php';
        function divide($a, $b){
            if($b==0){
                throw new Exception('Loi chia khong');
            }
            return $a/$b;
        }

        try{
            $result =  "divide(8,2)";
            echo $result . "\r\n";          // chỗ này không xuống dòng được .PHP_EOL cũng ko được
            echo divide(4,0);
        }catch(Exception $ex){
            echo "Loi exception " . $ex->getMessage();
        }finally{

        }
        

?>