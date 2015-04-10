<?php
class Database extends PDO {
    private $driver = "mysql";
    private $host = "localhost";
    private $dbname = "user_profile";
    private $user = "root";
    private $pass = "root";
    private $connect = false;
    private $error = "";
    private $stmt = "";

    public function __construct() {
        $options = array(
            PDO::ATTR_PERSISTENT => true, 
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        try {
            parent::__construct($this->driver.":host=".$this->host.";dbname=".$this->dbname, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
        }
        $this->connect = true;
    }

    public function run($statement, $bind = array()) {
        try {
            $this->stmt = $this->prepare($statement);
            $this->stmt->execute($bind);
        } catch (Exception $e) {
            throw $e;
        }

    }

    public function fetchAssoc() {
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
	
	public function fetchArray() {
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }
	
    public function rowCount() {
        return $this->stmt->rowCount();
    }

    public function getErrorMessage() {
        return $this->error;
    }

    public function isOpen() {
        return $this->connect;
    }

    public function close() {
        //$this->connect = false;
    }

    public function __destruct() {
        $this->connect = false;
    }
}
?>