<?php
    include '../config.php';

    // Aksi untuk mengedit data buku di database
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Ambil data dari form
        $id_buku = $_POST['id_buku'];
        $judul_buku = $_POST['judul'];
        $pengarang = $_POST['pengarang'];
        $penerbit = $_POST['penerbit'];
        $isbn = $_POST['isbn'];
        $jumlah_buku = $_POST['jumlah_buku'];
        $kategori = $_POST['kategori'];

        // Handle upload cover buku jika ada
        if (isset($_FILES['cover']) && $_FILES['cover']['error'] === UPLOAD_ERR_OK) {
            $cover = $_FILES['cover']['name'];
            $target_dir = "../assets/img/";
            $target_file = $target_dir . basename($cover);
            move_uploaded_file($_FILES['cover']['tmp_name'], $target_file);

            // Update data buku dengan cover baru
            $query = "UPDATE buku SET judul='$judul_buku', pengarang='$pengarang', penerbit='$penerbit', isbn='$isbn', jumlah_buku='$jumlah_buku', kategori='$kategori', cover='$cover' WHERE id_buku='$id_buku'";
        } else {
            // Update data buku tanpa mengubah cover
            $query = "UPDATE buku SET judul='$judul_buku', pengarang='$pengarang', penerbit='$penerbit', isbn='$isbn', jumlah_buku='$jumlah_buku', kategori='$kategori' WHERE id_buku='$id_buku'";
        }

        if (mysqli_query($config, $query)) {

            // Redirect ke halaman dashboard admin setelah berhasil mengedit buku
            header("Location: ../admin/kelola_buku.php");
            exit();
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($config);
        }  
        mysqli_close($config);
    }