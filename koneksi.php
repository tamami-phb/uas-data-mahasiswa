<?php
class Koneksi {
    private $server = "localhost";
    private $username = "id4650193_dev"; // root
    private $password = "bismillah"; // ""
    private $db = "id4650193_stok_barang";

    function getKoneksi() {
        return new mysqli($this->server, $this->username, 
        $this->password, $this->db);
    }
}
?>