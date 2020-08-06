<?php 

// contructor ialah sebuah method yg spesial atau yg khusus yg ada didalam sebuah class
// kenapa spesial? karena constructor ini method yg otomatis dijalankan ketika sebuah class kita instansiasi atau kita buat object nya

// jual produk (komik, game).
class Produk {
  public  $judul,
          $penulis,
          $penerbit, 
          $harga;

  // kenapa menggunakan undescor undescor "__" ? 
  // karena construct merupakan bagian dari magic method / method method spesial yg dimiliki PHP
  // selain construct masih banyak magic method yg lain
  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga= 0) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function getLabel() {
        return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
      }
}

$komik = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);

$game = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);

$produk3 = new Produk("Dragon Ball");

echo "Komik : " . $komik->getLabel();
echo "<br>";
echo "Game : " . $game->getLabel();
echo "<br>";
echo "Anime :" . $produk3->getLabel();




?>