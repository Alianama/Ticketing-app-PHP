# Sistem Tiket

**Sistem Tiket** adalah aplikasi sederhana untuk mengelola tiket dari tugas atau isu yang sedang menunggu atau sudah selesai. Aplikasi ini memungkinkan pengguna untuk menambahkan, mengedit, menghapus, dan melihat daftar tiket.

## Fitur

1. **Tambahkan Data Tiket**

   - Pengguna dapat menambahkan data tiket dengan mengeklik tombol "+ Tambah Tiket".
   - Setiap tiket mencakup informasi seperti nama, detail isu, dan tanggal isu.

2. **Daftar Tiket yang Menunggu**

   - Menampilkan daftar tiket yang sedang menunggu.
   - Pengguna dapat melihat, mengedit, menghapus, dan menandai tiket sebagai selesai dalam daftar ini.
   - Opsi untuk mencetak daftar tiket yang sedang menunggu juga tersedia.

3. **Daftar Tiket yang Selesai**

   - Menampilkan daftar tiket yang sudah selesai.
   - Pengguna dapat melihat, mengedit, menghapus, dan membatalkan status tiket menjadi menunggu.

4. **Pencarian Tiket**

   - Pengguna dapat mencari tiket berdasarkan nama atau informasi lainnya.

5. **Profil Pengguna**
   - Menampilkan nama pengguna yang sedang aktif.
   - Pengguna dapat logout.

## Cara Penggunaan

1. **Tambahkan Data Tiket**

   - Klik tombol "+ Tambah Tiket" di bagian "Tambah Data".
   - Isi formulir dengan informasi tiket yang sesuai.
   - Klik tombol "Submit" untuk menambahkan tiket.

2. **Edit Tiket**

   - Di daftar tiket yang sedang menunggu atau sudah selesai, klik tombol "Edit" pada tiket yang ingin diedit.
   - Isi formulir dengan informasi baru.
   - Klik tombol "Update" untuk menyimpan perubahan.

3. **Hapus Tiket**

   - Di daftar tiket yang sedang menunggu atau sudah selesai, klik tombol "Hapus" pada tiket yang ingin dihapus.
   - Konfirmasi penghapusan dengan memilih "Ya" atau "Batal."

4. **Tandai Sebagai Selesai**

   - Di daftar tiket yang sedang menunggu, klik tombol "Selesai" pada tiket yang sudah selesai.
   - Tiket akan dipindahkan ke daftar tiket yang sudah selesai.

5. **Kembali ke Menunggu**

   - Di daftar tiket yang sudah selesai, klik tombol "Batalkan Selesai" pada tiket yang ingin dikembalikan ke menunggu.
   - Tiket akan dipindahkan kembali ke daftar tiket yang sedang menunggu.

6. **Pencarian Tiket**

   - Masukkan kata kunci dalam kotak pencarian di bagian atas halaman.
   - Tekan tombol "Cari" atau tekan "Enter" pada keyboard.

7. **Logout**
   - Klik tombol profil di sudut kanan atas.
   - Pilih opsi "Logout" untuk keluar dari akun.

## Struktur Folder

- assets/
  - icon/
    - artience.svg
    - profil.svg
    - search.svg
    - print.svg
    - delete.svg
    - edit.svg
    - complete.svg
    - uncomplete.svg
    - logout.svg
    - profil-image.svg
  - styles/
    - style.css
  - script.js
- auth/
  - login.php
  - logout.php
- config/
  - koneksi.php
- pages/
  - add.php
  - edit.php
  - delete.php
  - complete.php
  - uncomplete.php
- Components/
  - component.php
- printcomplete.php
- printuncomplete.php
- index.php
- README.md
