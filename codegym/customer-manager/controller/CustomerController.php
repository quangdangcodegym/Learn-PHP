<?php

declare(strict_types=1);
namespace Controller;

require_once (__DIR__.'/../model/Customer.php');
require_once (__DIR__.'/../model/CustomerDB.php');
require_once (__DIR__.'/../model/GenderDB.php');
require_once (__DIR__.'/../model/DBConnection.php');

use Model\Customer;
use Model\CustomerDB;
use Model\GenderDB;
use Model\DBConnection;

class CustomerController
{
    private CustomerDB $customerDB;
    private GenderDB $genderDB;
    private const HEADER = "Location: index.php";

    public function __construct()
    {
        $db_connection = new DBConnection();

        $connection = $db_connection->connect();
        $this->customerDB = new CustomerDB($connection);
        $this->genderDB = new GenderDB($connection);
    }

    public function add()
    {
        $genders = $this->genderDB->getAll();
        if ($_SERVER['REQUEST_METHOD'] === "GET") {
            include 'view/add.php';
        } else {
            $errors = [];
            $fields = ["name", "email", "address"];

            foreach ($fields as $field) {
                if (empty($_POST[$field])) {
                    $errors[$field] = "Can't be empty!";
                }
            }

            if (empty($errors)) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $gender_id = +$_POST['gender'];
                $gender = $this->genderDB->get($gender_id);
                $customer = new Customer($name, $email, $address);
                $customer->setGender($gender);

                $this->customerDB->create($customer);
                header('Location: '.$_SERVER['PHP_SELF']);
                // header(self::HEADER);
            } else {
                include 'view/add.php';
            }
        }
    }

    public function delete()
    {
        $id = +$_GET['id'];
        $this->customerDB->delete($id);
        header(self::HEADER);
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = +$_GET['id'];
            $customer = $this->customerDB->get($id);

            $genders = $this->genderDB->getAll();
            include 'view/edit.php';
        } else {
            $errors = [];
            $fields = ['name', 'email', 'address'];

            foreach ($fields as $field) {
                if (empty($_POST[$field])) {
                    $errors['field'] = "Can't be empty!";
                }
            }

            $id = +$_POST['id'];
            if (empty($errors)) {
                $customer = new Customer(
                    $_POST['name'],
                    $_POST['email'],
                    $_POST['address']
                );
                $this->customerDB->update($id, $customer);
                header(self::HEADER);
            } else {
                $customer = $this->customerDB->get($id);
                include 'view/index.php';
            }
        }
    }

    public function index()
    {
        $customers = $this->customerDB->getAll();
        include 'view/list.php';
    }
}

 
