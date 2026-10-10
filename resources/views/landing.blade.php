<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SMP Negeri 1 Tasikmalaya</title>

    <link rel="icon" href="data:,">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <link
        rel="stylesheet"
        href="https://unpkg.com/aos@2.3.1/dist/aos.css"
    >

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
            overflow-x: hidden;
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
            min-width: 0;
        }

        .brand-logo {
            width: 68px;
            height: 68px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .brand-logo img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            display: block;
        }

        .brand-text {
            min-width: 0;
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

        .landing-carousel {
            position: relative;
            width: 100%;
            height: 600px;
            overflow: hidden;
        }

        .landing-carousel .carousel-inner,
        .landing-carousel .carousel-item {
            width: 100%;
            height: 100%;
        }

        .landing-carousel .carousel-item {
            position: relative;
            background-size: cover;
            background-position: center;
        }

        .landing-carousel .carousel-item::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(
                90deg,
                rgba(17, 24, 39, .75),
                rgba(55, 65, 81, .35),
                rgba(255, 255, 255, .05)
            );
            z-index: 1;
        }

        .carousel-slide-1 {
            background-image: url('{{ asset('assets/images/smpn1.jpeg') }}');
        }

        .carousel-slide-2 {
            background-image: url('{{ asset('assets/images/smpn2.png') }}');
        }

        .carousel-slide-3 {
            background-image: url('{{ asset('assets/images/smpn3.jpg') }}');
        }

        .landing-carousel .hero-content {
            position: absolute;
            z-index: 5;
            top: 50%;
            left: 8%;
            right: 8%;
            transform: translateY(-50%);
            color: white;
            max-width: 650px;
        }

        .hero-content span {
            display: inline-block;
            background: linear-gradient(135deg, #374151, #9ca3af);
            padding: 8px 15px;
            border-radius: 4px;
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .hero-content h2 {
            font-size: 52px;
            line-height: 1.1;
            margin-bottom: 20px;
            text-shadow: 0 2px 8px rgba(0, 0, 0, .35);
        }

        .hero-content p {
            font-size: 17px;
            line-height: 1.7;
            max-width: 570px;
            color: #f3f4f6;
        }

        .hero-button {
            display: inline-block;
            margin-top: 25px;
            padding: 13px 22px;
            background: linear-gradient(135deg, #fff, #d1d5db);
            color: #374151;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: .3s;
        }

        .hero-button:hover {
            background: white;
            transform: translateY(-2px);
        }

        .landing-carousel .carousel-control-prev,
        .landing-carousel .carousel-control-next {
            width: 70px;
            z-index: 10;
        }

        .landing-carousel .carousel-control-prev-icon,
        .landing-carousel .carousel-control-next-icon {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, .85);
            background-size: 45%;
            filter: none;
        }

        .landing-carousel .carousel-indicators {
            z-index: 10;
            margin-bottom: 25px;
        }

        .landing-carousel .carousel-indicators button {
            width: 10px;
            height: 10px;
            margin: 0 4px;
            border: 0;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, .6);
            opacity: 1;
        }

        .landing-carousel .carousel-indicators button.active {
            background-color: white;
            transform: scale(1.2);
        }

        .section {
            max-width: 1200px;
            margin: 70px auto;
            padding: 0 25px;
        }

        .section-title {
            text-align: center;
            margin-bottom: 35px;
        }

        .section-title h2 {
            color: #374151;
            font-size: 30px;
            margin-bottom: 10px;
        }

        .section-title p {
            color: #6b7280;
        }

        .stats-section {
            max-width: 1200px;
            margin: 50px auto 20px;
            padding: 0 25px;
        }

        .stats-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .stat-card {
            background: linear-gradient(135deg, #374151, #9ca3af);
            border-radius: 12px;
            padding: 25px;
            display: flex;
            align-items: center;
            gap: 18px;
            box-shadow: 0 5px 18px rgba(0, 0, 0, .12);
            min-width: 0;
        }

        .stat-card i {
            font-size: 30px;
            color: #fff;
            flex-shrink: 0;
        }

        .stat-card h3 {
            margin: 0;
            font-size: 28px;
            color: #fff;
        }

        .stat-card p {
            margin: 5px 0 0;
            color: #fff;
            font-size: 14px;
        }

        .sambutan-section {
            max-width: 1200px;
            margin: 70px auto;
            padding: 0 25px;
        }

        .sambutan-container {
            max-width: 1140px;
            margin: auto;
            display: flex;
            align-items: flex-start;
            gap: 35px;
        }

        .sambutan-photo {
            width: 270px;
            min-width: 270px;
        }

        .sambutan-photo img,
        .sambutan-photo-empty {
            width: 100%;
            height: 335px;
            object-fit: cover;
            display: block;
            border-radius: 10px;
        }

        .sambutan-photo img {
            border: 1px solid #e5e7eb;
        }

        .sambutan-photo-empty {
            background: #e5e7eb;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #9ca3af;
            font-size: 70px;
        }

        .sambutan-content {
            flex: 1;
            min-width: 0;
            padding-top: 4px;
        }

        .sambutan-label {
            color: #6b7280;
            font-size: 14px;
            letter-spacing: 1.5px;
            margin-bottom: 7px;
            font-weight: bold;
        }

        .sambutan-content h2 {
            color: #374151;
            font-size: 32px;
        }

        .sambutan-line {
            width: 295px;
            height: 4px;
            margin: 12px 0 20px;
            background: linear-gradient(to right, #374151, #d1d5db);
        }

        .sambutan-content p {
            margin-bottom: 12px;
            color: #4b5563;
            font-size: 16px;
            line-height: 1.7;
        }

        .sambutan-identitas {
            border-top: 1px solid #eee;
            margin-top: 28px;
            padding-top: 20px;
            display: flex;
            flex-direction: column;
            gap: 3px;
        }

        .sambutan-identitas strong {
            font-size: 21px;
            color: #374151;
        }

        .sambutan-identitas span {
            font-size: 15px;
            color: #6b7280;
        }

        #guru {
            max-width: none;
            background: #f9fafb;
            padding: 70px 25px;
        }

        #guru .section-title,
        #guru .guru-grid,
        #guru .empty-guru {
            max-width: 1150px;
            margin-left: auto;
            margin-right: auto;
        }

        .guru-heading,
        .ekskul-heading,
        .gallery-heading {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 30px;
        }

        .guru-heading-content,
        .ekskul-heading-content,
        .gallery-heading-content {
            flex: 1;
            min-width: 0;
            text-align: left;
        }

        .guru-label,
        .ekskul-label {
            display: block;
            color: #6b7280;
            font-size: 14px;
            letter-spacing: 1.5px;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .guru-heading-content h2,
        .ekskul-heading-content h2,
        .gallery-heading h2 {
            color: #374151;
            font-size: 30px;
            margin-bottom: 12px;
        }

        .guru-heading-content p,
        .ekskul-heading-content p,
        .gallery-heading p {
            color: #6b7280;
            line-height: 1.7;
            max-width: 850px;
            margin: 0;
        }

        .lihat-semua {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            color: #374151;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
            white-space: nowrap;
            margin-top: 5px;
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
            box-shadow: 0 3px 15px rgba(0, 0, 0, .06);
            transition: .3s;
            text-decoration: none;
            color: inherit;
            min-width: 0;
        }

        .guru-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, .10);
        }

        .guru-foto {
            width: 100%;
            height: 250px;
            background: #e5e7eb;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .guru-foto img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .guru-foto i {
            font-size: 70px;
            color: #9ca3af;
        }

        .guru-info {
            padding: 20px;
        }

        .guru-info h3 {
            color: #374151;
            font-size: 18px;
            margin-bottom: 7px;
        }

        .guru-info p {
            color: #6b7280;
            font-size: 14px;
            margin-bottom: 8px;
        }

        .guru-info span {
            color: #9ca3af;
            font-size: 13px;
        }

        .empty-guru,
        .empty-ekskul,
        .empty-news,
        .empty-gallery {
            text-align: center;
            background: #f9fafb;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 40px;
            color: #6b7280;
        }

        .empty-guru i,
        .empty-ekskul i,
        .empty-news i,
        .empty-gallery i {
            display: block;
            font-size: 40px;
            margin-bottom: 12px;
        }

        #ekstrakurikuler {
            max-width: none;
            background: #fff;
            padding: 70px 25px;
        }

        #ekstrakurikuler .section-title,
        #ekstrakurikuler .ekskul-grid,
        #ekstrakurikuler .empty-ekskul {
            max-width: 1150px;
            margin-left: auto;
            margin-right: auto;
        }

        .ekskul-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .ekskul-card {
            display: block;
            background: #f9fafb;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            overflow: hidden;
            transition: .3s;
            text-decoration: none;
            color: inherit;
            min-width: 0;
        }

        .ekskul-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, .10);
        }

        .ekskul-foto {
            width: 100%;
            height: 190px;
            background: #e5e7eb;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .ekskul-foto img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .ekskul-foto i {
            color: #9ca3af;
            font-size: 45px;
        }

        .ekskul-info {
            padding: 20px;
        }

        .ekskul-card h3 {
            color: #374151;
            font-size: 19px;
            margin-bottom: 10px;
        }

        .ekskul-card p {
            color: #6b7280;
            font-size: 14px;
            line-height: 1.7;
        }

        .ekskul-detail-link {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            margin-top: 15px;
            color: #374151;
            font-size: 13px;
            font-weight: bold;
        }

        .news-card {
            max-width: 900px;
            margin: auto;
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 3px 15px rgba(0, 0, 0, .07);
        }

        .news-image {
            width: 100%;
            height: 320px;
            object-fit: cover;
            display: block;
        }

        .news-content {
            padding: 30px;
        }

        .news-date {
            display: inline-block;
            color: #6b7280;
            font-size: 13px;
            margin-bottom: 10px;
        }

        .news-content h3 {
            color: #374151;
            font-size: 25px;
            margin-bottom: 12px;
        }

        .news-content p {
            color: #4b5563;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .news-button {
            display: inline-block;
            padding: 11px 20px;
            background: #374151;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-size: 14px;
            font-weight: bold;
        }

        .gallery-heading {
            margin-bottom: 35px;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .gallery-card {
            position: relative;
            height: 230px;
            border-radius: 12px;
            overflow: hidden;
            background: #e5e7eb;
            border: 1px solid #e5e7eb;
            text-decoration: none;
            color: inherit;
            display: block;
            min-width: 0;
        }

        .gallery-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .gallery-overlay {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            padding: 20px;
            color: white;
            background: linear-gradient(
                transparent,
                rgba(0, 0, 0, .75)
            );
            z-index: 2;
        }

        .gallery-overlay h3 {
            margin: 20px 0 5px;
            font-size: 17px;
        }

        .gallery-overlay span {
            font-size: 13px;
            opacity: .9;
        }

        .empty-gallery-image {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #9ca3af;
            font-size: 45px;
        }

        .footer {
            width: 100%;
            background: linear-gradient(
                135deg,
                #1f2937 0%,
                #4b5563 50%,
                #9ca3af 100%
            );
            color: white;
            margin-top: 80px;
            overflow: hidden;
        }

        .footer-container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 50px 25px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            width: 100%;
        }

        .footer-left,
        .footer-right {
            min-width: 0;
        }

        .footer-brand {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
            min-width: 0;
        }

        .footer-logo {
            width: 55px;
            height: 55px;
            object-fit: contain;
            flex-shrink: 0;
        }

        .footer-brand h4 {
            font-size: 20px;
            line-height: 1.4;
            margin: 0;
        }

        .footer-address {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            line-height: 1.7;
        }

        .footer-address i {
            width: 20px;
            min-width: 20px;
            margin-top: 5px;
        }

        .footer-contact {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 18px;
            line-height: 1.6;
        }

        .footer-contact i {
            width: 20px;
            min-width: 20px;
        }

        .footer-contact span {
            overflow-wrap: anywhere;
        }

        .footer-bottom {
            width: 100%;
            border-top: 1px solid rgba(255, 255, 255, .2);
            text-align: center;
            padding: 20px 15px;
            color: #e5e7eb;
            font-size: 14px;
            line-height: 1.7;
        }

        @media (max-width: 1000px) {
            .header-contact {
                gap: 15px;
            }

            .contact-item {
                font-size: 12px;
            }

            .guru-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .ekskul-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .footer-grid {
                gap: 30px;
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

            .landing-carousel {
                height: 500px;
            }

            .landing-carousel .hero-content {
                left: 7%;
                right: 7%;
            }

            .hero-content h2 {
                font-size: 38px;
            }

            .gallery-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 800px) {
            .sambutan-container {
                flex-direction: column;
            }

            .sambutan-photo {
                width: 100%;
                max-width: 300px;
                min-width: auto;
                margin: auto;
            }

            .sambutan-photo img,
            .sambutan-photo-empty {
                height: 360px;
            }

            .guru-heading,
            .ekskul-heading {
                flex-direction: column;
                gap: 15px;
            }

            .guru-heading-content,
            .ekskul-heading-content {
                width: 100%;
            }

            .footer-grid {
                grid-template-columns: 1fr;
                gap: 30px;
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

            .stats-container {
                grid-template-columns: 1fr;
            }

            .landing-carousel {
                height: 480px;
            }

            .landing-carousel .carousel-control-prev,
            .landing-carousel .carousel-control-next {
                width: 50px;
            }

            .landing-carousel .carousel-control-prev-icon,
            .landing-carousel .carousel-control-next-icon {
                width: 38px;
                height: 38px;
            }

            .hero-content h2 {
                font-size: 32px;
            }

            .hero-content p {
                font-size: 14px;
            }

            .guru-grid,
            .ekskul-grid {
                grid-template-columns: 1fr;
            }

            .gallery-heading {
                flex-direction: column;
                gap: 15px;
            }

            .gallery-grid {
                grid-template-columns: 1fr;
            }

            .footer-container {
                padding: 40px 20px;
            }

            .footer-brand h4 {
                font-size: 17px;
            }

            .footer-bottom {
                font-size: 13px;
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
                        Kota Tasikmalaya
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
                data-bs-target="#navbarLanding"
                aria-controls="navbarLanding"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div
                class="collapse navbar-collapse justify-content-center"
                id="navbarLanding"
            >

                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a
                            href="{{ route('landing') }}"
                            class="nav-link active"
                        >
                            <i class="fa-solid fa-house"></i>
                            Beranda
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            href="{{ route('landing.profil') }}"
                            class="nav-link"
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

<section
    class="landing-carousel carousel slide"
    id="landingCarousel"
    data-bs-ride="carousel"
    data-bs-interval="5000"
>

    <div class="carousel-indicators">

        <button
            type="button"
            data-bs-target="#landingCarousel"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
        ></button>

        <button
            type="button"
            data-bs-target="#landingCarousel"
            data-bs-slide-to="1"
            aria-label="Slide 2"
        ></button>

        <button
            type="button"
            data-bs-target="#landingCarousel"
            data-bs-slide-to="2"
            aria-label="Slide 3"
        ></button>

    </div>

    <div class="carousel-inner">

        <div class="carousel-item active carousel-slide-1">

            <div class="hero-content">

                <span>
                    SMP NEGERI 1 TASIKMALAYA
                </span>

                <h2>
                    Membangun Generasi Unggul
                </h2>

                <p>
                    Mewujudkan peserta didik yang berkompeten,
                    kreatif, berkarakter, dan siap menghadapi
                    tantangan masa depan.
                </p>

                <a
                    href="{{ route('landing.profil') }}"
                    class="hero-button"
                >
                    Profil Sekolah
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </div>

        </div>

        <div class="carousel-item carousel-slide-2">

            <div class="hero-content">

                <span>
                    PENDIDIKAN BERKUALITAS
                </span>

                <h2>
                    Belajar dan Berkarya
                </h2>

                <p>
                    Mengembangkan keterampilan dan potensi
                    siswa melalui pembelajaran yang aktif
                    dan inovatif.
                </p>

                <a
                    href="{{ route('landing.guru') }}"
                    class="hero-button"
                >
                    Lihat Guru
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </div>

        </div>

        <div class="carousel-item carousel-slide-3">

            <div class="hero-content">

                <span>
                    SMP NEGERI 1 TASIKMALAYA
                </span>

                <h2>
                    Siap Menghadapi Masa Depan
                </h2>

                <p>
                    Mempersiapkan generasi muda dengan
                    pengetahuan, keterampilan, karakter,
                    dan kemampuan yang sesuai dengan
                    perkembangan zaman.
                </p>

                <a
                    href="{{ route('landing.berita') }}"
                    class="hero-button"
                >
                    Lihat Berita
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </div>

        </div>

    </div>

    <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#landingCarousel"
        data-bs-slide="prev"
    >
        <span class="carousel-control-prev-icon"></span>

        <span class="visually-hidden">
            Previous
        </span>
    </button>

    <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#landingCarousel"
        data-bs-slide="next"
    >
        <span class="carousel-control-next-icon"></span>

        <span class="visually-hidden">
            Next
        </span>
    </button>

</section>

<section class="stats-section">

    <div
        class="stats-container"
        data-aos="fade-up"
        data-aos-duration="800"
    >

        <div
            class="stat-card"
            data-aos="fade-up"
            data-aos-delay="100"
        >

            <i class="fa-solid fa-user-graduate"></i>

            <div>

                <h3>
                    {{ $totalSiswa }}
                </h3>

                <p>
                    Total Siswa
                </p>

            </div>

        </div>

        <div
            class="stat-card"
            data-aos="fade-up"
            data-aos-delay="200"
        >

            <i class="fa-solid fa-chalkboard-user"></i>

            <div>

                <h3>
                    {{ $totalGuru }}
                </h3>

                <p>
                    Total Guru
                </p>

            </div>

        </div>

        <div
            class="stat-card"
            data-aos="fade-up"
            data-aos-delay="300"
        >

            <i class="fa-solid fa-newspaper"></i>

            <div>

                <h3>
                    {{ $totalBerita }}
                </h3>

                <p>
                    Total Berita
                </p>

            </div>

        </div>

        <div
            class="stat-card"
            data-aos="fade-up"
            data-aos-delay="400"
        >

            <i class="fa-solid fa-trophy"></i>

            <div>

                <h3>
                    {{ $totalEkstrakurikuler }}
                </h3>

                <p>
                    Total Ekstrakurikuler
                </p>

            </div>

        </div>

    </div>

</section>

<section
    class="sambutan-section"
    id="profil"
    data-aos="fade-up"
    data-aos-duration="900"
>

    @if($profil)

        <div class="sambutan-container">

            <div
                class="sambutan-photo"
                data-aos="fade-right"
                data-aos-duration="900"
            >

                @if(!empty($profil->foto))

                    <img
                        src="{{ asset('storage/' . ltrim($profil->foto, '/')) }}"
                        alt="Foto Kepala Sekolah"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                    >

                    <div
                        class="sambutan-photo-empty"
                        style="display:none;"
                    >
                        <i class="fa-solid fa-user-tie"></i>
                    </div>

                @else

                    <div class="sambutan-photo-empty">

                        <i class="fa-solid fa-user-tie"></i>

                    </div>

                @endif

            </div>

            <div
                class="sambutan-content"
                data-aos="fade-left"
                data-aos-duration="900"
            >

                <div class="sambutan-label">
                    SAMBUTAN KEPALA SEKOLAH
                </div>

                <h2>
                    {{ $profil->kepala_sekolah ?? 'Kepala Sekolah' }}
                </h2>

                <div class="sambutan-line"></div>

                <p>
                    Puji syukur ke hadirat Tuhan YME atas segala rahmat dan karunia-Nya.
                    Selamat datang di website resmi SMP Negeri 1 Tasikmalaya.
                    Website ini kami hadirkan sebagai sarana informasi dan komunikasi
                    antara sekolah dengan orang tua, peserta didik, serta masyarakat luas.
                </p>

                <p>
                    Melalui media ini, kami berharap seluruh informasi mengenai kegiatan,
                    prestasi, serta program pendidikan dapat tersampaikan secara transparan,
                    cepat, dan akurat.
                </p>

                <div class="sambutan-identitas">

                    <strong>
                        {{ $profil->kepala_sekolah ?? 'Kepala Sekolah' }}
                    </strong>

                    <span>
                        Kepala Sekolah
                    </span>

                </div>

            </div>

        </div>

    @else

        <div class="empty-news">

            <i class="fa-solid fa-school"></i>

            <p>
                Data profil sekolah belum tersedia.
            </p>

        </div>

    @endif

</section>

<section id="guru">

    <div
        class="section-title"
        data-aos="fade-up"
    >

        <div class="guru-heading">

            <div class="guru-heading-content">

                <span class="guru-label">
                    Tenaga Pendidik Profesional
                </span>

                <h2>
                    Guru & Staf Berkualitas
                </h2>

                <p>
                    Guru dan staf kami terdiri dari tenaga profesional yang kompeten,
                    berpengalaman, dan berdedikasi tinggi dalam memberikan layanan
                    pendidikan berkualitas.
                </p>

            </div>

            <a
                href="{{ route('landing.guru') }}"
                class="lihat-semua"
            >
                Lihat Semua
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>

    </div>

    @if($guru->count() > 0)

        <div class="guru-grid">

            @foreach($guru as $item)

                <a
                    href="{{ route('landing.guru.detail', $item->id_guru) }}"
                    class="guru-card"
                    data-aos="fade-up"
                    data-aos-delay="{{ $loop->index * 100 }}"
                >

                    <div class="guru-foto">

                        @if($item->foto)

                            <img
                                src="{{ asset('storage/' . $item->foto) }}"
                                alt="{{ $item->nama_guru }}"
                            >

                        @else

                            <i class="fa-solid fa-user"></i>

                        @endif

                    </div>

                    <div class="guru-info">

                        <h3>
                            {{ $item->nama_guru }}
                        </h3>

                        <p>
                            {{ $item->mapel ?: 'Guru' }}
                        </p>

                        <span>
                            NIP: {{ $item->nip ?: '-' }}
                        </span>

                    </div>

                </a>

            @endforeach

        </div>

    @else

        <div
            class="empty-guru"
            data-aos="fade-up"
        >

            <i class="fa-solid fa-user-group"></i>

            <p>
                Belum ada data guru.
            </p>

        </div>

    @endif

</section>

<section id="ekstrakurikuler">

    <div
        class="section-title"
        data-aos="fade-up"
    >

        <div class="ekskul-heading">

            <div class="ekskul-heading-content">

                <span class="ekskul-label">
                    Pengembangan Minat dan Bakat
                </span>

                <h2>
                    Ekstrakurikuler Sekolah
                </h2>

                <p>
                    Berbagai kegiatan ekstrakurikuler tersedia sebagai wadah bagi siswa
                    untuk mengembangkan minat, bakat, keterampilan, kreativitas, serta
                    kemampuan bekerja sama di luar kegiatan pembelajaran.
                </p>

            </div>

            <a
                href="{{ route('landing.ekstrakurikuler') }}"
                class="lihat-semua"
            >
                Lihat Semua
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>

    </div>

    @if($ekstrakurikuler->count() > 0)

        <div class="ekskul-grid">

            @foreach($ekstrakurikuler as $item)

                <a
                    href="{{ route('landing.ekstrakurikuler.detail', $item->id_ekskul) }}"
                    class="ekskul-card"
                    data-aos="fade-up"
                    data-aos-delay="{{ $loop->index * 100 }}"
                >

                    <div class="ekskul-foto">

                        @if($item->gambar)

                            <img
                                src="{{ asset('storage/' . ltrim($item->gambar, '/')) }}"
                                alt="{{ $item->nama_ekskul }}"
                            >

                        @else

                            <i class="fa-solid fa-star"></i>

                        @endif

                    </div>

                    <div class="ekskul-info">

                        <h3>
                            {{ $item->nama_ekskul }}
                        </h3>

                        <p>
                            {{ $item->deskripsi ?: 'Kegiatan ekstrakurikuler untuk mengembangkan minat dan bakat siswa.' }}
                        </p>

                        <span class="ekskul-detail-link">
                            Lihat Detail
                            <i class="fa-solid fa-arrow-right"></i>
                        </span>

                    </div>

                </a>

            @endforeach

        </div>

    @else

        <div
            class="empty-ekskul"
            data-aos="fade-up"
        >

            <i class="fa-solid fa-trophy"></i>

            <p>
                Belum ada data ekstrakurikuler.
            </p>

        </div>

    @endif

</section>

<section
    class="section"
    id="berita"
    data-aos="fade-up"
    data-aos-duration="900"
>

    <div class="section-title">

        <h2>
            Berita Terbaru
        </h2>

        <p>
            Informasi dan berita terbaru SMP Negeri 1 Tasikmalaya
        </p>

    </div>

    @if($berita)

        <div
            class="news-card"
            data-aos="zoom-in"
            data-aos-duration="900"
        >

            @if($berita->gambar)

                <img
                    src="{{ asset('storage/' . ltrim($berita->gambar, '/')) }}"
                    alt="{{ $berita->judul }}"
                    class="news-image"
                >

            @endif

            <div class="news-content">

                <span class="news-date">

                    <i class="fa-regular fa-calendar"></i>

                    {{ $berita->tanggal->format('d M Y') }}

                </span>

                <h3>
                    {{ $berita->judul }}
                </h3>

                <p>
                    {{ \Illuminate\Support\Str::limit(strip_tags($berita->isi), 200) }}
                </p>

                <a
                    href="{{ route('berita.detail', $berita->slug) }}"
                    class="news-button"
                >
                    Selengkapnya
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </div>

        </div>

    @else

        <div
            class="empty-news"
            data-aos="fade-up"
        >

            <i class="fa-regular fa-newspaper"></i>

            <p>
                Belum ada berita yang dipublikasi.
            </p>

        </div>

    @endif

</section>

<section
    class="section"
    id="galeri"
    data-aos="fade-up"
    data-aos-duration="900"
>

    <div class="gallery-heading">

        <div class="gallery-heading-content">

            <h2>
                Galeri Sekolah
            </h2>

            <p>
                Dokumentasi Kegiatan Galeri Sekolah
                <br>
                Galeri sekolah menampilkan berbagai dokumentasi kegiatan dan momen
                berharga siswa selama proses pembelajaran dan pengembangan diri.
            </p>

        </div>

        <a
            href="{{ route('landing.galeri') }}"
            class="lihat-semua"
        >
            Lihat Semua
            <i class="fa-solid fa-arrow-right"></i>
        </a>

    </div>

    <div class="gallery-grid">

        @if($galeri->count() > 0)

            @foreach($galeri as $item)

                <a
                    href="{{ route('landing.galeri.detail', $item->id_galeri) }}"
                    class="gallery-card"
                    data-aos="fade-up"
                    data-aos-delay="{{ $loop->index * 100 }}"
                >

                    @if($item->file)

                        <img
                            src="{{ asset('storage/' . ltrim($item->file, '/')) }}"
                            alt="{{ $item->judul }}"
                        >

                    @else

                        <div class="empty-gallery-image">

                            <i class="fa-regular fa-image"></i>

                        </div>

                    @endif

                    <div class="gallery-overlay">

                        <h3>
                            {{ $item->judul }}
                        </h3>

                        @if($item->kategori)

                            <span>
                                {{ $item->kategori }}
                            </span>

                        @endif

                    </div>

                </a>

            @endforeach

        @else

            <div
                class="empty-gallery"
                data-aos="fade-up"
            >

                <i class="fa-regular fa-images"></i>

                <p>
                    Belum ada foto galeri.
                </p>

            </div>

        @endif

    </div>

</section>

<footer class="footer">

    <div class="footer-container">

        <div class="footer-grid">

            <div
                class="footer-left"
                data-aos="fade-right"
            >

                <div class="footer-brand">

                    <img
                        src="{{ asset('assets/images/logo2.png') }}"
                        alt="Logo SMP Negeri 1 Kota Tasikmalaya"
                        class="footer-logo"
                    >

                    <h4>
                        SMP NEGERI 1 KOTA TASIKMALAYA
                    </h4>

                </div>

                <div class="footer-address">

                    <i class="fa-solid fa-location-dot"></i>

                    <span>
                        Kota Tasikmalaya, Jawa Barat, Indonesia.
                    </span>

                </div>

            </div>

            <div
                class="footer-right"
                data-aos="fade-left"
            >

                <div class="footer-contact">

                    <i class="fa-solid fa-envelope"></i>

                    <span>
                        info@smpn1tasikmalaya.sch.id
                    </span>

                </div>

                <div class="footer-contact">

                    <i class="fa-brands fa-whatsapp"></i>

                    <span>
                        08112224563
                    </span>

                </div>

                <div class="footer-contact">

                    <i class="fa-solid fa-phone"></i>

                    <span>
                        0265-546717
                    </span>

                </div>

            </div>

        </div>

    </div>

    <div class="footer-bottom">

        <strong>
            © {{ date('Y') }} SMP NEGERI 1 KOTA TASIKMALAYA. All Rights Reserved.
        </strong>

        <br>

        Mencetak Generasi Unggul, Berkarakter, dan Berprestasi.

    </div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    AOS.init({
        duration: 800,
        once: true
    });
</script>

</body>

</html>