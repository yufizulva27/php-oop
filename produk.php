<?php 

// jual produk (komik, game).
class Produk {
  public  $judul = "judul", 
          $penulis = "penulis", 
          $penerbit = "penerbit", 
          $harga = 0;

  public function getLabel() {
        return "$this->penulis, $this->penerbit";
      }
}

// $produk1 = new Produk();
// $produk1->judul = "NARUTO";
// var_dump($produk1);

// $produk2 = new Produk();

// var_dump($produk2->judul);

$komik = new Produk();
$komik->judul = "Naruto";
$komik->penulis = "Masashi Kishimoto";
$komik->penerbit = "Shonen Jump";
$komik->harga = 30000;

// var_dump($produk3);

// echo "Komik : $produk3->judul<br>
//       Penulis : $produk3->penulis";
// echo "<br>";
// echo $produk3->getLabel();

// echo "<hr>";
$game = new Produk();
$game->judul = "Uncharted";
$game->penulis = "Neil Druckmann";
$game->penerbit = "Sony Computer";
$game->harga = 250000;

echo "Komik : " . $komik->getLabel();
echo "<br>";
echo "Game : " . $game->getLabel();





?>