CREATE DATABASE IF NOT EXISTS `tjap-daoen` CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `tjap-daoen`;
CREATE TABLE IF NOT EXISTS admin (id INT AUTO_INCREMENT PRIMARY KEY,username VARCHAR(50) NOT NULL UNIQUE,password VARCHAR(255) NOT NULL);
INSERT INTO admin (username,password) SELECT 'admin', '$2y$10$92IXUNpkjZ1e9l9Z9xGmQe4J2Y7H3r8V0v6u5b4c3d2e1f0g9h8i7' WHERE NOT EXISTS (SELECT 1 FROM admin WHERE username='admin');
CREATE TABLE IF NOT EXISTS produk (id INT AUTO_INCREMENT PRIMARY KEY,nama VARCHAR(100) NOT NULL,kategori VARCHAR(50) NOT NULL,deskripsi TEXT,harga DECIMAL(12,2) NOT NULL,stok INT NOT NULL DEFAULT 0,ukuran VARCHAR(50),gambar VARCHAR(255),created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP);
INSERT INTO produk (nama,kategori,deskripsi,harga,stok,ukuran,gambar) SELECT * FROM (SELECT 'Arabica Original','Arabica','Karakter fruity dan aromatic, cocok dinikmati dengan berbagai metode seduh.',85000,20,'±100 gr','') x WHERE NOT EXISTS (SELECT 1 FROM produk WHERE nama='Arabica Original');
INSERT INTO produk (nama,kategori,deskripsi,harga,stok,ukuran,gambar) SELECT * FROM (SELECT 'Arabica Blue Mountain','Arabica','Karakter fruity dan smooth dengan aroma yang nyaman untuk dinikmati.',100000,20,'±100 gr','') x WHERE NOT EXISTS (SELECT 1 FROM produk WHERE nama='Arabica Blue Mountain');
INSERT INTO produk (nama,kategori,deskripsi,harga,stok,ukuran,gambar) SELECT * FROM (SELECT 'Arabica Wine','Arabica','Varian Arabica dengan karakter fruity yang distinctive.',125000,15,'±100 gr','') x WHERE NOT EXISTS (SELECT 1 FROM produk WHERE nama='Arabica Wine');
INSERT INTO produk (nama,kategori,deskripsi,harga,stok,ukuran,gambar) SELECT * FROM (SELECT 'Robusta','Robusta','Rasa lebih pahit dengan cita rasa kopi yang kuat dan karakter bold.',100000,25,'500 gr','') x WHERE NOT EXISTS (SELECT 1 FROM produk WHERE nama='Robusta');

-- Harga terbaru TJAP DAOEN (per 13 Oktober 2026)
UPDATE produk SET harga=85000 WHERE nama='Arabica Original';
UPDATE produk SET harga=100000 WHERE nama='Arabica Blue Mountain';
UPDATE produk SET harga=125000 WHERE nama='Arabica Wine';
UPDATE produk SET harga=75000 WHERE nama='Robusta';
