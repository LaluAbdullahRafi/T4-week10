<?php
// Konfigurasi koneksi
$host    = "localhost";
$dbname  = "inventaris_db";
$user    = "root";
$pass    = "";

// try-catch: coba koneksi, kalau gagal tangkap errornya
try {
    $pdo = new PDO(
        // DSN (Data Source Name): format "driver:host=...;dbname=...;charset=..."
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $user,
        $pass,
        [
            // Tampilkan error sebagai Exception (bukan diam-diam gagal)
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            // Hasil fetch otomatis berupa array asosiatif ['kolom' => 'nilai']
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );
} catch (PDOException $e) {
    // Jika koneksi gagal, tampilkan pesan error dan hentikan script
    die("Koneksi gagal: " . $e->getMessage());
}
// Variabel $pdo sekarang siap digunakan di file lain
?>