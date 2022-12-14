<html>
<head>
    <title>Perpustakaan - Master Buku</title>
</head>
<body>
    <?php
        include('../header.php');
        include('../tools.php');

        if(isset($_GET["cari"])){
            $cari = $_GET["cari"];
            $sql="SELECT * FROM buku, kategori_buku where buku.id_kategori=kategori_buku.id_kategori and buku.nama_buku like '%$cari%'";
        }else{
            $sql="SELECT * FROM buku, kategori_buku where buku.id_kategori=kategori_buku.id_kategori";
        }

        $hasil=select($sql);
    ?>

    <h3>Master Buku</h3>

    <form action="index.php" method="GET">
        <input type="text" name="cari">
        <button type="submit">Cari Judul Buku</button>
    </form>
    <a href="formAdd.php">Tambah</a>

    <table border="1">
  <thead>
    <tr>
      <th>No</th>
      <th>Kode Buku</th>
      <th>Nama Buku</th>
      <th>Kategori</th>
      <th>ISBN</th>
      <th colspan="3">Aksi</th>
    </tr>
  </thead>
  <tbody>

 <?php $i=1;
 while($data = $hasil->fetch_assoc()) { ?>
         <tr>
         <td><?php echo $i; $i++; ?></th>
         <td> <?php echo $data['kode_buku'] ?></td>
         <td> <?php  echo $data['nama_buku'] ?></td>
         <td> <?php echo $data['kategori_buku'] ?></td>
         <td> <?php  echo $data['isbn'] ?></td>
        <form action="formEdit.php" method="post" >
        <td><input type="hidden" value="<?php echo $data['id_buku']; ?>" name="id_buku"><button type="submit">Edit</button></form></td>
         <form action="delete.php" method="post" >
         <td><input type="hidden" value="<?php echo $data['id_buku']; ?>" name="id_buku"><button type="submit">Delete</button></form>
         </td>
         <td>
         <a href="viewDetail.php?id_buku=<?php echo $data['id_buku']; ?>">Detail</a> </td>
    </tr>                                                       
<?php } ?>
  </tbody>
</table>
</body>
</html>