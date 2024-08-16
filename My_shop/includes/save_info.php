<?php
class DatabaseHandler{
    private PDO $pdo;
    private string $host = '127.0.0.1';
    private string $database = 'shop_bd';
    private string $user = 'root';
    private string $charset = 'utf8';
    private string $stmt;

    /**
     * @return string
     */
    public function __construct()
    {
        $dsn = "msql:host=$this->host; dbname=$this->database=$this->database;charset=$this->charset";


    }
}