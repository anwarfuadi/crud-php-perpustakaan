<html>
<head>
    <title>Perpustakaan - Master Buku</title>
</head>
<body>
    <?php include('../header.php') ?>

    <h3>Master Buku</h3>
    <a href="formAdd.php">Tambah</a>
    <table>
  <thead>
    <tr>
      <th>No</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>

 <?php //while($buku = $hasil->fetch_assoc()) { ?>
         <tr>
         <th><?php //echo $i; $i++; ?></th>
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