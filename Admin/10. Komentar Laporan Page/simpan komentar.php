<?php
include 'koneksi.php';

// Fungsi untuk membersihkan input dari potensi serangan SQL injection
function cleanInput($data, $koneksi) {
    return mysqli_real_escape_string($koneksi, htmlspecialchars(strip_tags($data)));
}

// Pastikan data yang diterima dari form ada
if (isset($_POST['id_laporan'], $_POST['username'], $_POST['deskripsi'])) {
    // Ambil data dari form dan bersihkan dari potensi serangan SQL injection
    $id_laporan = cleanInput($_POST['id_laporan'], $koneksi);
    $username = cleanInput($_POST['username'], $koneksi);
    $deskripsi = cleanInput($_POST['deskripsi'], $koneksi);

    // Validasi di sisi server
    if (empty($id_laporan) || empty($username) || empty($deskripsi)) {
        header("Location: ../10. Komentar Laporan Page/Komentar Laporan.php?id=$id_laporan");
        exit;
    }

    // Gunakan prepared statement untuk mencegah SQL injection
    $query = "INSERT INTO tb_komentar (id_laporan, username, deskripsi) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($koneksi, $query);
    mysqli_stmt_bind_param($stmt, 'sss', $id_laporan, $username, $deskripsi);

    // Eksekusi query
    $result = mysqli_stmt_execute($stmt);

    // Periksa apakah query berhasil dijalankan
    if ($result) {
        echo "Komentar berhasil disimpan.";
        // Arahkan pengguna ke halaman komentar_laporan.php dengan menyertakan id_laporan
        header("Location: ../10. Komentar Laporan Page/Komentar Laporan.php?id=$id_laporan");
        exit(); // Pastikan tidak ada output lebih lanjut setelah header
    } else {
        echo "Gagal menyimpan komentar. Silakan coba lagi.";
    }

    // Tutup statement
    mysqli_stmt_close($stmt);
} else {
    echo "Data tidak lengkap. Silakan isi semua kolom.";
}

// Tutup koneksi database
mysqli_close($koneksi);
?>
