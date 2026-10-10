<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profil - SMP Negeri 1 Tasikmalaya</title>

    <link rel="icon" href="data:,">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #fff;
            color: #222;
        }

        .sticky-header {
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .top-header {
            background: linear-gradient(
                90deg,
                #ffffff 0%,
                #f1f2f4 45%,
                #d1d5db 100%
            );
            padding: 18px 50px;
            border-bottom: 1px solid #cfd3d8;
        }

        .header-inner {
            max-width: 1300px;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 15px;
            text-decoration: none;
            color: inherit;
        }

        .brand-logo {
            width: 68px;
            height: 68px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            flex-shrink: 0;
            background: transparent;
            border: none;
            border-radius: 0;
        }

        .brand-logo img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            display: block;
            background: transparent;
            border: none;
        }

        .brand-text h1 {
            font-size: 24px;
            color: #374151;
            line-height: 1.2;
            margin: 0;
            font-weight: 700;
        }

        .brand-text p {
            margin-top: 5px;
            font-size: 13px;
            color: #6b7280;
        }

        .header-contact {
            display: flex;
            align-items: center;
            gap: 25px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #4b5563;
            font-size: 13px;
            white-space: nowrap;
        }

        .contact-item i {
            color: #6b7280;
            font-size: 14px;
        }

        .navbar {
            background: linear-gradient(
                90deg,
                #1f2937 0%,
                #4b5563 50%,
                #9ca3af 100%
            );
        }

        .navbar .container {
            max-width: 1300px;
        }

        .navbar-toggler {
            border-color: rgba(255, 255, 255, .5);
        }

        .navbar-toggler:focus {
            box-shadow: none;
        }

        .navbar-toggler-icon {
            filter: brightness(0) invert(1);
        }

        .navbar-nav {
            gap: 25px;
        }

        .navbar .nav-link {
            color: white;
            font-size: 14px;
            font-weight: bold;
            padding: 17px 0;
            white-space: nowrap;
            transition: .3s;
        }

        .navbar .nav-link:hover,
        .navbar .nav-link.active {
            color: #e5e7eb;
        }

        .profil-section {
            max-width: 1200px;
            margin: auto;
            padding: 55px 20px 80px;
        }

        .profil-card {
            background: #fff;
            border-radius: 12px;
            border: 1px solid #e1e1e1;
            box-shadow: 0 4px 15px rgba(0, 0, 0, .06);
            padding: 30px;
            margin-bottom: 25px;
        }

        .profil-card h2 {
            color: #222;
            font-size: 22px;
            margin-bottom: 20px;
        }

        .profil-card h2 i {
            margin-right: 8px;
            color: #555;
        }

        .profil-card p {
            color: #666;
            font-size: 15px;
            line-height: 1.8;
            white-space: pre-line;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
        }

        .info-box {
            background: #f8f8f8;
            border: 1px solid #e5e5e5;
            border-radius: 9px;
            padding: 18px;
        }

        .info-box strong {
            display: block;
            color: #333;
            font-size: 14px;
            margin-bottom: 8px;
        }

        .info-box strong i {
            color: #666;
            margin-right: 7px;
        }

        .info-box span {
            color: #666;
            font-size: 14px;
            line-height: 1.6;
        }

        .empty-profile {
            text-align: center;
            padding: 60px 20px;
            color: #777;
        }

        .empty-profile i {
            font-size: 45px;
            color: #999;
            margin-bottom: 15px;
        }

        .empty-profile h3 {
            margin-bottom: 10px;
            color: #444;
        }

        .back-home {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-top: 10px;
            padding: 12px 20px;
            background: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 7px;
            font-size: 14px;
            transition: .3s;
        }

        .back-home:hover {
            background: #111;
        }

        .footer {
            background: linear-gradient(
                135deg,
                #263343,
                #929aa6
            );
            color: #fff;
            margin-top: 0;
        }

        .footer-container {
            max-width: 1200px;
            margin: auto;
            padding: 45px 20px;
            display: flex;
            justify-content: space-between;
            gap: 60px;
        }

        .footer-left,
        .footer-right {
            flex: 1;
        }

        .footer-brand {
            display: flex;
            align-items: center;
            gap: 18px;
            margin-bottom: 25px;
        }

        .footer-brand img {
            width: 55px;
            height: 55px;
            object-fit: contain;
        }

        .footer-brand span {
            font-size: 20px;
            font-weight: 600;
        }

        .footer-item {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 20px;
            font-size: 15px;
        }

        .footer-item i {
            width: 20px;
            text-align: center;
            font-size: 16px;
            flex-shrink: 0;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, .2);
            padding: 22px 20px;
            text-align: center;
            display: flex;
            flex-direction: column;
            gap: 8px;
            font-size: 14px;
        }

        .footer-bottom strong {
            font-size: 14px;
        }

        .footer-bottom span {
            font-size: 13px;
        }

        @media (max-width: 1000px) {
            .header-contact {
                gap: 15px;
            }

            .contact-item {
                font-size: 12px;
            }
        }

        @media (max-width: 900px) {
            .top-header {
                padding: 18px 20px;
            }

            .header-inner {
                justify-content: center;
            }

            .header-contact {
                display: none;
            }

            .navbar-nav {
                gap: 0;
            }

            .navbar .nav-link {
                padding: 12px 0;
                border-bottom: 1px solid rgba(255, 255, 255, .15);
            }

            .footer-container {
                flex-direction: column;
                gap: 20px;
            }
        }

        @media (max-width: 800px) {
            .info-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 600px) {
            .top-header {
                padding: 15px 18px;
            }

            .brand-logo {
                width: 52px;
                height: 52px;
            }

            .brand-text h1 {
                font-size: 18px;
            }

            .brand-text p {
                font-size: 11px;
            }

            .profil-section {
                padding: 40px 15px 60px;
            }

            .profil-card {
                padding: 22px 18px;
            }

            .profil-card h2 {
                font-size: 20px;
            }

            .profil-card p {
                font-size: 14px;
            }

            .footer {
                margin-top: 0;
            }

            .footer-container {
                padding: 35px 20px;
            }

            .footer-brand span {
                font-size: 17px;
            }

            .footer-item {
                font-size: 14px;
            }

            .footer-bottom {
                font-size: 12px;
            }

            .footer-bottom strong {
                font-size: 12px;
            }

            .footer-bottom span {
                font-size: 12px;
            }
        }
    </style>
</head>

<body>

<div class="sticky-header">

    <header class="top-header">

        <div class="header-inner">

            <a href="{{ route('landing') }}" class="brand">

                <div class="brand-logo">

                    <img
                        src="{{ asset('assets/images/logo2.png') }}"
                        alt="Logo SMP Negeri 1 Tasikmalaya"
                    >

                </div>

                <div class="brand-text">

                    <h1>
                        SMP Negeri 1 Tasikmalaya
                    </h1>

                    <p>
                        Sekolah Menengah Pertama
                    </p>

                </div>

            </a>

            <div class="header-contact">

                <div class="contact-item">

                    <i class="fa-solid fa-location-dot"></i>

                    <span>
                        Kota Tasikmalaya, Jawa Barat
                    </span>

                </div>

                <div class="contact-item">

                    <i class="fa-solid fa-envelope"></i>

                    <span>
                        info@smpn1tasikmalaya.sch.id
                    </span>

                </div>

            </div>

        </div>

    </header>

    <nav class="navbar navbar-expand-lg">

        <div class="container">

            <button
                class="navbar-toggler ms-auto"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarProfil"
                aria-controls="navbarProfil"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div
                class="collapse navbar-collapse justify-content-center"
                id="navbarProfil"
            >

                <ul class="navbar-nav">

                    <li class="nav-item">

                        <a
                            href="{{ route('landing') }}"
                            class="nav-link"
                        >
                            <i class="fa-solid fa-house"></i>
                            Beranda
                        </a>

                    </li>

                    <li class="nav-item">

                        <a
                            href="{{ route('landing.profil') }}"
                            class="nav-link active"
                        >
                            <i class="fa-solid fa-school"></i>
                            Profil Sekolah
                        </a>

                    </li>

                    <li class="nav-item">

                        <a
                            href="{{ route('landing.guru') }}"
                            class="nav-link"
                        >
                            <i class="fa-solid fa-chalkboard-user"></i>
                            Guru
                        </a>

                    </li>

                    <li class="nav-item">

                        <a
                            href="{{ route('landing.ekstrakurikuler') }}"
                            class="nav-link"
                        >
                            <i class="fa-solid fa-trophy"></i>
                            Ekstrakurikuler
                        </a>

                    </li>

                    <li class="nav-item">

                        <a
                            href="{{ route('landing.berita') }}"
                            class="nav-link"
                        >
                            <i class="fa-solid fa-newspaper"></i>
                            Berita
                        </a>

                    </li>

                    <li class="nav-item">

                        <a
                            href="{{ route('landing.galeri') }}"
                            class="nav-link"
                        >
                            <i class="fa-solid fa-images"></i>
                            Galeri
                        </a>

                    </li>

                </ul>

            </div>

        </div>

    </nav>

</div>

<section class="profil-section">

    @if($profil)

        <div
            class="profil-card"
            data-aos="fade-up"
        >

            <h2>
                <i class="fa-solid fa-school"></i>
                Identitas Sekolah
            </h2>

            <div class="info-grid">

                <div
                    class="info-box"
                    data-aos="fade-up"
                    data-aos-delay="0"
                >

                    <strong>
                        <i class="fa-solid fa-school"></i>
                        Nama Sekolah
                    </strong>

                    <span>
                        {{ $profil->nama_sekolah ?: '-' }}
                    </span>

                </div>

                <div
                    class="info-box"
                    data-aos="fade-up"
                    data-aos-delay="100"
                >

                    <strong>
                        <i class="fa-solid fa-calendar"></i>
                        Tahun Berdiri
                    </strong>

                    <span>
                        {{ $profil->tahun_berdiri ?: '-' }}
                    </span>

                </div>

                <div
                    class="info-box"
                    data-aos="fade-up"
                    data-aos-delay="200"
                >

                    <strong>
                        <i class="fa-solid fa-id-card"></i>
                        NPSN
                    </strong>

                    <span>
                        {{ $profil->npsn ?: '-' }}
                    </span>

                </div>

                <div
                    class="info-box"
                    data-aos="fade-up"
                    data-aos-delay="300"
                >

                    <strong>
                        <i class="fa-solid fa-phone"></i>
                        Kontak
                    </strong>

                    <span>
                        {{ $profil->kontak ?: '-' }}
                    </span>

                </div>

                <div
                    class="info-box"
                    data-aos="fade-up"
                    data-aos-delay="400"
                >

                    <strong>
                        <i class="fa-solid fa-location-dot"></i>
                        Alamat
                    </strong>

                    <span>
                        {{ $profil->alamat ?: '-' }}
                    </span>

                </div>

            </div>

        </div>

        @if($profil->deskripsi)

            <div
                class="profil-card"
                data-aos="fade-up"
            >

                <h2>
                    <i class="fa-solid fa-align-left"></i>
                    Tentang Sekolah
                </h2>

                <p>
                    {{ $profil->deskripsi }}
                </p>

            </div>

        @endif

        @if($profil->visi_misi)

            <div
                class="profil-card"
                data-aos="fade-up"
            >

                <h2>
                    Visi & Misi
                </h2>

                <p>
                    {{ $profil->visi_misi }}
                </p>

            </div>

        @endif

    @else

        <div
            class="profil-card"
            data-aos="fade-up"
        >

            <div class="empty-profile">

                <i class="fa-solid fa-school"></i>

                <h3>
                    Profil Sekolah Belum Tersedia
                </h3>

                <p>
                    Informasi profil sekolah belum diisi.
                </p>

            </div>

        </div>

    @endif

    <a
        href="{{ route('landing') }}"
        class="back-home"
        data-aos="fade-right"
    >

        <i class="fa-solid fa-arrow-left"></i>

        Kembali ke Beranda

    </a>

</section>

<footer
    class="footer"
    data-aos="fade-up"
>

    <div class="footer-container">

        <div class="footer-left">

            <div class="footer-brand">

                <img
                    src="{{ asset('assets/images/logo2.png') }}"
                    alt="Logo SMP Negeri 1 Tasikmalaya"
                >

                <span>
                    SMP NEGERI 1 KOTA TASIKMALAYA
                </span>

            </div>

            <div class="footer-item">

                <i class="fa-solid fa-location-dot"></i>

                <span>
                    Kota Tasikmalaya, Jawa Barat, Indonesia.
                </span>

            </div>

        </div>

        <div class="footer-right">

            <div class="footer-item">

                <i class="fa-solid fa-envelope"></i>

                <span>
                    info@smpn1tasikmalaya.sch.id
                </span>

            </div>

            <div class="footer-item">

                <i class="fa-brands fa-whatsapp"></i>

                <span>
                    08112224563
                </span>

            </div>

            <div class="footer-item">

                <i class="fa-solid fa-phone"></i>

                <span>
                    0265-546717
                </span>

            </div>

        </div>

    </div>

    <div class="footer-bottom">

        <strong>
            © {{ date('Y') }} SMP NEGERI 1 KOTA TASIKMALAYA. All Rights Reserved.
        </strong>

        <span>
            Mencetak Generasi Unggul, Berkarakter, dan Berprestasi.
        </span>

    </div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    AOS.init({
        duration: 800,
        once: true,
        offset: 80
    });
</script>

</body>

</html>