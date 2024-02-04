<?php
include("function/dbcon.php");

class Pasien {
    protected $conn;
    protected $data = array();
    
    function __construct() {
        $db = new dbObj();
        $connString =  $db->getConnstring();
        $this->conn = $connString;
    }
    
    public function getPasien($username) {
        $sql = "SELECT * FROM pasien WHERE username = $1";
        $queryRecords = pg_query_params($this->conn, $sql, array($username)) or die("error to fetch pasien data");
        $data = pg_fetch_all($queryRecords);
        return $data;
    }
}

?>
