<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sudut Pajak</title>
    <!-- Tambahkan link ke Tailwind CSS -->
    <script src="{{ asset('style/tailwindcss3.4.1.js') }}">
    </script>
    <style>
        /* CSS untuk mengatur tata letak gambar tidak diperlukan lagi */

        /* Gaya baru untuk paragraf */
        p {
            font-family: Arial, sans-serif;
            /* Menggunakan font Arial */
            font-size: 20px;
            /* Ukuran font */
            line-height: 1.5;
            /* Jarak antar baris */
            color: #333;
            /* Warna teks */
            text-align: justify;
            /* Teks rata kanan dan kiri */
            margin-bottom: 20px;
            /* Jarak antara paragraf */
        }
    </style>
</head>

<body class="bg-gray-100">
    <!-- Tambahkan kelas background warna abu-abu pada body menggunakan Tailwind CSS -->
    <center>
        <h1 class="text-2xl font-bold my-4">Selamat Datang di Website Sudut Pajak</h1>
        <!-- Menggunakan kelas Tailwind untuk mengatur ukuran teks dan margin atas/bawah -->
    </center>
    <p class="mx-1">
        <!-- Menggunakan kelas Tailwind untuk mengatur margin horizontal pada paragraf -->
        Kami "sudut pajak" merupakan layanan pajak berbasis website.
        Saat ini sudut pajak memberikan layanan perpajakan online secara gratis baik konsultasi maupun secara teori dengan tujuan untuk memberikan solusi permasalahan perpajakan oleh wajib pajak yang terdaftar dan yang belum terdaftar.
        Fokus utama sudut pajak saat ini adalah untuk mendampingi pelaku UMKM dalam memahami peraturan perpajakan.
    </p>

    <div class="flex flex-col items-center mt-0">
        <!-- Menggunakan kelas Flexbox dan align-center untuk mengatur tata letak gambar -->
        <img src="{{ asset('img/BeritaPajak.jpg') }}" alt="BeritaPajak" class="max-w-full mb-1">
        <!-- Menggunakan kelas Tailwind untuk mengatur lebar maksimum gambar dan margin bawah -->
        <img src="{{ asset('img/GambarPajak.png') }}" alt="GambarPajak" class="max-w-full">
        <!-- Menggunakan kelas Tailwind untuk mengatur lebar maksimum gambar -->
    </div>
</body>

</html>