<?php
class Koneksi {
    private $server = "localhost";
    private $username = "id4650193_dev"; // root
    private $password = "rahasia"; // ""
    private $db = "id4650193_uas";

    function getKoneksi() {
        return new mysqli($this->server, $this->username, 
        $this->password, $this->db);
    }
}
?>