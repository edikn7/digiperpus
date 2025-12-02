<!--Laporan-->
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
    <title>Data Buku | Digiperpus</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body, html {
            font-family: 'Poppins', sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h2>Data Buku Perpustakaan Digital</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>ISBN</th>
            <th>Jumlah Buku</th>
            <th>Kategori</th>
        </tr>
        <?php 
        $no = 1;
        while($buku = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $buku['judul']; ?></td>
            <td><?php echo $buku['pengarang']; ?></td>
            <td><?php echo $buku['penerbit']; ?></td>
            <td><?php echo $buku['isbn']; ?></td>
            <td><?php echo $buku['jumlah_buku']; ?></td>
            <td><?php echo $buku['kategori']; ?></td>
        </tr>
        <?php } ?>
    </table>
    <script>
        window.print();
    </script>
</body>
</html>