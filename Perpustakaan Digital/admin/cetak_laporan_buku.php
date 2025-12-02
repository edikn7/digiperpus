<!--Cetak Laporan Dokumen-->
<?php
    include '../config.php';
    $data = mysqli_query($config,"select * from buku");
    ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
    
</head>
<body>
    <h2 style="text-align: center;">Laporan Data Buku DigiPerpus</h2>
    <table border="1   " cellspacing="0" cellpadding="5" style="width: 100%; margin-top: 20px;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>ISBN</th>
                <th>Jumlah Buku</th>
                <th>Kategori</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            while($buku = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td style="text-align: center;"><?= $no++; ?></td>
                <td><?= $buku['judul']; ?></td>
                <td><?= $buku['pengarang']; ?></td>
                <td><?= $buku['penerbit']; ?></td>
                <td style="text-align: center;"><?= $buku['isbn']; ?></td>
                <td style="text-align: center;"><?= $buku['jumlah_buku']; ?></td>
                <td><?= $buku['kategori']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <script>
		window.print();
	</script>
    
</body>
</html>
    