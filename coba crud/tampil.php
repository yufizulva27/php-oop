<?php 
include 'database.php';

$db = new Database();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-oop</title>
</head>
<body>
<h2>CRUD OOP PHP</h2>
<h3>Data User</h3>
<a href="input.php">Input Data</a>

<table border="1">
  <tr>
    <th>No.</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Usia</th>
    <th>Aksi</th>
  </tr>
  <?php 
   $no = 1;
   foreach($db->tampil_data() as $data) :
  ?>

  <tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $data['nama']; ?></td>
    <td><?php echo $data['alamat']; ?></td>
    <td><?php echo $data['usia'] ?></td>
    <td>
      <a href="edit.php?id=<php echo $data['id']; ?>&aksi=edit">Edit</a> |
      <a href="delete.php?id=<php echo $data['id']; ?>&aksi=delete">Delete</a>
    </td>
  </tr>

   <?php endforeach; ?>

</table>


</body>
</html>