<?php
    include '../config.php';
    

   // Aksi untuk menambahkan buku baru ke database
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Ambil data dari form
        $judul_buku = $_POST['judul_buku']; 
        $pengarang = $_POST['pengarang'];
        $penerbit = $_POST['penerbit'];
        $isbn = $_POST['isbn'];
        $jumlah_buku = $_POST['jumlah_buku'];
        $kategori = $_POST['kategori'];

        // Handle upload cover buku
        $cover = $_FILES['cover']['name'];
        $target_dir = "../assets/img/";
        $target_file = $target_dir . basename($cover);
        move_uploaded_file($_FILES['cover']['tmp_name'], $target_file);

        // Insert data ke database
        $query = "INSERT INTO buku (judul, pengarang, penerbit, isbn, jumlah_buku, kategori, cover) VALUES ('$judul_buku', '$pengarang', '$penerbit', '$isbn', '$jumlah_buku', '$kategori', '$cover')";
        if (mysqli_query($config, $query)) {

            // Redirect ke halaman dashboard admin setelah berhasil menambahkan buku
            header("Location: ../admin/kelola_buku.php");
            exit();
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($config);
        }  
        mysqli_close($config);
    }
