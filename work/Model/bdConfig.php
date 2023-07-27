<?php
require_once("../work/Libs/Config.php");
class Database
{
    public $conn;
    private $bandera = 1;

function dbConnection()
{
    
    $this->conn = null;
    try {
        $this->conn = new PDO("mysql:host=" . HOST. ";dbname=" . DB_NAME, DB_USER, PASSWORD);
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