<?php
session_start();
include '../config.php';

// Pastikan hanya anggota yang login
if (!isset($_SESSION['level']) || $_SESSION['level'] !== 'Anggota') {
    header("Location: ../login.php");
    exit;
}

// Ambil ID user dari session (lebih aman)
$id_user = $_SESSION['id'];
$id_buku = $_POST['id_buku'] ?? null;

// Validasi input
if (!$id_buku) {
    echo "<script>alert('ID buku tidak ditemukan!'); window.location='dashboard.php';</script>";
    exit;
}

// Pastikan buku ada
$cekBuku = mysqli_query($config, "SELECT * FROM buku WHERE id_buku='$id_buku'");
if (mysqli_num_rows($cekBuku) == 0) {
    echo "<script>alert('Buku tidak ditemukan!'); window.location='dashboard.php';</script>";
    exit;
}

// Cek apakah user sudah meminjam buku ini dan belum dikembalikan
$cekPinjam = mysqli_query($config, "
    SELECT * FROM peminjaman 
    WHERE id_user='$id_user' AND id_buku='$id_buku' AND status='Dipinjam'
");

if (mysqli_num_rows($cekPinjam) > 0) {
    echo "<script>alert('Kamu sudah meminjam buku ini!'); window.location='dashboard.php';</script>";
    exit;
}

// Proses peminjaman
$tgl_pinjam = date('Y-m-d');
$tgl_kembali = date('Y-m-d', strtotime('+7 days'));

$insert = mysqli_query($config, "
    INSERT INTO peminjaman (id_user, id_buku, tanggal_pinjam, tanggal_kembali, status)
    VALUES ('$id_user', '$id_buku', '$tgl_pinjam', '$tgl_kembali', 'Dipinjam')
");

if ($insert) {
    echo "<script>alert('Peminjaman berhasil!'); window.location='riwayat_peminjaman.php';</script>";
} else {
    echo "<script>alert('Peminjaman gagal!'); window.location='dashboard.php';</script>";
}
?>