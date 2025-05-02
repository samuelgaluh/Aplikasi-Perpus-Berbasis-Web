# Aplikasi Perpustakaan Cihuy
## Deskripsi
Aplikasi Perpustakaan Cihuy adalah sistem manajemen perpustakaan berbasis web yang dikembangkan menggunakan PHP dan MySQL. Aplikasi ini dirancang untuk memudahkan pengelolaan data perpustakaan seperti data anggota, buku, peminjaman, dan pengembalian.

## Fitur
- Manajemen data anggota
- Katalog buku dan kategori buku
- Sistem peminjaman dan pengembalian buku
- Dashboard admin dengan statistik
- Manajemen administrator
- Sistem pesan antar pengguna
- Laporan perpustakaan
## Persyaratan Sistem
- PHP 7.0 atau lebih tinggi
- MySQL 5.6 atau lebih tinggi
- Web server (Apache/Nginx)
- XAMPP/WAMP/LAMP (untuk pengembangan lokal)
## Instalasi
1. Clone repository ini ke direktori web server Anda:
2. Import database:
   
   - Buat database baru dengan nama db_perpustakaan
   - Import file SQL dari folder database/db_perpustakaan.sql
3. Konfigurasi koneksi database:
   
   - Buka file config/koneksi.php
   - Sesuaikan pengaturan koneksi database:
4. Akses aplikasi melalui browser:
## Struktur Direktori
## Akun Default
### Administrator
- Username: admin
- Password: admin123
### Anggota
- Username: anggota
- Password: anggota123
## Penggunaan
1. Login sebagai administrator untuk mengelola seluruh sistem
2. Tambahkan data anggota, buku, dan kategori
3. Kelola peminjaman dan pengembalian buku
4. Lihat laporan dan statistik perpustakaan
## Kontribusi
Jika Anda ingin berkontribusi pada proyek ini, silakan ikuti langkah-langkah berikut:

1. Fork repository
2. Buat branch fitur baru ( git checkout -b fitur-baru )
3. Commit perubahan Anda ( git commit -m 'Menambahkan fitur baru' )
4. Push ke branch ( git push origin fitur-baru )
5. Buat Pull Request
