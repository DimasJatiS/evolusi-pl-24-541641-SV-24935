<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage Minimalis Interaktif</title>
    <!-- Ganti dengan font sans-serif modern seperti Poppins atau Montserrat -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        /* --- RESET CSS DASAR --- */
        :root {
            --primary-color: #333; /* Soft dark untuk teks */
            --background-color: #ffffff; /* Putih bersih */
            --accent-color: #5ed6b3; /* Mint green halus untuk aksen */
            --card-shadow: 0 10px 30px rgba(0, 0, 0, 0.05); /* Bayangan sangat halus */
            --transition-smooth: 0.4s ease-in-out;
            --white-space-lg: 120px;
            --white-space-md: 80px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--background-color);
            color: var(--primary-color);
            line-height: 1.6;
            scroll-behavior: smooth; /* Smooth scroll secara alami */
            overflow-x: hidden;
        }

        a {
            text-decoration: none;
            color: inherit;
            transition: var(--transition-smooth);
        }

        ul {
            list-style: none;
        }

        /* --- CONTAINER UTAMA --- */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* --- HEADER --- */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.95);
            padding: 20px 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.02);
        }

        header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: 600;
            color: #222;
        }

        .nav-links {
            display: flex;
            gap: 30px;
        }

        .nav-links a {
            font-size: 15px;
            font-weight: 400;
            position: relative;
        }

        /* Efek hover garis bawah */
        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: var(--accent-color);
            transition: width var(--transition-smooth);
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .mobile-menu-icon {
            display: none;
            font-size: 24px;
            cursor: pointer;
        }

        /* --- BAGIAN UTAMA (MAIN) --- */
        main {
            margin-top: 100px; /* Jarak untuk header fixed */
        }

        /* Animasi scroll fade-in (diaktifkan JS) */
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .animate-on-scroll.appear {
            opacity: 1;
            transform: translateY(0);
        }

        /* --- HERO SECTION --- */
        #hero {
            padding: var(--white-space-lg) 0;
            text-align: center;
            background: radial-gradient(circle at center, #fcfcfc 0%, #ffffff 70%);
        }

        .hero-content h1 {
            font-size: 48px;
            font-weight: 600;
            color: #111;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .hero-content p {
            font-size: 18px;
            color: #555;
            max-width: 600px;
            margin: 0 auto 40px;
            font-weight: 300;
        }

        .btn {
            display: inline-block;
            padding: 12px 30px;
            border: 2px solid var(--accent-color);
            background-color: transparent;
            color: #222;
            font-weight: 400;
            border-radius: 5px;
            cursor: pointer;
            transition: var(--transition-smooth);
        }

        .btn:hover {
            background-color: var(--accent-color);
            color: #fff;
            box-shadow: 0 5px 15px rgba(94, 214, 179, 0.3);
        }

        /* --- FEATURES SECTION --- */
        #features {
            padding: var(--white-space-md) 0;
        }

        #features h2 {
            font-size: 32px;
            font-weight: 600;
            text-align: center;
            margin-bottom: 60px;
        }

        /* Scrollable container */
        .feature-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            overflow-x: auto; /* Aktifkan scroll horizontal di layar kecil */
            padding-bottom: 20px;
            scroll-behavior: smooth;
        }

        .feature-card {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: var(--card-shadow);
            border: 1px solid #f0f0f0;
            transition: var(--transition-smooth);
            min-width: 280px; /* Pastikan kartu tidak terlalu kecil saat scroll */
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
        }

        .feature-card i {
            font-size: 36px;
            color: var(--accent-color);
            margin-bottom: 20px;
            display: inline-block;
        }

        .feature-card h3 {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .feature-card p {
            font-size: 15px;
            color: #666;
            font-weight: 300;
        }

        /* --- ABOUT SECTION --- */
        #about {
            padding: var(--white-space-lg) 0;
            background-color: #fcfcfc;
        }

        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .about-text h2 {
            font-size: 32px;
            font-weight: 600;
            margin-bottom: 25px;
        }

        .about-text p {
            font-size: 16px;
            color: #555;
            margin-bottom: 20px;
            font-weight: 300;
        }

        .about-image {
            background-color: #eee;
            height: 400px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #aaa;
            font-weight: 300;
            border: 1px solid #e0e0e0;
        }

        /* --- FOOTER --- */
        footer {
            padding: var(--white-space-md) 0;
            background-color: #fff;
            border-top: 1px solid #f0f0f0;
            color: #888;
            font-size: 14px;
            font-weight: 300;
        }

        footer .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .social-links {
            display: flex;
            gap: 20px;
        }

        .social-links a:hover {
            color: var(--accent-color);
        }

        /* --- RESPONSIVE DESIGN --- */
        @media (max-width: 992px) {
            .hero-content h1 { font-size: 36px; }
            .about-grid { grid-template-columns: 1fr; gap: 40px; text-align: center; }
            .feature-container {
                grid-template-columns: repeat(3, minmax(280px, 1fr)); /* Paksa kartu minimal 280px */
            }
        }

        @media (max-width: 768px) {
            .nav-links { display: none; } /* Sembunyikan menu di mobile */
            .mobile-menu-icon { display: block; } /* Tampilkan ikon menu */
            .hero-content h1 { font-size: 32px; }
            .hero-content p { font-size: 16px; }
            :root {
                --white-space-lg: 80px;
                --white-space-md: 60px;
            }
        }
    </style>
</head>
<body>

    <!-- HEADER & NAVIGASI -->
    <header>
        <div class="container">
            <a href="#hero" class="logo">Test</a>
            <nav class="nav-links">
                <a href="#hero">Test</a>
            </nav>
            <!-- Ikon Menu Mobile (Placeholder) -->
            <div class="mobile-menu-icon" onclick="toggleMenu()">☰</div>
        </div>
    </header>

    <!-- KONTEN UTAMA -->
    <main>
        
        <!-- HERO SECTION -->
        <section id="hero">
            <div class="container hero-content">
                <h1>Selamat Datang</h1>
                <p>Test.</p>
                <a href="#features" class="btn">Test Sekarang</a>
            </div>
        </section>

        <!-- FEATURES SECTION -->
        <section id="features" class="animate-on-scroll">
            <div class="container">
                <h2>Testing</h2>
                <div class="feature-container">
                    <!-- Kartu Fitur 1 -->
                    <div class="feature-card">
                        <i>✨</i>
                        <h3>test</h3>
                        <p>Test.</p>
                    </div>
                    <!-- Kartu Fitur 2 -->
                    <div class="feature-card">
                        <i>🚀</i>
                        <h3>test</h3>
                        <p>Test.</p>
                    </div>
                    <!-- Kartu Fitur 3 -->
                    <div class="feature-card">
                        <i>📱</i>
                        <h3>test</h3>
                        <p>Test.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ABOUT SECTION -->
        <section id="about" class="animate-on-scroll">
            <div class="container about-grid">
                <div class="about-text">
                    <h2>Tentang Kami</h2>
                </div>
                <div class="about-image">
                    [ Gambar / Visual Minimalis ]
                </div>
            </div>
        </section>
        
        <!-- Jarak placeholder untuk mendemonstrasikan scroll -->
        <div style="height: 300px; background: #fff;"></div>

    </main>

    <!-- FOOTER -->
    <footer>
        <div id="contact" class="container">
            <p>&copy; Test</p>
            <div class="social-links">
                <a href="#">test</a>
                <a href="#">test</a>
                <a href="#">test</a>
            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT UNTUK INTERAKTIVITAS -->
    <script>
        // --- ANIMASI FADE-IN SAAT SCROLL ---
        // Menggunakan Intersection Observer API untuk memicu animasi
        const elementsToAnimate = document.querySelectorAll('.animate-on-scroll');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('appear'); // Tambahkan kelas 'appear' saat elemen masuk layar
                    observer.unobserve(entry.target); // Berhenti mengamati setelah animasi dipicu
                }
            });
        }, {
            threshold: 0.15 // Picu animasi saat 15% elemen terlihat
        });

        elementsToAnimate.forEach((element) => {
            observer.observe(element);
        });

        // --- MENU MOBILE TOGGLE (Placeholder) ---
        function toggleMenu() {
            alert("Fungsi menu mobile akan membuka menu navigasi di sini.");
            // Di sini Anda dapat menambahkan kode untuk menampilkan/menyembunyikan .nav-links di mobile
        }
    </script>
</body>
</html>