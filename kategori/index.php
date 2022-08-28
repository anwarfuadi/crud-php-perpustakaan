<html>
    <head>
        <title>Perpustakaan - Master Kategori</title>
    </head>

    <body>
        <?php include('../header.php') ?>
        <?php include('../tools.php') ?>

        <h3>Master Kategori</h3>
        <a href="formAdd.php">Tambah</a>
        <table border="1">
            <thead>
                <tr>
                    <th align="center">&nbsp;No.&nbsp;</th>
                    <th align="center">&nbsp;Kode Kategori&nbsp;</th>
                    <th align="center">&nbsp;Kategori Buku</th>
                    <th align="center"> Jumlah Buku</th>
                    <th colspan="2">Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $awal = microtime(true);

                $sql="SELECT k.*, COUNT(*) as jmlbuku FROM kategori_buku k INNER JOIN buku b ON k.id_kategori=b.id_kategori GROUP BY k.id_kategori;";
                $hasil=select($sql);

                $no = 1;
                while ($data = mysqli_fetch_array($hasil)) {
                ?>
                    <tr align="center">
                        <td>&nbsp;<?php echo $no; ?>&nbsp;</td>
                        <td align="center">&nbsp;<?php echo $data['kode_kategori']; ?>&nbsp;</td>
                        <td align="center"> <?php echo $data['kategori_buku']; ?> </td>
                        <td align="center"> <?php echo $data['jmlbuku']; ?> </td>
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

        <?php
        $akhir = microtime(true);
        $lama = $akhir - $awal;
        echo "<br>Time Execution : ".$lama." microsecond";
        ?>
    </body>
</html>