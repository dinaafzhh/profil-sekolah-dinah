<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        Galeri - SMP Negeri 1 Tasikmalaya
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

        .brand-logo i {
            font-size: 32px;
            color: #6b7280;
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

        .galeri-section {
            max-width: 1150px;
            margin: 70px auto;
            padding: 0 25px 20px;
        }

        .galeri-heading {
            margin-bottom: 35px;
        }

        .galeri-label {
            display: block;
            color: #6b7280;
            font-size: 14px;
            letter-spacing: 1.5px;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .galeri-heading h2 {
            color: #374151;
            font-size: 30px;
            margin-bottom: 12px;
        }

        .galeri-heading p {
            color: #6b7280;
            line-height: 1.7;
            max-width: 850px;
        }

        .galeri-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .galeri-card {
            display: block;
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            border: 1px solid #e5e7eb;
            box-shadow: 0 4px 15px rgba(0, 0, 0, .06);
            text-decoration: none;
            color: inherit;
            transition: .3s;
        }

        .galeri-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, .10);
        }

        .galeri-image {
            position: relative;
            width: 100%;
            height: 240px;
            background: #e5e7eb;
            overflow: hidden;
        }

        .galeri-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: .3s;
        }

        .galeri-card:hover .galeri-image img {
            transform: scale(1.04);
        }

        .galeri-info {
            padding: 20px;
        }

        .galeri-info h3 {
            font-size: 18px;
            line-height: 1.4;
            color: #374151;
            margin-bottom: 10px;
        }

        .galeri-info p {
            color: #6b7280;
            font-size: 14px;
            line-height: 1.7;
        }

        .galeri-info .tanggal {
            display: block;
            margin-top: 12px;
            color: #9ca3af;
            font-size: 13px;
        }

        .galeri-info .tanggal i {
            margin-right: 5px;
        }

        .empty-galeri {
            background: #f9fafb;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 60px 20px;
            text-align: center;
            color: #6b7280;
        }

        .empty-galeri i {
            font-size: 45px;
            margin-bottom: 15px;
            color: #9ca3af;
        }

        .empty-galeri h3 {
            color: #374151;
            margin-bottom: 8px;
        }

        .empty-galeri p {
            font-size: 14px;
        }

        .back-home {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            margin-top: 30px;
            color: #374151;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
        }

        .back-home:hover {
            color: #111827;
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
            .header-contact {
                gap: 15px;
            }

            .contact-item {
                font-size: 12px;
            }

            .galeri-grid {
                grid-template-columns: repeat(2, 1fr);
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

        @media (max-width: 600px) {
            .top-header {
                padding: 15px 18px;
            }

            .brand-logo {
                width: 52px;
                height: 52px;
            }

            .brand-logo i {
                font-size: 24px;
            }

            .brand-text h1 {
                font-size: 18px;
            }

            .brand-text p {
                font-size: 11px;
            }

            .galeri-section {
                padding: 0 20px 20px;
            }

            .galeri-heading h2 {
                font-size: 27px;
            }

            .galeri-heading p {
                font-size: 14px;
            }

            .galeri-grid {
                grid-template-columns: 1fr;
            }

            .galeri-image {
                height: 230px;
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
                    @if($profil && $profil->logo)
                        <img src="{{ asset('assets/images/logo2.png') }}" alt="Logo SMP Negeri 1 Tasikmalaya">
                    @else
                        <i class="fa-solid fa-school"></i>
                    @endif
                </div>
                <div class="brand-text">
                    <h1>SMP Negeri 1 Tasikmalaya</h1>
                    <p>Sekolah Menengah Pertama</p>
                </div>
            </a>

            <div class="header-contact">
                <div class="contact-item">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Kota Tasikmalaya, Jawa Barat</span>
                </div>
                <div class="contact-item">
                    <i class="fa-solid fa-envelope"></i>
                    <span>info@smpn1tasikmalaya.sch.id</span>
                </div>
            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarGaleri" aria-controls="navbarGaleri" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarGaleri">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('landing') }}">
                            <i class="fa-solid fa-house"></i> Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('landing.profil') }}">
                            <i class="fa-solid fa-school"></i> Profil Sekolah
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('landing.guru') }}">
                            <i class="fa-solid fa-chalkboard-user"></i> Guru
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('landing.ekstrakurikuler') }}">
                            <i class="fa-solid fa-trophy"></i> Ekstrakurikuler
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('landing.berita') }}">
                            <i class="fa-solid fa-newspaper"></i> Berita
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('landing.galeri') }}">
                            <i class="fa-solid fa-images"></i> Galeri
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<section class="galeri-section">
    <div class="galeri-heading" data-aos="fade-up">
        <span class="galeri-label">Dokumentasi Sekolah</span>
        <h2>Galeri Sekolah</h2>
        <p>Dokumentasi kegiatan dan berbagai aktivitas SMP Negeri 1 Tasikmalaya.</p>
    </div>

    @if ($galeri->count() > 0)
        <div class="galeri-grid">
            @foreach ($galeri as $item)
                <a href="{{ route('landing.galeri.detail', $item->id_galeri) }}" class="galeri-card" data-aos="fade-up" data-aos-delay="{{ ($loop->index % 3) * 100 }}">
                    <div class="galeri-image">
                        @if ($item->file)
                            <img src="{{ asset('storage/' . ltrim($item->file, '/')) }}" alt="{{ $item->judul }}">
                        @else
                            <div style="width:100%; height:100%; display:flex; align-items:center; justify-content:center; color:#9ca3af;">
                                <i class="fa-solid fa-image" style="font-size:40px;"></i>
                            </div>
                        @endif
                    </div>

                    <div class="galeri-info">
                        <h3>{{ $item->judul }}</h3>

                        @if (!empty($item->keterangan))
                            <p>{{ $item->keterangan }}</p>
                        @endif

                        @if (!empty($item->tanggal))
                            <span class="tanggal">
                                <i class="fa-regular fa-calendar"></i>
                                {{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}
                            </span>
                        @endif
                    </div>
                </a>
            @endforeach
        </div>
    @else
        <div class="empty-galeri" data-aos="fade-up">
            <i class="fa-solid fa-images"></i>
            <h3>Belum Ada Galeri</h3>
            <p>Belum ada dokumentasi galeri sekolah.</p>
        </div>
    @endif

    <a href="{{ route('landing') }}" class="back-home" data-aos="fade-right">
        <i class="fa-solid fa-arrow-left"></i> Kembali ke Beranda
    </a>
</section>

<footer class="footer" data-aos="fade-up">
    <div class="footer-container">
        <div class="footer-left">
            <div class="footer-brand">
                <img src="{{ asset('assets/images/logo2.png') }}" alt="Logo SMP Negeri 1 Tasikmalaya">
                <span>SMP NEGERI 1 KOTA TASIKMALAYA</span>
            </div>
            <div class="footer-item">
                <i class="fa-solid fa-location-dot"></i>
                <span>Kota Tasikmalaya, Jawa Barat, Indonesia.</span>
            </div>
        </div>

        <div class="footer-right">
            <div class="footer-item">
                <i class="fa-solid fa-envelope"></i>
                <span>info@smpn1tasikmalaya.sch.id</span>
            </div>
            <div class="footer-item">
                <i class="fa-brands fa-whatsapp"></i>
                <span>08112224563</span>
            </div>
            <div class="footer-item">
                <i class="fa-solid fa-phone"></i>
                <span>0265-546717</span>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <strong>© {{ date('Y') }} SMP NEGERI 1 KOTA TASIKMALAYA. All Rights Reserved.</strong>
        <span>Mencetak Generasi Unggul, Berkarakter, dan Berprestasi.</span>
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