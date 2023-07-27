<?php
require_once("../work/Libs/Config.php");
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
    $this->host = $HOST;
    $this->db_name = $DB_NAME;
    $this->username = $DB_USER;
    $this->password = $PASSWORD;
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