<html>
<head>
    <title>Perpustakaan - Master Kategori</title>
</head>
<body>
    <?php include('../header.php');
          include('../tools.php');

          $id_kategori=$_POST['id_kategori'];
          $sql_kategori="select * from kategori_buku where id_kategori='$id_kategori'";
          $hasil_kategori=select($sql_kategori);
          $data=$hasil_kategori->fetch_assoc();
          ?>

    <h3>Edit Data Master Kategori Buku</h3>
    <form action="edit.php" method="post">
    <input type="hidden" value="<?php echo $id_kategori; ?>" name="id_kategori"/>
    <input type="hidden" value="<?php echo $data['kode_kategori']; ?>" name="kode_kategori"/>
    <label>Kode Kategori</label>
    &nbsp;&nbsp;
    <input type="text" value="<?php echo $data['kode_kategori']; ?>" name="#" disabled><br>
    <label>Kategori Buku</label>
    &nbsp;&nbsp;
    <input type="text" value="<?php echo $data['kategori_buku']; ?>" name="kategori_buku" required><br>
    <button type="submit">Submit</button>
    </form>
</body>
</html>