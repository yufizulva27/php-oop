<?php 

class database{
  var $host = "localhost";
  var $uname = "php-oop";
  var $pass = "";
  var $db = "user";

  function __construck(){
    $conn = mysqli_connect($this->host, $this->uname, $this->pass);
    mysqli_select_db($this->db);
  }

  function tampil_data(){
   $data = mysqli_query($conn, "SELECT * FROM user");
   while ($d = mysqli_fetch_array($data)){
     $hasil[] = $d;
   }
    return $hasil;
  }
}



?>