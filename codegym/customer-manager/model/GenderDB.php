<?php

declare(strict_types=1);

namespace Model;
require_once __DIR__."/Gender.php";
use Model\Gender;
use PDO;

class GenderDB
{
    private $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }


    public function get(int $id)
    {
        $sql = "SELECT * FROM genders WHERE id = ?;";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();

        $result = $statement->fetch(PDO::FETCH_OBJ);

        $gender = new Gender($result->id, $result->name);
        return $gender;
    }

    public function getAll(): array
    {
        $sql = "SELECT * FROM genders";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $results = $statement->fetchAll(PDO::FETCH_OBJ);


        $genders = [];
        foreach($results as $item){
            $gender = new Gender($item->id, $item->name);
            array_push($genders, $gender);
        }
        // print_r($genders);
        return $genders;
    }


}
