<?php 

class database{
  var $host = "localhost";
  var $uname = "php-oop";
  var $pass = "";
  var $db = "user";

  function __construck(){
    mysqli_connect($this->host, $this->uname, $this->pass);
    mysqli_select_db($this->db);
  }
}


?>