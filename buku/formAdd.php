<html>
<head>
    <title>Perpustakaan - Master Buku</title>
</head>
<body>
    <?php include('../header.php');
     include('../tools.php');?>

    <h3>Tambah Data Master Buku</h3>
    <form action="add.php" method="post">
    <label>Kategori Buku</label>
    <select name="id_kategori" id="id_kategori">
    <?php 
     $sql="SELECT * FROM kategori_buku";
     $hasil=select($sql);
     
    while($kategori = $hasil->fetch_assoc()) { ?>
    <option value="<?php echo $kategori['id_kategori']; ?>"><?php echo $kategori['kategori_buku']; ?>  </option>
   
    <?php } ?> 
  </select><br>
    <label>Judul</label>
    <input type="text" name="nama_buku" required><br>
    <label>isbn</label>
    <input type="text" name="isbn" required><br>
    <label>penerbit</label>
    <input type="text" name="penerbit" required><br>
    <label>tahun</label>
    <input type="number" name="tahun_buku" required><br>
    <button type="submit">Submit</button>
    </form>
</body>
</html>