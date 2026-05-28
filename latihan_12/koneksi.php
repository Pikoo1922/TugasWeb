
<?php
class Database {
    private $host = "localhost";
    private $user = "root";
    private $paswd = "";
    private $name = "akademik";
    public $link;

    public function __construct() {
        $this->link = new mysqli($this->host, $this->user, $this->paswd, $this->name);
        if ($this->link->connect_error) {
            die("Koneksi gagal: " . $this->link->connect_error);
        }
    }
}

$database = new Database();
$link = $database->link;
?>