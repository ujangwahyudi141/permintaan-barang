<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Web Permintaan Barang

Aplikasi ini dibuat untuk proses permintaan barang dibangun dengan LARAVEL dan VueJS, alur bisnis dan analisis teori di dapatkan ketika pengalaman praktek kerja industri semasa SMK. Seperti, dalam alur bisnis pada permintaan material disana:

- Mengambil Formulir permintaan barang
- Mengisi Formulir
- Meminta TTD/approve atasan terkait
- Menyerahkan Formulir yang telah di approve ke admin warehouse untuk mendapat kan material

Berdasarkan analisis teori tersebut maka aplikasi permintaan barang ini memiliki 3 Aktor :
- manager warehouse, dengan usecase (melihat list data barang, melihat list permintaan barang yang perlu di setujui, data pemasukan material, data pengeluaran material)
- admin warehouse, dengan usecase (melihat list data barang, melihat list permintaan dan statusnya, mengelola data pengguna)
- pemohon material, dengan usecase (melihat data barang, membuat permintaan barang, mencetak bukti permintaan telah approve)

## Keterangan
Aplikasi ini belum sepenuhnya selesai masih banyak fitur yang perlu di selesaikan (persetujuan manager, pemasukan dan pengeluaran material, mencetak bukti telah approve) namun untuk beberapa penugasan dalam pembuatan aplikasi ini telah terpenuhi, yaitu:
- membuat seed
- membuat form permintaan barang dengan input nik, nama dan departemen otomatis muncul
- satu permintaan dapat membentuk list 

## Cara Akses
- Login sebagai manager dengan memasukan nik(30) dan password(12345)
- Login sebagai admin warehouse memasukan nik(3215050304980002) dan password(12345)
- Login sebagai pemohon material nik(3215052406980001) dan password(12345)

