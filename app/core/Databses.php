<?php

// ====================================
// INI ADALAH KODE UNTUK DATABSE WRAPPER
// ====================================

class Databases
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    private $dbHandler;
    private $statement;

    public function __construct()
    {
        // Data Source Name
        $dsn = "mysql:host=$this->host;dbname=$this->dbname";

        $options = [
            PDO::ATTR_PERSISTENT => TRUE,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try {
            $this->dbHandler = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (PDOException $expt) {
            die($expt->getMessage());
        }
    }

    public function query($query)
    {
        $this->statement = $this->dbHandler->prepare($query);
    }

    // Function Binding
    public function myBind($paramTitikDua, $value, $type = null)
    {
        if ($type == null) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }

        // Perintah Binding Data
        $this->statement->bindParam($paramTitikDua, $value, $type);
    }

    // Functon Exekusi $statement
    public function execute()
    {
        $this->statement->execute();
    }

    public function resultAll()
    {
        $this->execute();
        return $this->statement->fetchAll(PDO::FETCH_ASSOC);
    }
    public function resultSingle()
    {
        $this->execute();
        return $this->statement->fetch(PDO::FETCH_ASSOC);
    }

    // 
    public function rowCount()
    {
        return $this->statement->rowCount();
    }
}
