<html>
<head>
    <title>Perpustakaan - Master Buku</title>
</head>
<body>
    <?php include('../header.php');
        include('../tools.php');
        $sql="SELECT * FROM buku, kategori_buku where buku.id_kategori=kategori_buku.id_kategori";
        $hasil=select($sql);
    ?>

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

 <?php $i=1;
 while($data = $hasil->fetch_assoc()) { ?>
         <tr>
         <td><?php echo $i; $i++; ?></th>
         <td> <?php echo $data['kode_buku'] ?></td>
         <td> <?php echo $data['kategori_buku'] ?></td>
         <td> <?php  echo $data['nama_buku'] ?></td>
         <td> <?php  echo $data['isbn'] ?></td>
         <td> <?php  echo $data['penerbit'] ?></td>
         <td>
         <a href="formEdit.php" class="btn btn-warning">Edit</a>|
          <a href="delete" class="btn btn-danger">Delete</a> 
         </td>
    </tr>                                                        <!--baru-->
<?php } ?>
  </tbody>
</table>
</body>
</html>