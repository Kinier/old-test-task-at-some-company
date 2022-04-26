<?php

include_once "DatabaseInterface.php";

class DatabaseConnectPDO implements DatabaseInterface {
    private string $dblocation;
    private string $dbname;
    private string $dbuser;
    private string $dbpassword;
    private string $charset;
    public function __construct()
    {
        $this->dblocation = 'localhost';
        $this->dbname = 'pizza';
        $this->dbuser = 'root';
        $this->dbpassword = 'password';
        $this->charset = 'utf8';
    }

    /** подключение к базе данных */
    public function connect(): PDO
    {



        $dsn = "mysql:host=$this->dblocation;dbname=$this->dbname;charset=$this->charset"; // data source name

        $opts = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false];



        return new PDO($dsn, $this->dbuser, $this->dbpassword, $opts);// соединение с бд
    }



}