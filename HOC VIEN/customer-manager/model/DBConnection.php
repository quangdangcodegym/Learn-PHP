<?php

declare(strict_types=1);

class DBConnection
{
    private const DSN = "mysql:host=localhost:4306;dbname=customers1_athien";
    private const USERNAME = "root";
    private const PASSWORD = "";


    public function __construct()
    {
        //constructor no parameter
    }

    public function connect(): PDO
    {
        return new PDO(self::DSN, self::USERNAME, self::PASSWORD);
    }
}
