<?php
// Pastikan $base_url sudah didefinisikan sebelum file ini di-include.
// Misalnya, di file config.php
// require_once '../config/config.php'; // Contoh

$base_url = "http://localhost/elite/"; // Contoh jika $base_url belum didefinisikan
$last_updated_date = date('d F Y', strtotime('2025-07-10')); // Menggunakan tanggal yang Anda sebutkan
$contact_email = "support@elite.com"; // Ganti dengan email kontak Anda
$company_name = "International Elite"; // Nama perusahaan Anda
?>
<!DOCTYPE html>
<html lang="id" class="layout-navbar-fixed light-style layout-compact" dir="ltr" data-theme="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Kebijakan Privasi - <?= htmlspecialchars($company_name); ?></title>
    <link rel="icon" type="image/x-icon" href="<?= $base_url; ?>assets/img/icons/brands/fox.png" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $base_url; ?>assets/vendor/css/core.css" />
    <link rel="stylesheet" href="<?= $base_url; ?>assets/css/demo.css" />
    <style>
        body {
            background-color: #f8f9fa;
            /* Warna latar belakang lembut */
            font-family: 'Public Sans', sans-serif;
            color: #333;
        }

        .card {
            border-radius: 1rem;
            /* Sudut lebih membulat */
            box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.08);
            /* Bayangan lebih halus dan menonjol */
        }

        .card-body {
            padding: 3rem;
            /* Padding yang lebih lega */
        }

        h4.mb-4 {
            /* Menyesuaikan h4 untuk judul utama */
            font-weight: 700;
            color: #343a40;
            margin-bottom: 1.5rem !important;
            text-align: center;
            /* Judul utama di tengah */
        }

        h5 {
            font-weight: 600;
            color: #495057;
            margin-top: 2.5rem;
            /* Jarak atas untuk setiap bagian */
            margin-bottom: 0.8rem;
            border-bottom: 1px solid #e9ecef;
            /* Garis bawah tipis */
            padding-bottom: 0.5rem;
        }

        p {
            line-height: 1.8;
            /* Jarak baris lebih lega */
            font-size: 1.05rem;
            color: #555;
            margin-bottom: 1rem;
            /* Jarak antar paragraf */
        }

        p.text-muted strong {
            /* Untuk tanggal terakhir diperbarui */
            color: #6c757d;
        }

        p.small {
            font-size: 0.875em;
            /* Ukuran font lebih kecil untuk info tambahan */
        }

        /* Responsif padding */
        @media (max-width: 767.98px) {
            .card-body {
                padding: 1.5rem;
            }

            h4.mb-4 {
                font-size: 1.75rem;
            }

            h5 {
                font-size: 1.25rem;
            }

            p {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
    <div class="my-5 py-3 container">
        <div class="justify-content-center row">
            <div class="col-lg-9 col-md-10">
                <div class="shadow-lg border-0 rounded-4 card">
                    <div class="p-4 p-md-5 card-body">
                        <h4 class="mb-4 text-center">Kebijakan Privasi</h4>
                        <p class="mb-5 text-muted text-center small">Terakhir diperbarui: <strong class="text-dark"><?= $last_updated_date; ?></strong></p>

                        <p class="mb-4 lead">Selamat datang di Kebijakan Privasi <?= htmlspecialchars($company_name); ?>. Kebijakan ini menjelaskan bagaimana kami mengumpulkan, menggunakan, dan melindungi informasi pribadi Anda saat Anda menggunakan layanan kami.</p>

                        <h5 class="mt-5">Informasi yang Kami Kumpulkan</h5>
                        <p>Kami mengumpulkan berbagai jenis informasi untuk menyediakan dan meningkatkan Layanan kami kepada Anda.</p>
                        <h6>Data Pribadi</h6>
                        <p>Saat menggunakan Layanan kami, kami mungkin meminta Anda untuk memberikan kami informasi pengenal pribadi tertentu yang dapat digunakan untuk menghubungi atau mengidentifikasi Anda ("Data Pribadi"). Informasi pengenal pribadi meliputi, namun tidak terbatas pada:</p>
                        <ul>
                            <li>Alamat Email</li>
                            <li>Nama Depan dan Nama Belakang</li>
                            <li>Nomor Telepon</li>
                            <li>Alamat, Provinsi, Negara Bagian, Kode Pos, Kota</li>
                            <li>Cookies dan Data Penggunaan</li>
                        </ul>

                        <h6>Data Penggunaan</h6>
                        <p>Kami juga dapat mengumpulkan informasi tentang bagaimana Layanan diakses dan digunakan ("Data Penggunaan"). Data Penggunaan ini dapat mencakup informasi seperti alamat Protokol Internet komputer Anda (misalnya alamat IP), jenis browser, versi browser, halaman-halaman Layanan kami yang Anda kunjungi, waktu dan tanggal kunjungan Anda, waktu yang dihabiskan di halaman-halaman tersebut, pengenal perangkat unik dan data diagnostik lainnya.</p>

                        <h5 class="mt-5">Penggunaan Informasi</h5>
                        <p>Data yang dikumpulkan oleh <?= htmlspecialchars($company_name); ?> digunakan untuk berbagai tujuan:</p>
                        <ul>
                            <li>Untuk menyediakan dan memelihara Layanan</li>
                            <li>Untuk memberi tahu Anda tentang perubahan pada Layanan kami</li>
                            <li>Untuk memungkinkan Anda berpartisipasi dalam fitur interaktif Layanan kami saat Anda memilih untuk melakukannya</li>
                            <li>Untuk memberikan dukungan pelanggan</li>
                            <li>Untuk memberikan analisis atau informasi berharga sehingga kami dapat meningkatkan Layanan</li>
                            <li>Untuk memantau penggunaan Layanan</li>
                            <li>Untuk mendeteksi, mencegah dan mengatasi masalah teknis</li>
                        </ul>

                        <h5 class="mt-5">Keamanan Informasi</h5>
                        <p>Keamanan data Anda penting bagi kami, tetapi ingat bahwa tidak ada metode transmisi melalui Internet, atau metode penyimpanan elektronik yang 100% aman. Meskipun kami berusaha untuk menggunakan cara-cara yang dapat diterima secara komersial untuk melindungi Data Pribadi Anda, kami tidak dapat menjamin keamanan mutlaknya.</p>

                        <h5 class="mt-5">Pengungkapan Informasi Kepada Pihak Ketiga</h5>
                        <p>Kami tidak menjual, memperdagangkan, atau menyewakan informasi pengenal pribadi pengguna kepada pihak lain. Kami dapat membagikan informasi demografis gabungan yang tidak terkait dengan informasi pengenal pribadi pengunjung dan pengguna dengan mitra bisnis kami, afiliasi terpercaya, dan pengiklan untuk tujuan yang dijelaskan di atas.</p>

                        <h5 class="mt-5">Perubahan Kebijakan Ini</h5>
                        <p>Kami dapat memperbarui Kebijakan Privasi kami dari waktu ke waktu. Kami akan memberitahu Anda tentang perubahan apa pun dengan memposting Kebijakan Privasi baru di halaman ini.</p>
                        <p>Kami akan memberitahu Anda melalui email dan/atau pemberitahuan menonjol di Layanan kami, sebelum perubahan menjadi efektif dan memperbarui "tanggal efektif" di bagian atas Kebijakan Privasi ini.</p>
                        <p>Anda disarankan untuk meninjau Kebijakan Privasi ini secara berkala untuk setiap perubahan. Perubahan pada Kebijakan Privasi ini efektif saat diposting di halaman ini.</p>

                        <h5 class="mt-5">Kontak Kami</h5>
                        <p>Jika Anda memiliki pertanyaan atau kekhawatiran tentang Kebijakan Privasi ini, silakan hubungi kami:</p>
                        <ul>
                            <li>Melalui email: <a href="mailto:<?= htmlspecialchars($contact_email); ?>" class="text-primary fw-bold"><?= htmlspecialchars($contact_email); ?></a></li>
                            <li>Melalui kunjungan ke situs web kami: <a href="<?= $base_url; ?>" class="text-primary fw-bold"><?= $base_url; ?></a></li>
                            <li>Melalui surat: [Alamat Lengkap Perusahaan Anda, Misal: Jl. Menara No. 123, Medan, Sumatera Utara, 20123, Indonesia]</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>