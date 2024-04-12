<?php
// Mengelola koneksi ke database MySQL serta menginisialisasi koneksi saat objek dibuat
class Database
{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "praktikumdb";
    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this -> host, $this -> username, $this -> password, $this->database);

        if ($this -> conn -> connect_error) {
            die("connection failed: " . $this -> conn -> connect_error);
        }
    }
}