<?php include('../includes/auth.php'); ?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News - Acrisure Italia</title>
    <meta name="description" content="Tutte le ultime novità e aggiornamenti da Acrisure Italia. Scopri le nostre partnership, premi e iniziative nel settore assicurativo.">
    <meta name="keywords" content="news Acrisure, aggiornamenti assicurazioni, novità broker assicurativo, eventi Acrisure Italia">
    <link rel="canonical" href="https://www.acrisureservices.it/news.php" />
    <!-- Schema markup per organizzazione -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Acrisure Services",
      "url": "https://www.acrisureservices.it",
      "logo": "https://www.acrisureservices.it/img/Acrisure-Services-Esteso.jpg",
      "sameAs": [
        "https://www.linkedin.com/company/acrisure-services"
      ]
    }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #0056b3;
            --secondary: #003366;
            --accent: #4d8fd1;
            --light: #f8f9fa;
            --dark: #212529;
            --success: #28a745;
            --warning: #ffc107;
            --error: #dc3545;
        }
        
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: var(--dark);
            background-color: white;
            scroll-behavior: smooth;
            background: linear-gradient(rgba(255, 255, 255, 0.7), rgba(255, 255, 255, 0.7)), url('/img/body.avif');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            opacity: 0;
            animation: fadeIn 0.5s ease-out forwards;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        /* Header */
        header {
            background-color: white;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            z-index: 1000;
            transition: all 0.3s;
        }
        
        header.scrolled {
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
        }
        
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 5%;
            max-width: 1400px;
            margin: 0 auto;
        }
        
        .logo {
            height: 70px;
            transition: transform 0.3s;
        }

        .logo-footer {
            height: 50px;
            transition: transform 0.3s;
        }
        
        .logo:hover {
            transform: scale(1.05);
        }
        
        nav ul {
            display: flex;
            list-style: none;
            align-items: center;
        }
        
        nav ul li {
            margin-left: 2rem;
            position: relative;
        }
        
        nav ul li a {
            text-decoration: none;
            color: var(--dark);
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s;
            padding: 0.5rem 0;
            position: relative;
            letter-spacing: 0.5px;
        }
        
        nav ul li:not(:last-child)::after {
            content: "|";
            color: rgba(0, 0, 0, 0.2);
            position: absolute;
            right: -1.2rem;
            top: 50%;
            transform: translateY(-50%);
        }
        
        nav ul li a:hover {
            color: var(--primary);
        }
        
        nav ul li a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: var(--accent);
            transition: width 0.3s;
        }
        
        nav ul li a:hover::after {
            width: 100%;
        }

        /* Language switcher */
        .language-switcher {
            margin-left: auto;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .language-switcher::after {
            content: "|";
            color: rgba(0, 0, 0, 0.2);
            position: absolute;
            right: -1.2rem;
            top: 50%;
            transform: translateY(-50%);
        }

        .language-btn {
            background: none;
            border: none;
            color: var(--dark);
            font-weight: 600;
            font-size: 1.1rem;
            cursor: pointer;
            padding: 0.5rem 0;
            transition: all 0.3s;
            position: relative;
            text-decoration: none;
            letter-spacing: 0.5px;
        }

        .language-btn.active {
            color: var(--primary);
        }

        .language-btn::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: var(--accent);
            transition: width 0.3s;
        }
 
        .language-btn.active::after,
        .language-btn:hover::after {
            width: 100%;
        }

        .language-btn:hover {
         color: var(--accent);
        }

        /* Hero Section */
        .news-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('/img/777.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            height: 50vh;
            min-height: 400px;
            display: flex;
            align-items: center;
            padding-top: 80px;
            color: white;
            text-align: center;
        }
        
        .news-hero-content {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 5%;
            width: 100%;
        }
        
        .news-hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }
        
        .breadcrumb {
            display: flex;
            justify-content: center;
            margin-bottom: 2rem;
            font-size: 1rem;
            opacity: 0.9;
        }
        
        .breadcrumb a {
            color: var(--accent);
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .breadcrumb a:hover {
            color: white;
            text-decoration: underline;
        }
        
        .breadcrumb span {
            margin: 0 0.5rem;
            color: rgba(255, 255, 255, 0.7);
        }
        
        /* News Grid Section */
        .news-grid-section {
            padding: 6rem 5%;
            max-width: 1400px;
            margin: 0 auto;
        }
        
        .news-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 2.5rem;
            margin-top: 3rem;
        }
        
        .news-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border: 1px solid #eee;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.5s ease-out forwards;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .news-card:nth-child(1) { animation-delay: 0.1s; }
        .news-card:nth-child(2) { animation-delay: 0.2s; }
        .news-card:nth-child(3) { animation-delay: 0.3s; }
        .news-card:nth-child(4) { animation-delay: 0.4s; }
        .news-card:nth-child(5) { animation-delay: 0.5s; }
        .news-card:nth-child(6) { animation-delay: 0.6s; }
        
        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
            border-color: var(--accent);
        }
        
        .news-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .news-card:hover .news-image {
            transform: scale(1.03);
        }
        
        .news-content {
            padding: 2rem;
        }
        
        .news-date {
            font-size: 0.9rem;
            color: var(--accent);
            margin-bottom: 0.8rem;
            display: block;
        }
        
        .news-card h3 {
            color: var(--secondary);
            margin-bottom: 1rem;
            font-size: 1.4rem;
            line-height: 1.4;
            transition: color 0.3s ease;
        }

        .news-card:hover h3 {
            color: var(--accent);
        }
        
        .news-excerpt {
            color: #555;
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }
        
        .news-link {
            display: inline-flex;
            align-items: center;
            color: var(--accent);
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .news-link i {
            margin-left: 0.5rem;
            transition: transform 0.3s;
        }
        
        .news-link:hover {
            color: var(--primary);
        }
        
        .news-link:hover i {
            transform: translateX(5px);
        }
        
        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 4rem;
            gap: 0.5rem;
        }
        
        .page-link {
            display: inline-block;
            padding: 0.8rem 1.2rem;
            background-color: white;
            color: var(--secondary);
            border: 1px solid #ddd;
            border-radius: 4px;
            text-decoration: none;
            transition: all 0.3s;
            font-weight: 600;
        }
        
        .page-link:hover, .page-link.active {
            background-color: var(--accent);
            color: white;
            border-color: var(--accent);
        }
        
        /* Single News Article */
        .news-article {
            max-width: 900px;
            margin: 0 auto;
            padding: 6rem 5%;
        }
        
        .article-header {
            margin-bottom: 3rem;
            text-align: center;
        }
        
        .article-header .news-date {
            font-size: 1rem;
            margin-bottom: 1rem;
        }
        
        .article-header h1 {
            color: var(--secondary);
            font-size: 2.5rem;
            line-height: 1.3;
            margin-bottom: 1.5rem;
        }
        
        .article-meta {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 1rem;
            color: #666;
            font-size: 0.9rem;
        }
        
        .article-meta .author {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .article-meta .author img {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            object-fit: cover;
        }
        
        .article-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 2rem;
        }
        
        .article-content {
            line-height: 1.8;
            font-size: 1.1rem;
            color: #333;
        }
        
        .article-content p {
            margin-bottom: 1.5rem;
        }
        
        .article-content h2, .article-content h3 {
            color: var(--secondary);
            margin: 2rem 0 1rem;
        }
        
        .article-content h2 {
            font-size: 1.8rem;
        }
        
        .article-content h3 {
            font-size: 1.5rem;
        }
        
        .article-content blockquote {
            border-left: 4px solid var(--accent);
            padding-left: 1.5rem;
            margin: 2rem 0;
            font-style: italic;
            color: #555;
        }
        
        .article-content img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin: 1.5rem 0;
        }
        
        .article-footer {
            margin-top: 4rem;
            padding-top: 2rem;
            border-top: 1px solid #eee;
        }
        
        .tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-bottom: 2rem;
        }
        
        .tag {
            display: inline-block;
            padding: 0.5rem 1rem;
            background-color: rgba(77, 143, 209, 0.1);
            color: var(--accent);
            border-radius: 20px;
            font-size: 0.9rem;
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .tag:hover {
            background-color: var(--accent);
            color: white;
        }
        
        .back-to-news {
            display: inline-flex;
            align-items: center;
            color: var(--accent);
            font-weight: 600;
            text-decoration: none;
            margin-top: 2rem;
        }
        
        .back-to-news i {
            margin-right: 0.5rem;
            transition: transform 0.3s;
        }
        
        .back-to-news:hover i {
            transform: translateX(-5px);
        }
        
        /* Related News */
        .related-news {
            margin-top: 4rem;
        }
        
        .related-news h2 {
            color: var(--secondary);
            margin-bottom: 2rem;
            font-size: 1.8rem;
            text-align: center;
        }

        /* Footer */
        footer {
            background-color: white;
            color: var(--secondary);
            padding: 4rem 5% 2rem;
            border-top: 1px solid rgba(0, 0, 0, 0.1);
            box-shadow: 0 -5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            max-width: 1400px;
            margin: 0 auto;
        }
        
        .footer-column h3 {
            color: var(--secondary);
            margin-bottom: 1.5rem;
            font-size: 1.3rem;
            position: relative;
            padding-bottom: 0.8rem;
        }
        
        .footer-column h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 2px;
            background-color: var(--accent);
        }

        /* Footer migliorato */
        .footer-column h3 i {
            margin-right: 10px;
            color: var(--accent);
        }

        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 0.8rem;
            line-height: 1.6;
        }
        
        .footer-links a {
            color: var(--secondary);
            text-decoration: none;
            transition: all 0.3s;
            font-size: 1rem;
            display: inline-block;
            padding: 2px 0;
            position: relative;
        }
        
        .footer-links a:hover {
            color: var(--accent);
        }

        .footer-links a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 1px;
            background-color: var(--accent);
            transition: width 0.3s;
        }

        .footer-links li i {
            width: 20px;
            text-align: center;
            margin-right: 8px;
            color: var(--accent);
        }

        .social-links {
            margin-top: 1.5rem;
            display: flex;
            gap: 15px;
        }

        .social-links a {
            color: var(--secondary);
            font-size: 1.2rem;
            transition: all 0.3s;
        }

        .social-links a:hover {
            color: var(--accent);
            transform: translateY(-3px);
        }

        .footer-legal {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .legal-links {
            display: flex;
            gap: 1.5rem;
        }

        .legal-links a {
            color: var(--secondary);
            text-decoration: none;
            transition: color 0.3s;
        }

        .legal-links a:hover {
            color: var(--accent);
            text-decoration: underline;
        }

        .footer-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 2rem;
            padding-top: 3rem;
            margin-top: 3rem;
            border-top: 1px solid rgba(0, 0, 0, 0.1);
        }

        .footer-badge {
            display: flex;
            gap: 1rem;
        }

        .footer-badge img {
            height: 40px;
            width: auto;
            opacity: 0.8;
            transition: opacity 0.3s;
        }

        .footer-badge img:hover {
            opacity: 1;
        }
        
        /* Cookie banner */
        .cookie-banner {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: var(--secondary);
            color: white;
            padding: 1.5rem;
            display: none;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
            flex-wrap: wrap;
        }
        
        .cookie-banner p {
            margin: 0;
            flex: 1;
            min-width: 250px;
            font-size: 1rem;
        }
        
        .cookie-banner a {
            color: var(--accent);
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .cookie-banner a:hover {
            color: white;
            text-decoration: underline;
        }
        
        .cookie-banner button {
            margin-left: 1rem;
            background: var(--accent);
            color: white;
            border: none;
            padding: 0.7rem 1.2rem;
            border-radius: 4px;
            cursor: pointer;
            transition: all 0.3s;
            font-weight: 600;
            font-size: 0.9rem;
            min-width: 100px;
        }
        
        .cookie-banner button:hover {
            background: var(--primary);
            transform: translateY(-2px);
        }
        
        /* Mobile Menu */
        .menu-toggle {
            display: none;
            cursor: pointer;
            padding: 1rem;
        }
        
        .menu-toggle span {
            display: block;
            width: 25px;
            height: 3px;
            background-color: var(--dark);
            margin-bottom: 5px;
            transition: all 0.3s;
        }
        
        /* Responsive */
        @media (max-width: 1024px) {
            .news-hero h1 {
                font-size: 3rem;
            }
            
            .news-grid {
                grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            }
        }
        
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                padding: 0;
            }
            
            .navbar-brand {
                width: 100%;
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 1rem;
            }
            
            .menu-toggle {
                display: block;
            }
            
            nav {
                width: 100%;
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.3s ease;
            }
            
            nav.active {
                max-height: 500px;
            }
            
            nav ul {
                flex-direction: column;
                padding: 0 1rem 1rem;
            }
            
            nav ul li {
                margin: 0.5rem 0;
            }
            
            nav ul li::after {
                display: none;
            }
            
            .news-hero {
                height: 40vh;
                min-height: 300px;
            }
            
            .news-hero h1 {
                font-size: 2.5rem;
            }
            
            .article-header h1 {
                font-size: 2rem;
            }
            
            .article-image {
                height: 300px;
            }
            
            .menu-toggle.active span:nth-child(1) {
                transform: rotate(45deg) translate(5px, 5px);
            }
            
            .menu-toggle.active span:nth-child(2) {
                opacity: 0;
            }
            
            .menu-toggle.active span:nth-child(3) {
                transform: rotate(-45deg) translate(7px, -6px);
            }

            .language-switcher {
                margin-left: 0;
                justify-content: center;
                padding: 1rem 0;
            }
        }
        
        @media (max-width: 480px) {
            .news-hero h1 {
                font-size: 2rem;
            }
            
            .news-grid {
                grid-template-columns: 1fr;
            }
            
            .article-header h1 {
                font-size: 1.8rem;
            }
            
            .article-image {
                height: 250px;
            }
            
            .pagination {
                flex-wrap: wrap;
            }
            
            .footer-content {
                grid-template-columns: 1fr;
            }
            
            .footer-bottom {
                flex-direction: column;
                text-align: center;
            }
            
            .legal-links {
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <header id="header">
        <div class="navbar">
            <div class="navbar-brand">
                <a href="/italia.php">
                <img src="/img/Acrisure Italia.jpg" class="logo" alt=""></li>
                </a>
                <div class="menu-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <nav>
                <ul>
                    <li><a href="/italia.php#news" class="nav-link">News</a></li>
                    <li><a href="/italia.php#gruppo" class="nav-link">Leadership</a></li>
                    <li><a href="/italia.php#services" class="nav-link">Servizi</a></li>
                    <li><a href="/index.php#gruppo" class="nav-link">Il Nostro Gruppo</a></li>
                    <li><a href="#" class="nav-link">Lavora con noi</a></li>
                </ul>
            </nav>
            <nav class="language-switcher">
                <ul>
                    <li><a href="#" class="language-btn active">IT</a></li>
                    <li><a onclick="window.location.href='#'" class="language-btn">EN</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="news-hero">
        <div class="news-hero-content">
            <h1>News & Aggiornamenti</h1>
        </div>
    </section>

    <!-- News Grid Section -->
    <section class="news-grid-section">
        <div class="news-grid">
            <!-- News Article 1 -->
            <article class="news-card">
                <img src="/img/news1.jpg" alt="Nuova partnership nel settore agricolo" class="news-image">
                <div class="news-content">
                    <span class="news-date">15 Marzo 2024</span>
                    <h3>Nuova partnership nel settore agricolo</h3>
                    <p class="news-excerpt">Acrisure Agricolture annuncia una collaborazione strategica con il principale consorzio agricolo nazionale per offrire polizze ancora più vantaggiose.</p>
                    <a href="news-article.php?id=1" class="news-link">Leggi tutto <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>
            
            <!-- News Article 2 -->
            <article class="news-card">
                <img src="/img/news2.jpg" alt="Premio Innovazione Assicurativa 2024" class="news-image">
                <div class="news-content">
                    <span class="news-date">28 Febbraio 2024</span>
                    <h3>Premio Innovazione Assicurativa 2024</h3>
                    <p class="news-excerpt">Acrisure Italia si aggiudica il prestigioso premio per la sua piattaforma digitale di risk management avanzato.</p>
                    <a href="news-article.php?id=2" class="news-link">Leggi tutto <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>
            
            <!-- News Article 3 -->
            <article class="news-card">
                <img src="/img/news3.jpg" alt="Espansione della rete italiana" class="news-image">
                <div class="news-content">
                    <span class="news-date">10 Gennaio 2024</span>
                    <h3>Espansione della rete italiana</h3>
                    <p class="news-excerpt">Apertura del nuovo ufficio di Torino, con un team specializzato in assicurazioni per il settore automotive.</p>
                    <a href="news-article.php?id=3" class="news-link">Leggi tutto <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>
            
            <!-- News Article 4 -->
            <article class="news-card">
                <img src="/img/news4.jpg" alt="Nuovo servizio di risk management" class="news-image">
                <div class="news-content">
                    <span class="news-date">5 Dicembre 2023</span>
                    <h3>Lancio del nuovo servizio di risk management</h3>
                    <p class="news-excerpt">Acrisure lancia una piattaforma innovativa per la gestione del rischio per le PMI italiane.</p>
                    <a href="news-article.php?id=4" class="news-link">Leggi tutto <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>
            
            <!-- News Article 5 -->
            <article class="news-card">
                <img src="/img/news5.jpg" alt="Partnership con università" class="news-image">
                <div class="news-content">
                    <span class="news-date">20 Novembre 2023</span>
                    <h3>Partnership con l'Università di Sassari</h3>
                    <p class="news-excerpt">Collaborazione con il dipartimento di Economia per la formazione di nuovi professionisti nel settore assicurativo.</p>
                    <a href="news-article.php?id=5" class="news-link">Leggi tutto <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>
            
            <!-- News Article 6 -->
            <article class="news-card">
                <img src="/img/news6.jpg" alt="Evento annuale Acrisure" class="news-image">
                <div class="news-content">
                    <span class="news-date">15 Ottobre 2023</span>
                    <h3>Successo dell'evento annuale Acrisure Italia</h3>
                    <p class="news-excerpt">Oltre 200 partecipanti all'evento che ha presentato le novità per il 2024 e le tendenze del settore.</p>
                    <a href="news-article.php?id=6" class="news-link">Leggi tutto <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>
        </div>
        
        <!-- Pagination -->
        <div class="pagination">
            <a href="#" class="page-link"><i class="fas fa-chevron-left"></i></a>
            <a href="#" class="page-link active">1</a>
            <a href="#" class="page-link">2</a>
            <a href="#" class="page-link">3</a>
            <a href="#" class="page-link"><i class="fas fa-chevron-right"></i></a>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-column">
                <h3><i class="fas fa-building"></i> Sede Legale</h3>
                <ul class="footer-links">
                    <li><i class="fas fa-file-contract"></i> Acrisure S.r.l. - REA MI-2616058</li>
                    <li><i class="fas fa-id-card"></i> P.IVA: 13147890969</li>
                    <li><i class="fas fa-map-marker-alt"></i> Via Giuseppe Mazzini, 3 - 07100 Sassari</li><br>
                    <li><img src="/img/Acrisure Italia.jpg" class="logo-footer" alt=""></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3><i class="fas fa-map-marked-alt"></i> Sedi Italiane</h3>
                <ul class="footer-links">
                    <li><i class="fas fa-city"></i> <strong>Milano (MI)</strong><br>20123 - Via Santa Maria Segreta 6</li>
                    <li><i class="fas fa-city"></i> <strong>Roma (RM)</strong><br>00198 - Via Lovanio 6</li>
                    <li><i class="fas fa-city"></i> <strong>Torino (TO)</strong><br>10123 - Via San Francesco Da Paola 15</li>
                    <li><i class="fas fa-city"></i> <strong>Genova (GE)</strong><br>16121 - Piazza della Vittoria 9</li>
                    <li><i class="fas fa-city"></i> <strong>Cles (TN)</strong><br>38023 - Piazza Granda 44</li>
                </ul>
            </div>
            
            <div class="footer-column">
                <h3><i class="fas fa-headset"></i> Contatti</h3>
                <ul class="footer-links">
                    <li><i class="fas fa-phone-alt"></i> Amministrazione: 079/2016047</li>
                    <li><i class="fas fa-phone-volume"></i> Custom Care: 079/2853063</li>
                    <li><i class="fas fa-envelope"></i> <a href="mailto:info@acrisure.it">info@acrisure.it</a></li>
                    <li><i class="fas fa-file-alt"></i> <a href="mailto:acrisure@pec.acrisure.it">acrisure@pec.acrisure.it</a></li>
                </ul>
                
                <div class="social-links">
                    <a href="https://it.linkedin.com/company/acrisureitalia" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                    <a href="https://www.instagram.com/acrisureitalia/" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            
            <div class="footer-column">
                <h3><i class="fas fa-clock"></i> Orari Ufficio</h3>
                <ul class="footer-links">
                    <li><i class="far fa-clock"></i> <strong>Lun-Ven</strong>: 9:00 - 18:00</li>
                    <li><i class="fas fa-door-closed"></i> <strong>Sab-Dom</strong>: Chiuso</li><br><br>
                    <li>
                        <img src="/img/BV.jpg" class="logo-footer" alt=""> 
                        &nbsp;&nbsp; 
                        <a href="https://www.accredia.it/" target="_blank"><img src="/img/Marchio ACCREDIA.jpg" class="logo-footer" alt=""></a>
                        &nbsp;&nbsp;
                        <a href="https://aiba.it/" target="_blank"><img src="/img/AIBA.png" class="logo-footer" alt="Nuova immagine"></a>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="footer-legal">
                <p>&copy; 2025 Acrisure Services. Tutti i diritti riservati.</p>
                <div class="legal-links">
                    <a href="/policy/policyItalia.php">Privacy Policy</a>
                    <a href="/cookies/cookiesItalia.php">Cookie Policy</a>
                    <a href="/legal&comp/legalItalia.php">Legal & Compliance</a>
                </div>
            </div>
            <div class="footer-badge">
                <img src="/img/ivass-badge.png" alt="Autorizzato IVASS" width="80">
            </div>
        </div>
    </footer>

    <!-- Cookie banner -->
    <div id="cookie-banner" class="cookie-banner">
        <p>Utilizziamo cookie per migliorare la tua esperienza. <a href="/privacy">Maggiori informazioni</a></p>
        <button id="accept-cookies" class="btn">Accetta</button>
    </div>

    <script>
        // Page transition logic
        document.addEventListener('DOMContentLoaded', function() {
            // Add transition class to all internal links
            const links = document.querySelectorAll('.page-transition-link');
            const transition = document.querySelector('.page-transition');
            
            links.forEach(link => {
                link.addEventListener('click', function(e) {
                    // Skip if it's an anchor link or external URL
                    if (this.href.includes('#') || !this.href.includes(window.location.hostname)) {
                        return;
                    }
                    
                    e.preventDefault();
                    const href = this.getAttribute('href');
                    
                    // Show transition overlay
                    transition.classList.add('active');
                    
                    // After transition, change page
                    setTimeout(() => {
                        window.location.href = href;
                    }, 400);
                });
            });
            
            // On page load, fade out transition
            if (transition) {
                setTimeout(() => {
                    transition.classList.remove('active');
                }, 100);
            }
            
            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);
                    
                    if (targetElement) {
                        const headerHeight = document.querySelector('header').offsetHeight;
                        const targetPosition = targetElement.offsetTop - headerHeight;
                        
                        window.scrollTo({
                            top: targetPosition,
                            behavior: 'smooth'
                        });
                        
                        if (document.querySelector('.menu-toggle').classList.contains('active')) {
                            toggleMenu();
                        }
                    }
                });
            });
            
            // Mobile menu toggle
            const menuToggle = document.querySelector('.menu-toggle');
            const nav = document.querySelector('nav');
            
            function toggleMenu() {
                menuToggle.classList.toggle('active');
                nav.classList.toggle('active');
            }
            
            if (menuToggle) {
                menuToggle.addEventListener('click', toggleMenu);
            }
            
            // Close menu when clicking on a link
            document.querySelectorAll('nav ul li a').forEach(link => {
                link.addEventListener('click', () => {
                    if (window.innerWidth <= 768) {
                        toggleMenu();
                    }
                });
            });
            
            // Header scroll effect
            window.addEventListener('scroll', () => {
                if (window.scrollY > 100) {
                    document.getElementById('header').classList.add('scrolled');
                } else {
                    document.getElementById('header').classList.remove('scrolled');
                }
            });
            
            // Cookie banner
            const cookieBanner = document.getElementById('cookie-banner');
            const acceptCookiesBtn = document.getElementById('accept-cookies');
            
            if (!localStorage.getItem('cookies-accepted') && cookieBanner) {
                cookieBanner.style.display = 'flex';
                
                if (acceptCookiesBtn) {
                    acceptCookiesBtn.addEventListener('click', () => {
                        localStorage.setItem('cookies-accepted', 'true');
                        cookieBanner.style.display = 'none';
                    });
                }
            }

            // Section animation on scroll
            const sections = document.querySelectorAll('.section');
            
            function checkSections() {
                sections.forEach(section => {
                    const sectionTop = section.getBoundingClientRect().top;
                    const windowHeight = window.innerHeight;
                    
                    if (sectionTop < windowHeight * 0.75) {
                        section.classList.add('visible');
                    }
                });
            }
            
            // Initialize
            window.addEventListener('load', checkSections);
            window.addEventListener('scroll', checkSections);
        });
    </script>
</body>
</html>