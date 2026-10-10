<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        {{ $berita->judul }} - SMP Negeri 1 Tasikmalaya
    </title>

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
        }

        .brand-logo img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            display: block;
        }

        .brand-text h1 {
            font-size: 24px;
            color: #374151;
            line-height: 1.2;
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
        }

        .navbar .nav-link:hover {
            color: #e5e7eb;
        }

        .article-section {
            max-width: 1000px;
            margin: 70px auto;
            padding: 0 25px 20px;
        }

        .article-heading {
            margin-bottom: 30px;
        }

        .article-label {
            display: block;
            color: #6b7280;
            font-size: 14px;
            letter-spacing: 1.5px;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .article-heading h2 {
            color: #374151;
            font-size: 30px;
            margin-bottom: 10px;
        }

        .article-heading p {
            color: #6b7280;
            line-height: 1.7;
        }

        .article {
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 18px rgba(0, 0, 0, .06);
        }

        .article-image {
            width: 100%;
            max-height: 500px;
            background: #e5e7eb;
            overflow: hidden;
        }

        .article-image img {
            width: 100%;
            max-height: 500px;
            object-fit: cover;
            display: block;
        }

        .no-image {
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #9ca3af;
            font-size: 60px;
        }

        .article-content {
            padding: 40px;
        }

        .article-date {
            color: #6b7280;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .article-date i {
            margin-right: 6px;
        }

        .article-title {
            font-size: 32px;
            line-height: 1.4;
            color: #374151;
            margin-bottom: 25px;
        }

        .article-text {
            color: #6b7280;
            font-size: 15px;
            line-height: 1.9;
            overflow-wrap: anywhere;
        }

        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-top: 30px;
            color: #374151;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
        }

        .back-button:hover {
            color: #111827;
        }

        .other-news {
            margin-top: 60px;
        }

        .other-news-heading {
            margin-bottom: 25px;
        }

        .other-news-heading span {
            display: block;
            color: #6b7280;
            font-size: 13px;
            letter-spacing: 1.5px;
            font-weight: bold;
            margin-bottom: 7px;
        }

        .other-news-heading h2 {
            color: #374151;
            font-size: 27px;
        }

        .news-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .news-card {
            display: block;
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            overflow: hidden;
            text-decoration: none;
            color: inherit;
            box-shadow: 0 3px 12px rgba(0, 0, 0, .05);
            transition: .3s;
        }

        .news-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 18px rgba(0, 0, 0, .10);
        }

        .news-card-image {
            width: 100%;
            height: 180px;
            background: #e5e7eb;
            overflow: hidden;
        }

        .news-card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .news-no-image {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #9ca3af;
            font-size: 45px;
        }

        .news-card-content {
            padding: 18px;
        }

        .news-card-date {
            color: #6b7280;
            font-size: 12px;
            margin-bottom: 8px;
        }

        .news-card-title {
            color: #374151;
            font-size: 17px;
            line-height: 1.5;
            margin-bottom: 12px;
        }

        .news-card-link {
            color: #4b5563;
            font-size: 13px;
            font-weight: bold;
        }

        .empty-other-news {
            background: #f9fafb;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            color: #6b7280;
        }

        .empty-other-news i {
            display: block;
            font-size: 35px;
            margin-bottom: 10px;
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

            .news-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .footer-container {
                flex-direction: column;
                gap: 20px;
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

            .article-section {
                padding: 0 20px 20px;
            }

            .article-heading h2 {
                font-size: 27px;
            }

            .article-heading p {
                font-size: 14px;
            }

            .article-image {
                max-height: 300px;
            }

            .article-image img {
                max-height: 300px;
            }

            .article-content {
                padding: 25px 20px;
            }

            .article-title {
                font-size: 25px;
            }

            .article-text {
                font-size: 14px;
                line-height: 1.8;
            }

            .news-grid {
                grid-template-columns: 1fr;
            }

            .news-card-image {
                height: 200px;
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
                data-bs-target="#navbarBeritaDetail"
                aria-controls="navbarBeritaDetail"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >

                <span class="navbar-toggler-icon"></span>

            </button>

            <div
                class="collapse navbar-collapse justify-content-center"
                id="navbarBeritaDetail"
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
                            Galeri 
                        </a>

                    </li>

                </ul>

            </div>

        </div>

    </nav>

</div>

<section class="article-section">

    <div
        class="article-heading"
        data-aos="fade-up"
    >

        <span class="article-label">
            Informasi Sekolah
        </span>

        <h2>
            Berita Sekolah
        </h2>

        <p>
            Informasi dan berita seputar SMP Negeri 1 Tasikmalaya.
        </p>

    </div>

    <article
        class="article"
        data-aos="fade-up"
        data-aos-delay="100"
    >

        <div class="article-image">

            @if($berita->gambar)

                <img
                    src="{{ asset('storage/' . ltrim($berita->gambar, '/')) }}"
                    alt="{{ $berita->judul }}"
                >

            @else

                <div class="no-image">

                    <i class="fa-regular fa-image"></i>

                </div>

            @endif

        </div>

        <div
            class="article-content"
            data-aos="fade-up"
            data-aos-delay="150"
        >

            <div class="article-date">

                <i class="fa-regular fa-calendar"></i>

                {{ \Carbon\Carbon::parse($berita->tanggal)->translatedFormat('d F Y') }}

            </div>

            <h1 class="article-title">
                {{ $berita->judul }}
            </h1>

            <div class="article-text">

                {!! nl2br(e($berita->isi)) !!}

            </div>

            <a
                href="{{ route('landing.berita') }}"
                class="back-button"
                data-aos="fade-right"
            >

                <i class="fa-solid fa-arrow-left"></i>

                Kembali ke Berita

            </a>

        </div>

    </article>

    @if(isset($beritaLainnya) && $beritaLainnya->count() > 0)

        <div
            class="other-news"
            data-aos="fade-up"
        >

            <div class="other-news-heading">

                <span>
                    INFORMASI TERBARU
                </span>

                <h2>
                    Berita Lainnya
                </h2>

            </div>

            <div class="news-grid">

                @foreach($beritaLainnya as $item)

                    <a
                        href="{{ route('berita.detail', $item->slug) }}"
                        class="news-card"
                        data-aos="zoom-in"
                        data-aos-delay="{{ $loop->index * 100 }}"
                    >

                        <div class="news-card-image">

                            @if($item->gambar)

                                <img
                                    src="{{ asset('storage/' . ltrim($item->gambar, '/')) }}"
                                    alt="{{ $item->judul }}"
                                >

                            @else

                                <div class="news-no-image">

                                    <i class="fa-regular fa-image"></i>

                                </div>

                            @endif

                        </div>

                        <div class="news-card-content">

                            <div class="news-card-date">

                                <i class="fa-regular fa-calendar"></i>

                                {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}

                            </div>

                            <h3 class="news-card-title">
                                {{ $item->judul }}
                            </h3>

                            <span class="news-card-link">

                                Baca Selengkapnya

                                <i class="fa-solid fa-arrow-right"></i>

                            </span>

                        </div>

                    </a>

                @endforeach

            </div>

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