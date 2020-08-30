<?php

namespace Core;

class Database
{
    public $conn = null;

    public function __construct()
    {
        $this->connect();
    }

    public function connect()
    {
        $this->conn = mysqli_connect(
            config('db_host'),
            config('db_user'),
            config('db_pass'),
            config('db_name'),
            config('db_port')
        );

        if (mysqli_connect_error()) {
            die('DB Connecting Fail.');
        }
    }
}