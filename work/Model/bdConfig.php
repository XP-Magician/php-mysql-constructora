<?php

class Database
{
    public $conn;
    private $host;
    private $db_name;
    private $username;
    private $password;
    private $bandera = 1;

function dbConnection()
{
    $this->host = "127.0.0.1";
    $this->db_name = "Cke";
    $this->username = "root";
    $this->password = "";
    $this->conn = null;
    try {
        $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $exception) {
        if ($this->bandera == 1) {
            $this->bandera++;
            $this->dbConnection();
        } else {
            echo "Error de conexión: aca " . $exception->getMessage() . " " . $this->bandera;
        }

    }
    return $this->conn;
}


}