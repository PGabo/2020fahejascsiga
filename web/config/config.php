<?php
class Database{
    private $host = "localhost";
    private $username = "root";
    private $password = "root";
    private $database = "hasznaltautok";
    private $dbConnection;
    public function DB_Connect(){
        try{
            $this->dbConnection = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database, $this->username, $this->password);
            $this->dbConnection->exec('SET NAMES utf8');
        }
        catch(PDOException $e)
        {
            exit("Connection failed: " . $e->getMessage());
        }
        return $this->dbConnection;
    }
    public function Disconnect()
    {
        $this->dbConnection = null;
    }
}