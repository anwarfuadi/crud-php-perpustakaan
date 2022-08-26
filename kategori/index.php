<html>
<head>
    <title>Perpustakaan - Master Kategori</title>
</head>
<body>
    <?php include('../header.php') ?>

    <h3>Master Kategori</h3>
    <a href="formAdd.php">Tambah</a>
    <table border="1" cellpadding="1" cellspacing="1">
        <thead>
            <tr>
                <td align="center">&nbsp;No.&nbsp;</td>
                <td align="center">&nbsp;Kode Kategori&nbsp;</td>
                <td align="center">&nbsp;Kategori Buku&nbsp;</td>
            </tr>
        </thead>
        <tbody>
        <?php
$query = mysqli_query($conn, "select * from kategori_buku");
$no = 1;
    while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr align="center">
                <td>&nbsp;<?php echo $no; ?>&nbsp;</td>
                <td align="center">&nbsp;<?php echo $data['kode_kategori']; ?>&nbsp;</td>
                <td align="center">&nbsp;<?php echo $data['kategori_buku']; ?>&nbsp;</td>
            </tr>
        <?php
        $no++;
    }
?>
    </tbody>
</table>

</body>
</html>