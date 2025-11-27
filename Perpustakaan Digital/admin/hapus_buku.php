<?php
    include '../config.php';

    // Ambil ID buku dari parameter URL
    if (isset($_GET['id'])) {
        $id_buku = $_GET['id'];

        // Hapus buku dari database
        $query = "DELETE FROM buku WHERE id_buku='$id_buku'";
        if (mysqli_query($config, $query)) {
            // Redirect ke halaman dashboard admin setelah berhasil menghapus buku
            header("Location: dashboard_admin.php");
            exit();
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($config);
        }
    } else {
        echo "ID buku tidak ditemukan.";
    }

    mysqli_close($config);