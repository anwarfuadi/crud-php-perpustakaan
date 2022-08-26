<html>
<head>
    <title>Perpustakaan - Master Buku</title>
</head>
<body>
    <?php include('../header.php');
          include('../tools.php');
          $sql="select * from kategori_buku";
          $hasil=select($sql); ?>

    <h3>Edit Data Master Buku</h3>
    <form action="">
    <label>Kode Buku</label>
    <input type="text" value="" name="kode_buku"/>
    <label>Kategori Buku</label>
    <input type="text" value="" name="id_kategori"/>
    <label>Nama Buku</label>
    <input type="text" value="" name="nama_buku"/>
    <label>ISBN</label>
    <input type="text" value="" name="isbn"/>
    <label>Penerbit</label>
    <input type="text" value="" name="penerbit"/>
    </form>
</body>
</html>