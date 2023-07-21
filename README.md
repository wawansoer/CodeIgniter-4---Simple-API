## This is RESTful API using CodeIgniter 4.3.2 

### How To Run 

1. Saya menggunakan PHP 8.2 Ketika develop aplikasi ini 
1. Menggunakan MySQL Sebagai Database 
1. Jalankan perintah `composer install` 
1. Atur file `.env` untuk koneksi database dll 
1. pastikan sudah terkoneksi dengan baik dengan database, jalankan perintah `php spark migrate` untuk membuat tabel 
1. jalankan `php spark routes` untuk melihat semua endpoin API
1. siap dicoba

### What's Inside 

- Semua API yang diminta dapat di akses dengan melihat routes yang ada seperti pada step 6 diatas
- Terdapat Helper yang berfungsi untuk melakukan costum respond pada API yang dapat dilihat pada `HobiController`
- Contoh Penggunaan Entity yakni pada respon end point API `http:/localhost:8080/api/v1/hobi` dengan method `GET` dimana data `id` yang harusnya bertipe data `INT` dirubah menjadi `string` begitu pula pada `nama` dirubah dari `string` menjadi `int` 

