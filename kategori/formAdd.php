<html>
    <head>
        <title>Perpustakaan - Master Kategori</title>
    </head>
    <body>
        <?php include '../header.php'?>
        <h3>Tambah Data Master Kategori Buku</h3>
        <form action="add.php" method="post">
            <label>Kategori Buku</label>
            <input type="text" name="kategori" required><br>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>