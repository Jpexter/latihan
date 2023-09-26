<?php
session_start();

class CSRF
{
    public static function create_token()
    {
        $token = md5(time());
        $_SESSION['token'] = $token;

        echo "<input name='token' value='$token' type='hidden'>";
    }

    public static function validate($token)
    {
        return isset($_SESSION['token']) && $_SESSION['token'] == $token;
    }
}

// Session Start: Pertama, kode tersebut memanggil session_start(); yang digunakan untuk memulai atau melanjutkan sesi PHP. Ini penting karena token CSRF disimpan dalam sesi.

// create_token Method:

// Method ini bertugas untuk membuat dan mengatur token CSRF.
// Ini menghasilkan token dengan menggunakan md5(time()), yang menggabungkan nilai waktu saat ini untuk membuat token yang unik (meskipun MD5 bukanlah cara terbaik untuk menghasilkan token CSRF yang aman).
// Token yang dihasilkan disimpan dalam variabel $_SESSION['token'] sehingga dapat digunakan di seluruh aplikasi selama sesi berlangsung.
// Token CSRF ditambahkan ke dalam formulir sebagai input tersembunyi dengan nama "token". Ini memungkinkan token tersebut dikirim bersama dengan permintaan formulir saat formulir dikirimkan.
// validate Method:

// Method ini digunakan untuk memeriksa apakah token CSRF yang dikirim dalam permintaan cocok dengan token yang disimpan dalam sesi.
// Ini menerima satu parameter, yaitu token CSRF yang dikirim dalam permintaan.
// Kemudian, itu memeriksa apakah variabel sesi $_SESSION['token'] ada dan apakah nilainya sama dengan token yang dikirim. Jika cocok, metode ini akan mengembalikan true, menunjukkan bahwa token CSRF valid. Jika tidak cocok, itu akan mengembalikan false.
// Dengan mengggunakan kelas CSRF ini, Anda dapat dengan mudah menghasilkan dan memvalidasi token CSRF dalam aplikasi PHP Anda. Contohnya, Anda dapat menggunakan CSRF::create_token(); untuk menambahkan token CSRF ke dalam formulir Anda dan 
// CSRF::validate($token); untuk memeriksa token saat formulir dikirim. Pastikan Anda memanggil metode create_token untuk menghasilkan token sebelum menampilkan formulir dan memanggil validate ketika menerima permintaan POST untuk memeriksa token.
