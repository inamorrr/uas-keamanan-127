# Simulasi Keamanan Aplikasi Web

Aplikasi ini merupakan simulasi pengujian keamanan aplikasi web pada lingkungan localhost.
Tersedia dua versi aplikasi:
- /vulnerable (versi rentan)
- /secure (versi aman)

Aplikasi hanya digunakan untuk tujuan pembelajaran.

---

## Deskripsi Kerentanan

1. Login  
   Modul login rentan terhadap brute force karena tidak adanya pembatasan percobaan login
   dan penggunaan password tanpa hashing.

2. Input Komentar  
   Modul komentar rentan terhadap Cross Site Scripting (XSS) karena input pengguna
   ditampilkan kembali tanpa validasi dan encoding.

3. Fetch URL  
   Modul fetch URL rentan terhadap Server Side Request Forgery (SSRF) karena server
   mengakses URL yang ditentukan pengguna tanpa pembatasan.

---

## Teknik Mitigasi

- Hashing password menggunakan bcrypt
- Validasi dan encoding input (htmlspecialchars)
- Penerapan CSRF token
- Whitelist domain pada fetch URL

---

## Analisis Risiko Singkat

- Dampak:  
  Pengambilalihan akun, pencurian data sesi, dan akses resource internal server.

- Kemungkinan:  
  Tinggi pada versi rentan dan rendah pada versi aman.

- Prioritas Perbaikan:  
  Modul login → modul komentar → modul fetch URL.
