<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        {{ $guru->nama_guru }} - SMP Negeri 1 Tasikmalaya
    </title>

    <link rel="icon" href="data:,">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" >

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
            font-family: Arial, sans-serif;
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

        .navbar .nav-link:hover {
            color: #e5e7eb;
        }

        .hero {
            min-height: 300px;
            background:
                linear-gradient(
                    rgba(17, 24, 39, .65),
                    rgba(17, 24, 39, .65)
                ),
                url('{{ asset('assets/images/sekolah.webp') }}') center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 50px 20px;
        }

        .hero-content {
            color: #fff;
            max-width: 750px;
        }

        .hero-content span {
            display: block;
            font-size: 13px;
            letter-spacing: 2px;
            font-weight: bold;
            margin-bottom: 12px;
            color: #e5e7eb;
        }

        .hero-content h1 {
            font-size: 40px;
            margin-bottom: 12px;
        }

        .hero-content p {
            font-size: 16px;
            line-height: 1.7;
            color: #e5e7eb;
        }

        .detail-section {
            max-width: 1000px;
            margin: 55px auto;
            padding: 0 20px;
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #6b7280;
            text-decoration: none;
            font-size: 14px;
            margin-bottom: 25px;
        }

        .back-link:hover {
            color: #111827;
        }

        .guru-detail {
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, .05);
        }

        .guru-detail-content {
            display: flex;
            gap: 45px;
            padding: 45px;
            align-items: flex-start;
        }

        .guru-photo {
            width: 280px;
            min-width: 280px;
            height: 350px;
            background: #e5e7eb;
            border-radius: 12px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .guru-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .guru-photo i {
            font-size: 80px;
            color: #9ca3af;
        }

        .guru-info {
            flex: 1;
        }

        .guru-label {
            display: block;
            color: #6b7280;
            font-size: 13px;
            letter-spacing: 1.5px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .guru-info h2 {
            font-size: 32px;
            color: #374151;
            margin-bottom: 25px;
            line-height: 1.3;
        }

        .data-item {
            border-bottom: 1px solid #e5e7eb;
            padding: 15px 0;
        }

        .data-item:first-of-type {
            border-top: 1px solid #e5e7eb;
        }

        .data-label {
            display: block;
            color: #9ca3af;
            font-size: 13px;
            margin-bottom: 5px;
        }

        .data-value {
            color: #374151;
            font-size: 16px;
            font-weight: 500;
        }

        .other-guru-section {
            max-width: 1150px;
            margin: 70px auto;
            padding: 0 20px;
        }

        .other-guru-title {
            text-align: center;
            margin-bottom: 30px;
        }

        .other-guru-title span {
            display: block;
            color: #6b7280;
            font-size: 13px;
            letter-spacing: 1.5px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .other-guru-title h2 {
            color: #374151;
            font-size: 28px;
            margin-bottom: 8px;
        }

        .other-guru-title p {
            color: #6b7280;
            font-size: 14px;
        }

        .guru-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .guru-card {
            display: block;
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            overflow: hidden;
            text-decoration: none;
            color: inherit;
            box-shadow: 0 3px 15px rgba(0, 0, 0, .06);
            transition: .3s;
        }

        .guru-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, .10);
        }

        .guru-card-photo {
            width: 100%;
            height: 230px;
            background: #e5e7eb;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .guru-card-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .guru-card-photo i {
            font-size: 60px;
            color: #9ca3af;
        }

        .guru-card-info {
            padding: 18px;
        }

        .guru-card-info h3 {
            color: #374151;
            font-size: 17px;
            margin-bottom: 8px;
        }

        .guru-card-info p {
            color: #6b7280;
            font-size: 13px;
            margin-bottom: 7px;
        }

        .guru-card-info span {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            color: #374151;
            font-size: 13px;
            font-weight: bold;
            margin-top: 5px;
        }

        .empty-other-guru {
            text-align: center;
            color: #6b7280;
            padding: 30px;
        }

        .footer {
            background: linear-gradient(
                135deg,
                #263343,
                #929aa6
            );
            color: #fff;
            margin-top: 80px;
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

            .guru-grid {
                grid-template-columns: repeat(2, 1fr);
            }

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

        @media (max-width: 700px) {

            .hero {
                min-height: 280px;
            }

            .hero-content h1 {
                font-size: 30px;
            }

            .guru-detail-content {
                flex-direction: column;
                padding: 25px;
            }

            .guru-photo {
                width: 100%;
                min-width: auto;
                height: 350px;
            }

            .guru-info h2 {
                font-size: 27px;
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

            .guru-grid {
                grid-template-columns: 1fr;
            }

            .other-guru-section {
                padding: 0 15px;
            }

            .detail-section {
                padding: 0 15px;
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

                <a
                    href="{{ route('landing') }}"
                    class="brand"
                >

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
                    data-bs-target="#navbarGuruDetail"
                    aria-controls="navbarGuruDetail"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >

                    <span class="navbar-toggler-icon"></span>

                </button>

                <div
                    class="collapse navbar-collapse justify-content-center"
                    id="navbarGuruDetail"
                >

                    <ul class="navbar-nav">

                        <li class="nav-item">

                            <a
                                class="nav-link"
                                href="{{ route('landing') }}"
                            >
                                <i class="fa-solid fa-house"></i>
                                Beranda
                            </a>

                        </li>

                        <li class="nav-item">

                            <a
                                class="nav-link"
                                href="{{ route('landing.profil') }}"
                            >
                                <i class="fa-solid fa-school"></i>
                                Profil Sekolah
                            </a>

                        </li>

                        <li class="nav-item">

                            <a
                                class="nav-link"
                                href="{{ route('landing.guru') }}"
                            >
                                <i class="fa-solid fa-chalkboard-user"></i>
                                Guru
                            </a>

                        </li>

                        <li class="nav-item">

                            <a
                                class="nav-link"
                                href="{{ route('landing.ekstrakurikuler') }}"
                            >
                                <i class="fa-solid fa-trophy"></i>
                                Ekstrakurikuler
                            </a>

                        </li>

                        <li class="nav-item">

                            <a
                                class="nav-link"
                                href="{{ route('landing.berita') }}"
                            >
                                <i class="fa-solid fa-newspaper"></i>
                                Berita
                            </a>

                        </li>

                        <li class="nav-item">

                            <a
                                class="nav-link"
                                href="{{ route('landing.galeri') }}"
                            >
                                <i class="fa-solid fa-images"></i>
                                Galeri & Video
                            </a>

                        </li>

                    </ul>

                </div>

            </div>

        </nav>

    </div>

    <section class="detail-section">

        <a
            href="{{ route('landing.guru') }}"
            class="back-link"
            data-aos="fade-right"
        >

            <i class="fa-solid fa-arrow-left"></i>

            Kembali ke Daftar Guru

        </a>

        <div
            class="guru-detail"
            data-aos="fade-up"
        >

            <div class="guru-detail-content">

                <div
                    class="guru-photo"
                    data-aos="zoom-in"
                >

                    @if($guru->foto)

                        <img
                            src="{{ str_starts_with($guru->foto, 'assets/') ? asset($guru->foto) : asset('storage/' . ltrim($guru->foto, '/')) }}"
                            alt="{{ $guru->nama_guru }}"
                        >

                    @else

                        <i class="fa-solid fa-user"></i>

                    @endif

                </div>

                <div
                    class="guru-info"
                    data-aos="fade-left"
                >

                    <span class="guru-label">
                        DATA GURU
                    </span>

                    <h2>
                        {{ $guru->nama_guru }}
                    </h2>

                    <div class="data-item">

                        <span class="data-label">
                            Nama Lengkap
                        </span>

                        <span class="data-value">
                            {{ $guru->nama_guru }}
                        </span>

                    </div>

                    <div class="data-item">

                        <span class="data-label">
                            NIP
                        </span>

                        <span class="data-value">
                            {{ $guru->nip ?: '-' }}
                        </span>

                    </div>

                    <div class="data-item">

                        <span class="data-label">
                            Mata Pelajaran
                        </span>

                        <span class="data-value">
                            {{ $guru->mapel ?: '-' }}
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="other-guru-section">

        <div
            class="other-guru-title"
            data-aos="fade-up"
        >

            <span>
                TENAGA PENDIDIK
            </span>

            <h2>
                Guru Lainnya
            </h2>

            <p>
                Pilih guru lain untuk melihat profil lengkapnya.
            </p>

        </div>

        @if($guruLainnya->count() > 0)

            <div class="guru-grid">

                @foreach($guruLainnya as $item)

                    <a
                        href="{{ route('landing.guru.detail', $item->id_guru) }}"
                        class="guru-card"
                        data-aos="fade-up"
                        data-aos-delay="{{ ($loop->index % 4) * 100 }}"
                    >

                        <div class="guru-card-photo">

                            @if($item->foto)

                                <img
                                    src="{{ str_starts_with($item->foto, 'assets/') ? asset($item->foto) : asset('storage/' . ltrim($item->foto, '/')) }}"
                                    alt="{{ $item->nama_guru }}"
                                >

                            @else

                                <i class="fa-solid fa-user"></i>

                            @endif

                        </div>

                        <div class="guru-card-info">

                            <h3>
                                {{ $item->nama_guru }}
                            </h3>

                            <p>
                                {{ $item->mapel ?: 'Guru' }}
                            </p>

                            <span>

                                Lihat Profil

                                <i class="fa-solid fa-arrow-right"></i>

                            </span>

                        </div>

                    </a>

                @endforeach

            </div>

        @else

            <div
                class="empty-other-guru"
                data-aos="fade-up"
            >

                <i class="fa-solid fa-user-group"></i>

                <p>
                    Belum ada guru lainnya.
                </p>

            </div>

        @endif

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