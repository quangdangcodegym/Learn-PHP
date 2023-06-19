<?php

declare(strict_types=1);

namespace Model;

require_once __DIR__."/Customer.php";
require_once __DIR__."/Gender.php";

use Model\Customer;
use Model\Gender;
use PDO;

class CustomerDB
{
    private $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create(Customer $customer)
    {
        $query = "INSERT INTO customers(name, email, address, id_gender) VALUES (?, ?, ?, ?);";
        $statement = $this->connection->prepare($query);
        $statement->bindParam(1, $customer->getName());
        $statement->bindParam(2, $customer->getEmail());
        $statement->bindParam(3, $customer->getAddress());
        $statement->bindParam(4, $customer->getGender()->getId());
        return $statement->execute();
    }

    public function get(int $id)
    {
        $sql = "SELECT c.id, c.name, c.email, c.address, g.name AS gender, g.id as id_gender 
        FROM `customers` AS c LEFT JOIN `genders` AS g ON c.id_gender = g.id WHERE c.id = ?;";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();

        $result = $statement->fetch(PDO::FETCH_OBJ);
        $customer = new Customer($result->name, $result->email, $result->address);
        $customer->setId($result->id);
        $gender = new Gender($result->id_gender, $result->gender);
        $customer->setGender($gender);

        return $customer;
    }

    public function getAll(): array
    {
        $sql = "SELECT c.id, c.name, c.email, c.address, g.name AS gender, g.id as id_gender FROM `customers` AS c LEFT JOIN `genders` AS g ON c.id_gender = g.id";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);


        $customers = [];

        foreach ($result as $item) {
            $customer = new Customer(
                $item->name,
                $item->email,
                $item->address
            );
            $customer->setId($item->id);
            $gender = new Gender($item->id_gender, $item->gender);
            $customer->setGender($gender);


            // $customers[] = $customer;
            array_push($customers, $customer);
        }

        
        return $customers;
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM customers WHERE id = ?;";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);

        return $statement->execute();
    }

    public function update(int $id, Customer $customer)
    {
        $sql = "UPDATE customers SET name = ?, email = ?, address = ? WHERE id = ?;";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $customer->getName());
        $statement->bindParam(2, $customer->getEmail());
        $statement->bindParam(3, $customer->getAddress());
        $statement->bindParam(4, $id);

        return $statement->execute();
    }

    public function getAllPagination()
    {
        $sql = "SELECT * FROM customers ";

        // $columns = array(
        //     0 => 'id',
        //     1 => 'name',
        //     2 => 'email',
        //     3 => 'address'
        // );

        if ($_POST['length'] != -1) {
            $start = $_POST['start'];
            $length = $_POST['length'];
            $sql .= " LIMIT  " . $start . ", " . $length;
        }

        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);
        $customers = [];

        foreach ($result as $item) {
            $customer = new Customer(
                $item->name,
                $item->email,
                $item->address
            );
            $customer->setId($item->id);

            $customers[] = $customer;
        }

        $getAllCustomers = $this->getAll();
        $total_all_rows = count($getAllCustomers);

        $count_rows = count($customers);
        $output = array(
            'draw' => intval($_POST['draw']),
            'recordsTotal' => $count_rows,
            'recordsFiltered' =>   $total_all_rows,
            'data' => $customers,
        );
        return json_encode($output);
    }
}
