<html>
<head>
    <title>Perpustakaan - Master Buku</title>
</head>
<body>
    <?php include('../header.php') ?>

    <h3>Master Buku</h3>
    <a href="formAdd.php">Tambah</a>
    <table border="1">
  <thead>
    <tr>
      <th>No</th>
      <th>Kode Buku</th>
      <th>Kategori</th>
      <th>Nama Buku</th>
      <th>ISBN</th>
      <th>Penerbit</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>

 <?php //while($buku = $hasil->fetch_assoc()) { ?>
         <tr>
         <td><?php //echo $i; $i++; ?></th>
         <td> <?php //echo $buku['jur_nama']; ?></td>
         <td> <?php //echo $buku['jur_nama']; ?></td>
         <td> <?php //echo $buku['jur_nama']; ?></td>
         <td> <?php //echo $buku['jur_nama']; ?></td>
         <td> <?php //echo $buku['jur_nama']; ?></td>
         <td>
         <a href="" class="btn btn-warning">Edit</a>|
          <a href="" class="btn btn-danger">Delete</a> 
         </td>
    </tr>                                                        <!--baru-->
<?php //} ?>
  </tbody>
</table>
</body>
</html>