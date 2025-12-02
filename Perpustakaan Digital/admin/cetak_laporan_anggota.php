<!--Laporan Cetak Anggota-->
<?php
include '../config.php';
$data = mysqli_query($config,"select * from user WHERE level='Anggota'");
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota | Digiperpus</title>
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
    <h2>Data Anggota Perpustakaan Digital</h2>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Tanggal Bergabung</th>
            
        </tr>
        <?php 
        $no = 1;
        while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['nama']; ?></td>
            <td><?php echo $d['username']; ?></td>
            <td><?php echo $d['email']; ?></td>
            <td><?php echo $d['alamat']; ?></td>
            <td><?php echo $d['no_telepon']; ?></td>
            <td><?php echo $d['tgl_bergabung']; ?></td>
        </tr>
        <?php 
        }
        ?>
    </table>
    <script>
        window.print();
    </script>
</body>
</html>

