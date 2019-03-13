<# Langkah penggunaan travis-ci>

<1. Akun Github, travis-ci -><https://travis-ci.org
2. Download composer, running, hasil composer.phar
3. file composer.json
4. running `php composer.phar install`
5. file `phpunit.xml`
6. konfigurasi file `.travis.yml`
7. buat repository project di github.com
8. kaitkan repository github di travis-ci
9. commit and push data ke github.com>

# Aplikasi Perekaman Data Mahasiswa

Aplikasi ini digunakan untuk melakukan perekaman data mahasiswa, aplikasi ini dibangun dengan menggunakan bahasa pemrograman PHP, sehingga apabila ingin melakukan instalasi / pemasangan, perlu dipersiapkan lingkungannya seperti berikut :

1. Web Server yang mendukung PHP versi 5 keatas
2. Basis data MySQL atau MariaDB, pengembangan aplikasi ini menggunakan basis data MariaDB versi 10.3.13

Konfigurasi koneksi ke sistem basis data ada pada berkas `koneksi.php`, silahkan ubah berkas ini sesuai dengan konfigurasi sistem basis data yang akan dihubungkan.


