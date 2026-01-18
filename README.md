
---

## Soal 1 – Modul Rentan

### 1. Login (Brute Force)
- **Kerentanan:** Tidak ada pembatasan percobaan login
- **Parameter:** username, password
- **Dampak:** Pengambilalihan akun

### 2. Input Komentar (XSS)
- **Kerentanan:** Input tidak divalidasi dan ditampilkan kembali
- **Parameter:** comment
- **Dampak:** Eksekusi script di browser pengguna

### 3. Fetch URL (SSRF)
- **Kerentanan:** Server mengakses URL dari input user tanpa validasi
- **Parameter:** url
- **Dampak:** Akses resource internal server

---

## Soal 2 – Versi Aman (/secure)

### Kontrol Keamanan yang Diterapkan
- Hashing password menggunakan **bcrypt**
- Validasi & encoding input (`htmlspecialchars`)
- **CSRF token**
- **Whitelist URL** untuk mencegah SSRF

### Contoh Potongan Kode Inti
```php
// Password hashing
password_verify($input, $hash);

// XSS protection
htmlspecialchars($comment, ENT_QUOTES, 'UTF-8');

// CSRF protection
if ($_POST['token'] !== $_SESSION['token']) die("CSRF");

// SSRF protection
if (!in_array($host, $allowed)) die("Blocked");
