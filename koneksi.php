<?php
class Koneksi{
  private $server="localhost";
  private $username="id4960691_may";
  private $password = "06april98";
  private $db = "id4960691_mahasiswa";
  private $hubungan;

  function ambilKoneksi(){
    $hubungan= new mysqli($this ->server, $this->username,
    $this->password, $this->db);
    return $hubungan;
  }
}
 ?>
