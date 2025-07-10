<?php
// Pastikan $base_url sudah didefinisikan sebelum file ini di-include.
// Misalnya, di file config.php
// require_once '../config/config.php'; // Contoh
$base_url = "http://localhost/elite/"; // Contoh jika $base_url belum didefinisikan
?>
<!DOCTYPE html>
<html lang="id" class="layout-navbar-fixed light-style layout-compact" dir="ltr" data-theme="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Syarat dan Ketentuan - International Elite</title>
    <link rel="icon" type="image/x-icon" href="<?= $base_url; ?>assets/img/icons/brands/fox.png" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $base_url; ?>assets/css/demo.css" />
    <link rel="stylesheet" href="<?= $base_url; ?>assets/vendor/css/core.css" />
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

        h3.text-center {
            font-weight: 700;
            color: #343a40;
            /* Warna judul lebih gelap */
            margin-bottom: 1.5rem;
        }

        h5 {
            font-weight: 600;
            color: #495057;
            /* Warna sub-judul */
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
        }

        p.text-muted strong {
            color: #6c757d;
            /* Warna teks terakhir diperbarui */
        }

        /* Responsif padding */
        @media (max-width: 767.98px) {
            .card-body {
                padding: 1.5rem;
            }

            h3.text-center {
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
                        <h3 class="mb-4 text-center">Syarat dan Ketentuan</h3>
                        <p class="mb-5 text-muted text-center small">Terakhir diperbarui: <strong class="text-dark">10 Juli 2025</strong></p>

                        <p class="mb-4 lead">Selamat datang di halaman Syarat dan Ketentuan <strong>International Elite</strong> Page. Ketentuan ini mengatur penggunaan layanan kami. Dengan menggunakan layanan kami, Anda dianggap telah menyetujui ketentuan berikut:</p>

                        <h5 class="mt-5">1. Penggunaan Layanan</h5>
                        <p>Anda setuju untuk menggunakan layanan kami hanya untuk tujuan yang sah dan sesuai hukum. Anda tidak diperbolehkan menggunakan layanan kami untuk hal-hal yang melanggar hukum, merugikan pihak lain, atau melanggar hak pihak ketiga.</p>

                        <h5 class="mt-5">2. Perubahan Syarat dan Ketentuan</h5>
                        <p>Kami berhak mengubah syarat dan ketentuan ini kapan saja. Perubahan akan diinformasikan melalui layanan kami atau email. Penggunaan layanan setelah perubahan berarti Anda menyetujui versi terbaru.</p>

                        <h5 class="mt-5">3. Penafian</h5>
                        <p>Layanan disediakan "sebagaimana adanya" tanpa jaminan, baik tersurat maupun tersirat. Kami tidak bertanggung jawab atas kerugian yang mungkin timbul dari penggunaan layanan ini.</p>

                        <h5 class="mt-5">4. Hukum yang Berlaku</h5>
                        <p>Syarat dan Ketentuan ini tunduk pada hukum yang berlaku di <strong>Indonesia</strong>. Segala sengketa akan diselesaikan di pengadilan yang berwenang di <strong>Medan, Indonesia</strong>.</p>

                        <h5 class="mt-5">5. Hubungi Kami</h5>
                        <p>Jika Anda memiliki pertanyaan atau kekhawatiran mengenai Syarat dan Ketentuan ini, silakan hubungi kami di <a href="mailto:support@elite.com" class="text-primary fw-bold">support@elite.com</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>