TJAP DAOEN — PAKET DEPLOY VERCEL

PENTING
Project asli menggunakan PHP + MySQL. Paket ini menambahkan konfigurasi untuk menjalankan PHP melalui community runtime vercel-php (bukan runtime resmi Vercel). Untuk menjalankan situs dengan data produk dan admin, database MySQL harus tersedia secara online. Database localhost di komputer tidak bisa diakses oleh Vercel.

LANGKAH DEPLOY
1. Extract ZIP ini.
2. Upload folder `tjap-daon-redesign` ke GitHub sebagai repository.
3. Import repository tersebut ke Vercel (Add New > Project).
4. Framework Preset: Other. Root Directory: `tjap-daon-redesign` jika repository berisi folder pembungkus; jika isi folder project langsung di root repository, gunakan `.`.
5. Deploy.

DATABASE ONLINE
1. Buat database MySQL online pada provider yang mengizinkan koneksi dari Vercel.
2. Import file `database.sql` ke database tersebut melalui phpMyAdmin/provider.
3. Di Vercel > Project > Settings > Environment Variables, isi:
   DB_HOST = hostname database online
   DB_NAME = nama database
   DB_USER = username database
   DB_PASSWORD = password database
   DB_PORT = 3306 (atau port dari provider)
4. Redeploy setelah menambahkan environment variables.

CATATAN
- `api/` berisi salinan PHP yang dipakai oleh runtime Vercel. Folder dan file asli tetap dipertahankan agar project masih bisa dijalankan di Laragon/XAMPP.
- Folder `assets/` tetap menjadi sumber file CSS, JavaScript, dan gambar.
- Runtime `vercel-php@0.9.0` adalah community-maintained dan tidak didukung resmi oleh Vercel. Vercel merekomendasikan container runtime untuk deployment PHP baru. Jika build runtime ini ditolak atau bermasalah, gunakan hosting PHP biasa atau migrasikan aplikasi ke framework/runtime yang didukung.
- Login admin memakai data dari tabel `admin` pada database. Jika password default dari README tidak cocok dengan hash di database.sql, reset hash password admin di database online sebelum digunakan.
- Jangan masukkan kredensial database ke dalam source code atau commit ke GitHub.
- Serverless runtime dapat memiliki batasan penyimpanan sesi. Uji login admin setelah deployment; untuk penggunaan admin yang penting/ramai, gunakan penyimpanan sesi terpusat atau autentikasi yang sesuai untuk serverless.

LOCALHOST
Versi asli masih bisa dijalankan dengan XAMPP/Laragon seperti sebelumnya. Konfigurasi lokal asli ada di `config/database.php`.
