<html>
<head>
    <title>Perpustakaan - Master Buku</title>
</head>
<body>
    <?php include('../header.php');
          include('../tools.php');
          $id_buku=$_POST['id_buku'];
          $sql_kategoribuku="select * from kategori_buku";
          $sql_buku="select * from buku where id_buku='$id_buku'";
          $hasil_kategoribuku=select($sql_kategoribuku);
          $hasil_buku=select($sql_buku);
          $data=$hasil_buku->fetch_assoc();
          ?>

    <h3>Edit Data Master Buku</h3>
    <form action="edit.php" method="post">
    <input type="hidden" value="<?php echo $id_buku; ?>" name="id_buku"/>
    <label>Kode Buku</label>
    <input type="text" value="<?php echo $data['kode_buku']; ?>" name="kode_buku" readonly ><br>
    <label>Kategori Buku</label>
    <select name="id_kategori">
    <?php 
    $idkategori=$data['id_kategori'];
    while($datakategori = $hasil_kategoribuku->fetch_assoc()) { 
    if($idkategori==$datakategori['id_kategori']){ ?>
    <option value="<?php echo $datakategori['id_kategori']; ?>"  selected="selected"><?php echo $datakategori['kategori_buku'];?>  </option>
    <?php }else{ ?>
    <option value="<?php echo $datakategori['id_kategori']; ?>" ><?php echo $datakategori['kategori_buku']; ?>  
        <?php }} ?>
    </select><br>
    <label>Nama Buku</label>
    <input type="text" value="<?php echo $data['nama_buku']; ?>" name="nama_buku" required><br>
    <label>ISBN</label>
    <input type="text" value="<?php echo $data['isbn']; ?>" name="isbn" required><br>
    <label>Penerbit</label>
    <input type="text" value="<?php echo $data['penerbit']; ?>" name="penerbit" required><br>
    <label>Penulis</label>
    <input type="text" value="<?php echo $data['penulis']; ?>" name="penulis" required><br>
    <label>Lokasi Buku</label>
    <input type="text" value="<?php echo $data['lokasi_buku']; ?>" name="lokasi_buku" required><br>
    <button type="submit">Submit</button>
    </form>
</body>
</html>