<?php
// File: koneksi/database.php

class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "DB_UAS_PBO_KELAS_ZAKYATHAARYANSYAH"; 
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->dbname, 
                $this->username, 
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch(PDOException $exception) {
            echo "Koneksi ke database gagal: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>