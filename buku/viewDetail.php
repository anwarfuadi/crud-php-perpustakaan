<html>
<head>
    <title>Perpustakaan - Master Buku</title>
</head>
<body>
    <?php include('../header.php');
          include('../tools.php');
          $id_buku=$_GET['id_buku'];
          $sql_buku="select * from buku,kategori_buku where buku.id_kategori=kategori_buku.id_kategori and id_buku='$id_buku'";
          $hasil_buku=select($sql_buku);
          $data=$hasil_buku->fetch_assoc();
          ?>

    <h3>Detail Data Master Buku</h3>
    Kode Buku :
    <?php echo $data['kode_buku']; ?><br/>
    Kategori Buku
    <?php echo $data['kategori_buku'];?> <br/>
    Nama Buku : 
    <?php echo $data['nama_buku']; ?> <br/>
    ISBN : 
    <?php echo $data['isbn']; ?><br/>
    Penerbit: 
    <?php echo $data['penerbit']; ?><br/>
    Penulis:
    <?php echo $data['penulis']; ?><br/>
    Lokasi Buku:
    <?php echo $data['lokasi_buku']; ?><br/>

</body>
</html>