<?php
// Vercel: set DB_HOST, DB_NAME, DB_USER, DB_PASSWORD in Project Settings > Environment Variables.
// Optional: set DB_PORT (default 3306).
$host = getenv('DB_HOST') ?: 'localhost';
$dbname = getenv('DB_NAME') ?: 'tjap-daoen';
$username = getenv('DB_USER') ?: 'root';
$password = getenv('DB_PASSWORD') ?: '';
$port = getenv('DB_PORT') ?: '3306';

try {
    $pdo = new PDO(
        "mysql:host={$host};port={$port};dbname={$dbname};charset=utf8mb4",
        $username,
        $password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );
} catch (PDOException $e) {
    // Avoid exposing database credentials or internal connection details publicly.
    http_response_code(500);
    error_log('Database connection failed: ' . $e->getMessage());
    die('Koneksi database gagal. Periksa environment variables database di Vercel.');
}
