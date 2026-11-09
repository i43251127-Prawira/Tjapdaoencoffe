TJAP DAOEN COFFEE BAR — WEBSITE

Folder: tjap-daon-redesign
Local URL (XAMPP/Laragon): http://localhost/tjap-daon-redesign/
Database: tjap-daoen

1. Copy folder tjap-daoen into C:\laragon\www\
2. Start Apache and MySQL in Laragon.
3. Open phpMyAdmin.
4. Make sure database name is exactly: tjap-daoen
5. If database already exists, keep it. The included database.sql can be imported into a new database.
6. Open: http://localhost/tjap-daon-redesign/
7. Admin login: http://localhost/tjap-daon-redesign/admin/login.php
   Username: admin
   Password: admin123

The redesign uses the supplied Tjap Daoen photos locally in assets/img and does not depend on remote image URLs for the main visuals.

REVISI FOTO DAN HARGA PRODUK (13 Oktober 2026)
- Arabica Original: Rp85.000
- Arabica Wine: Rp125.000
- Arabica Blue Mountain: Rp100.000
- Robusta: Rp75.000
Foto produk sudah diperbarui dengan crop lebih fokus ke kemasan kopi. Harga tampilan homepage, katalog, detail, dan admin mengikuti harga revisi.

REVISI FOTO DAN HARGA (13 Oktober 2026)
- Foto produk diganti menggunakan foto asli yang dikirim pemilik brand dan dicrop agar kemasan kopi lebih fokus.
- Arabica Original: Rp85.000
- Arabica Wine: Rp125.000
- Arabica Blue Mountain: Rp100.000
- Robusta: Rp75.000
- Untuk memperbarui harga di database yang sudah ada, buka phpMyAdmin, pilih database tjap-daoen, tab SQL, lalu jalankan isi file update-harga.sql.


CATATAN LOCALHOST STANDAR
- Website menggunakan PHP + MySQL lokal (PDO), bukan konfigurasi InfinityFree.
- Pastikan Apache dan MySQL aktif.
- Buat database bernama tjap-daoen, lalu import database.sql melalui phpMyAdmin.
- Konfigurasi database lokal ada di config/database.php (host localhost, user root, password kosong secara default).
- Link navigasi dan aset dibuat relatif agar tetap berfungsi selama folder project berada di document root.
