<html>
<head>
    <title>Perpustakaan - Master Kategori</title>
</head>
<body>
    <?php include('../header.php') ?>
    <?php include('../tools.php') ?>

    <h3>Master Kategori</h3>
    <a href="formAdd.php">Tambah</a>
    <table border="1" cellpadding="1" cellspacing="1">
        <thead>
            <tr>
                <td align="center">&nbsp;No.&nbsp;</td>
                <td align="center">&nbsp;Kode Kategori&nbsp;</td>
                <td align="center">&nbsp;Kategori Buku&nbsp;</td>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php

$sql="SELECT * FROM kategori_buku";
$hasil=select($sql);

$no = 1;
    while ($data = mysqli_fetch_array($hasil)) {
        ?>
            <tr align="center">
                <td>&nbsp;<?php echo $no; ?>&nbsp;</td>
                <td align="center">&nbsp;<?php echo $data['kode_kategori']; ?>&nbsp;</td>
                <td align="center">&nbsp;<?php echo $data['kategori_buku']; ?>&nbsp;</td>
            <form action="formEdit.php" method="post" >
                <td><input type="hidden" value="<?php echo $data['id_kategori']; ?>" name="id_kategori"><button type="submit">Edit</button></form></td>
            <form action="delete.php" method="post" >
                <td><input type="hidden" value="<?php echo $data['id_kategori']; ?>" name="id_kategori"><button type="submit">Delete</button></form>
                </td>
            </tr>
        <?php
        $no++;
    }
?>
    </tbody>
</table>

</body>
</html>