<?php include('../../includes/auth.php'); ?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certifications - Acrisure Italia</title>
    <meta name="description" content="Informativa sulla privacy di Acrisure Italia. Scopri come gestiamo e proteggiamo i tuoi dati personali.">
    <meta name="keywords" content="privacy policy, protezione dati, GDPR, trattamento dati, Acrisure Italia">
    <link rel="canonical" href="https://www.acrisureitalia.com/privacy" />
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
        }

        /* Page transition overlay */
        .page-transition {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: white;
            z-index: 9999;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.4s ease;
        }

        .page-transition.active {
            opacity: 1;
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
        .certifications-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/img/Franco7.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            height: 50vh;
            min-height: 400px;
            display: flex;
            align-items: center;
            padding-top: 80px;
            color: white;
            margin-bottom: 4rem;
        }
        
        .hero-content {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 5%;
            width: 100%;
        }
        
        .certifications-hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            line-height: 1.2;
            animation: fadeIn 0.8s ease;
        }
        
        .certifications-hero p {
            font-size: 1.3rem;
            max-width: 600px;
            margin-bottom: 2.5rem;
            opacity: 0.9;
            animation: fadeIn 0.8s ease 0.3s forwards;
            opacity: 0;
        }
        
        /* Section Styling */
        .section {
            padding: 6rem 5%;
            max-width: 1400px;
            margin: 0 auto;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }
        
        .section.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 4rem;
            color: var(--secondary);
            position: relative;
            font-size: 2.5rem;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background-color: var(--accent);
            border-radius: 2px;
        }
        
        /* Certifications Content */
        .certifications-content {
            max-width: 1000px;
            margin: 0 auto;
        }
        
        /* Accordion Styling */
        .certification-accordion {
            margin-bottom: 2rem;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            background-color: white;
        }
        
        .certification-accordion:hover {
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
            transform: translateY(-5px);
        }
        
        .accordion-header {
            padding: 1.5rem 2rem;
            background-color: var(--secondary);
            color: white;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: background-color 0.3s;
        }
        
        .accordion-header:hover {
            background-color: #00264d;
        }
        
        .accordion-header h3 {
            margin: 0;
            font-size: 1.4rem;
            font-weight: 600;
        }
        
        .accordion-icon {
            transition: transform 0.3s ease;
            font-size: 1.2rem;
        }
        
        .accordion-header.active .accordion-icon {
            transform: rotate(180deg);
        }
        
        .accordion-content {
            padding: 0;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease, padding 0.3s ease;
            background-color: white;
        }
        
        .accordion-content.active {
            padding: 2rem;
            max-height: 1000px;
        }
        
        .accordion-content p {
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
            line-height: 1.7;
            color: #555;
        }
        
        .accordion-content ul {
            padding-left: 2rem;
            margin-bottom: 1.5rem;
        }
        
        .accordion-content li {
            margin-bottom: 0.8rem;
            font-size: 1.1rem;
            line-height: 1.7;
            color: #555;
        }
        
        .accordion-content strong {
            color: var(--secondary);
            font-weight: 600;
        }
        
        .accordion-content a {
            color: var(--accent);
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .accordion-content a:hover {
            color: var(--primary);
            text-decoration: underline;
        }
        
        .certification-badge {
            display: inline-flex;
            align-items: center;
            background-color: var(--light);
            padding: 0.5rem 1rem;
            border-radius: 4px;
            margin-top: 1rem;
            font-weight: 600;
            color: var(--secondary);
        }
        
        .certification-badge i {
            margin-right: 0.5rem;
            color: var(--accent);
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
        
        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
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
            .certifications-hero h1 {
                font-size: 3rem;
            }
            
            .section-title {
                font-size: 2.2rem;
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
            
            .certifications-hero {
                height: 40vh;
                min-height: 300px;
            }
            
            .certifications-hero h1 {
                font-size: 2.5rem;
            }
            
            .certifications-hero p {
                font-size: 1.1rem;
            }
            
            .accordion-header {
                padding: 1.2rem 1.5rem;
            }
            
            .accordion-header h3 {
                font-size: 1.2rem;
            }
            
            .accordion-content.active {
                padding: 1.5rem;
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
            
            .cookie-banner {
                flex-direction: column;
                text-align: center;
                padding: 1rem;
            }
            
            .cookie-banner button {
                margin: 1rem 0 0;
                width: 100%;
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
        
        @media (max-width: 480px) {
            .certifications-hero h1 {
                font-size: 2rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .section {
                padding: 4rem 5%;
            }
            
            .accordion-header {
                padding: 1rem;
            }
            
            .accordion-header h3 {
                font-size: 1.1rem;
            }
            
            .accordion-content.active {
                padding: 1rem;
            }
            
            .accordion-content p, 
            .accordion-content ul {
                font-size: 1rem;
            }

            /* Mobile language switcher */
            .language-switcher {
                margin-left: 0;
                justify-content: center;
                padding: 1rem 0;
            }
        }
        
        /* NUOVI FOOTER --------------------------- */
        .social-links a {
            color: var(--secondary);
            font-size: 1.5rem; /* Aumentato da 1.2rem */
            transition: all 0.3s;
            width: 40px; /* Aggiunto per dimensioni fisse */
            height: 40px; /* Aggiunto per dimensioni fisse */
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(0, 0, 0, 0.05);
            border-radius: 50%;
        }

        .social-links a:hover {
            color: white;
            background-color: var(--accent);
            transform: translateY(-3px) scale(1.1);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .footer-column .legal-links {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            margin-top: 1rem;
        }

        .footer-column .legal-links a {
            display: block;
            padding: 0.5rem 0;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            text-decoration: none;
            transition: all 0.3s;
        }

        .footer-column .legal-links a:hover {
            color: var(--accent);
            padding-left: 0.5rem;
            border-bottom-color: var(--accent);
        }

        .footer-legal-notice {
            text-align: center;
            padding: 1.5rem 5%;
            border-top: 1px solid rgba(0, 0, 0, 0.1);
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            margin: 0 auto;
            max-width: 1400px;
        }

        .footer-legal-notice p {
            font-size: 0.85rem;
            color: #555;
            line-height: 1.5;
            margin: 0;
        }

        /* RECLAMI LINK---------- */
        .footer-title-link {
        color: var(--secondary);
        text-decoration: none;
        transition: all 0.3s;
        display: inline-block;
        }

        .footer-title-link:hover {
            color: var(--accent);
        }

        /* Allineamento giustificato del contenuto */
        .certifications-content {
            text-align: justify;
            text-justify: inter-word;
            hyphens: auto;
        }

        .accordion-content p, 
        .accordion-content ul {
            text-align: justify;
            text-justify: inter-word;
            hyphens: auto;
        }

        .accordion-header h3 {
            text-align: left; /* Mantieni i titoli allineati a sinistra */
        }

        /* Per migliorare la leggibilità del testo giustificato */
        .certifications-content {
            word-spacing: -0.05em;
        }

        .accordion-content p {
            margin-bottom: 1.5rem;
            word-spacing: -0.05em;
        }

        .accordion-content ul {
            word-spacing: -0.05em;
        }

        /* Mantieni l'allineamento a sinistra per i link nelle liste */
        .accordion-content ul li {
            text-align: left;
        }

        .accordion-content ul li a {
            text-align: left;
            display: inline-block;
        }

        /* Allineamento per i badge delle certificazioni */
        .certification-badge {
            text-align: center; /* Centra i badge */
            justify-content: center;
        }

        /* Allineamento per i link di download */
        .accordion-content a {
            text-align: left;
            display: inline-block;
        }
    </style>
</head>
<body>
    <!-- Page transition overlay -->
    <div class="page-transition"></div>

    <header id="header">
        <div class="navbar">
            <div class="navbar-brand">
                <a href="/eng/italia-eng.php">
                    <img src="/img/Acrisure Italia.jpg" alt="Acrisure Services Logo" class="logo">
                </a>
                <div class="menu-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <nav>
                <ul>
                    <li><a href="/eng/italia-eng.php#news" class="nav-link">News</a></li>
                    <li><a href="/eng/italia-eng.php#gruppo" class="nav-link">Leadership</a></li>
                    <li><a href="/eng/italia-eng.php#services" class="nav-link">Services</a></li>
                    <li><a href="/eng/index-eng.php#gruppo" class="nav-link">Our Group</a></li>
                    <li><a href="/eng/lavora-con-noi-eng/lcn-acrisure-eng.php" class="nav-link">Work With Us</a></li>
                </ul>
            </nav>
            <nav class="language-switcher">
                <ul>
                    <li><a href="/Certificazioni/certificazioniItalia.php" class="language-btn">IT</a></li>
                    <li><a onclick="window.location.href='#'" class="language-btn active">EN</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="certifications-hero">
        <div class="hero-content">
            <h1>Certifications</h1>
            <p>The certifications that attest to our commitment to excellence and regulatory compliance</p>
        </div>
    </section>

    <section class="section">
        <div class="certifications-content">
            <h2 class="section-title">Our Certifications</h2>
            
            <!-- Quality Certification -->
            <div class="certification-accordion">
                <div class="accordion-header">
                    <h3>UNI EN ISO 9001:2015</h3>
                    <span class="accordion-icon"><i class="fas fa-chevron-down"></i></span>
                </div>
                <div class="accordion-content">
                    <p>As an insurance broker, Acrisure Italia S.p.A. considers quality to be the cornerstone of its commitment to customers and stakeholders. Through the Quality Management System, we constantly invest in the growth of our people and the strength of our relationships with clients, to offer insurance solutions characterized by transparency, professionalism, and consulting excellence.</p>
                    
                    <p>We have adopted a Quality Policy in accordance with the ISO 9001:2015 Standard, aware that it represents a strategic lever to achieve corporate objectives, ensure compliance with applicable requirements, and create sustainable value over time.</p>
                    
                    <p>With this Policy, we are committed to:</p>
                    <ul>
                        <li>deeply understanding customer needs, providing timely and personalized responses;</li>
                        <li>strengthening trust through an ethical, responsible, and regulatory-compliant consulting approach;</li>
                        <li>promoting continuous improvement of skills, internal processes, and corporate performance.</li>
                    </ul>
                    
                    <p>For us, quality means providing certainty and building trust, accompanying our clients in their most important choices. The Policy is disseminated, understood, and periodically reviewed to ensure its relevance and effectiveness.</p>
                    
                    <div class="certification-badge">
                        <i class="fas fa-certificate"></i>
                        <span>ISO 9001:2015</span>
                    </div>
                    
                    <p><a href="/DOCUMENTI/QUALITÀ/Politica della Qualità Acrisure Italia.pdf" target="_blank">Download the complete Quality Policy document</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER ------------------------------------------------------------------------------------------------------------------ -->
    <footer>
        <div class="footer-content">
            <div class="footer-column">
                <h3><i class="fas fa-building"></i>Registered Office</h3>
                <ul class="footer-links">
                    <li><i class="fas fa-file-contract"></i>Acrisure Italia S.p.A.</li>
                    <!-- <li><i class="fas fa-id-card"></i> VAT: 13147890969</li> -->
                    <li><i class="fas fa-map-marker-alt"></i>Via Giuseppe Mazzini, 3 - 07100 Sassari</li><br>
                    <li><img src="/img/Acrisure Italia.jpg" class="logo-footer" alt="Acrisure Italia"></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3><i class="fas fa-map-marked-alt"></i>Italian Offices</h3>
                <ul class="footer-links">
                    <li><i class="fas fa-city"></i> <strong>Sassari (SS)</strong><br>Via Giuseppe Mazzini, 3 - 07100</li>
                    <li><i class="fas fa-city"></i> <strong>Milan (MI)</strong><br>Via Santa Maria Segreta, 6 - 20123</li>
                    <li><i class="fas fa-city"></i> <strong>Rome (RM)</strong><br>Via Lovanio, 6 - 00198</li>
                    <!-- <li><i class="fas fa-city"></i> <strong>Turin (TO)</strong><br>Via San Francesco Da Paola, 15 - 10123</li> -->
                    <!-- <li><i class="fas fa-city"></i> <strong>Genoa (GE)</strong><br>Piazza della Vittoria, 9 - 16121</li> -->
                    <!-- <li><i class="fas fa-city"></i> <strong>Cles (TN)</strong><br>Piazza Granda, 44 - 38023</li> -->
                </ul>
            </div>
            
            <div class="footer-column">
                <h3><i class="fas fa-headset"></i> Contacts</h3>
                <ul class="footer-links">
                    <li><i class="fas fa-phone-alt"></i> Administration: 079 2016047</li>
                    <li><i class="fas fa-phone-volume"></i> Customer Care: 079 2853063</li>
                    <li><i class="fas fa-envelope"></i> <a href="mailto:info@acrisure.it">info@acrisure.it</a></li>
                    <li><i class="fas fa-envelope"></i> <a href="mailto:acrisurespa@pec.acrisureitalia.com">acrisurespa@pec.acrisureitalia.com</a></li>
                </ul>

                <div class="social-links">
                    <a href="https://it.linkedin.com/company/acrisureitalia" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                    <a href="https://www.instagram.com/acrisureitalia/" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                </div>

                <br>
                <div class="footer-column">
                    <h3><i class="fas fa-exclamation-circle"></i> <a href="/eng/reclami-eng/reclamiItalia-eng.php" class="footer-title-link">Complaints</a></h3>
                    <ul class="footer-links">
                        <li><i class="fas fa-envelope"></i> <a href="mailto:reclami@acrisureitalia.com">reclami@acrisureitalia.com</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-column">
                <h3><i class="fas fa-clock"></i>Office Hours</h3>
                <ul class="footer-links">
                    <li><i class="far fa-clock"></i> <strong>Mon-Fri</strong>: 9:00 AM - 6:00 PM</li>
                    <li><i class="fas fa-door-closed"></i> <strong>Sat-Sun</strong>: Closed</li>
                </ul>
                
                <div class="footer-badge">
                    <img src="/img/BV.jpg" class="logo-footer" alt="Bureau Veritas"> 
                    <a href="https://www.accredia.it/" target="_blank"><img src="/img/Marchio ACCREDIA.jpg" class="logo-footer" alt="ACCREDIA Mark"></a>
                    <a href="https://aiba.it/" target="_blank"><img src="/img/AIBA.png" class="logo-footer" alt="AIBA"></a>
                </div>

                <br>
                <div class="legal-links">
                    <a href="../legal-eng/legalItalia-eng.php">Legal & Compliance</a>
                    <a href="../Certificazioni-eng/certificazioniItalia-eng.php">Certifications</a>
                    <a href="../Sostenibilità-eng/sostenibilitàItalia-eng.php">Sustainability</a>
                    <a href="../policy-eng/policyItalia-eng.php">Privacy Policy</a>
                    <a href="../cookies-eng/cookiesItalia-eng.php">Cookie Policy</a>
                </div>
            </div>
        </div>
        
        <br>
        <!-- Add this new section above the footer-bottom -->
        <div class="footer-legal-notice">
            <p>Acrisure Italia S.p.A. - Sole shareholder company under the direction and coordination of Acrisure S.r.l. - Share Capital €200,000.00 fully paid.
                The identification and registration data provided above can be verified by consulting the Single Register of Intermediaries (RUI) on the IVASS website: <a href="https://https://ruipubblico.ivass.it/rui-pubblica/ng/#/home" target="_blank">www.ivass.it</a>.
                Registered in Section B of the RUI under no. 000673774, it is subject to IVASS supervision.
                Company participating in the Acrisure Group VAT number P.IVA 13147890969 - Tax Code and registration number in the Sassari Companies Register n. 02848210908. REA SS-222619
            </p>
        </div>
    </footer>

    <script>

        // Header scroll effect
        window.addEventListener('scroll', () => {
            if (window.scrollY > 100) {
                document.getElementById('header').classList.add('scrolled');
            } else {
                document.getElementById('header').classList.remove('scrolled');
            }
        });

        // Accordion functionality
        document.addEventListener('DOMContentLoaded', function() {
            const accordionHeaders = document.querySelectorAll('.accordion-header');
            
            accordionHeaders.forEach(header => {
                header.addEventListener('click', function() {
                    // Toggle active class on header
                    this.classList.toggle('active');
                    
                    // Toggle active class on content
                    const content = this.nextElementSibling;
                    content.classList.toggle('active');
                    
                    // Close other open accordions (optional)
                    accordionHeaders.forEach(otherHeader => {
                        if (otherHeader !== header && otherHeader.classList.contains('active')) {
                            otherHeader.classList.remove('active');
                            otherHeader.nextElementSibling.classList.remove('active');
                        }
                    });
                });
            });
            
            // Intersection Observer for section animations
            const sections = document.querySelectorAll('.section');
            
            const sectionObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, { threshold: 0.1 });
            
            sections.forEach(section => {
                sectionObserver.observe(section);
            });
            
            // Header scroll effect
            const header = document.getElementById('header');
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });
            
            // Mobile menu toggle
            const menuToggle = document.querySelector('.menu-toggle');
            const nav = document.querySelector('nav');
            
            menuToggle.addEventListener('click', function() {
                nav.classList.toggle('active');
                menuToggle.classList.toggle('active');
            });
            
            // Cookie banner
            const cookieBanner = document.getElementById('cookieBanner');
            const acceptCookies = document.getElementById('acceptCookies');
            
            // Check if user has already accepted cookies
            if (!localStorage.getItem('cookiesAccepted')) {
                setTimeout(() => {
                    cookieBanner.style.display = 'flex';
                }, 1000);
            }
            
            acceptCookies.addEventListener('click', function() {
                localStorage.setItem('cookiesAccepted', 'true');
                cookieBanner.style.display = 'none';
            });
            
            // Page transition
            const pageTransition = document.querySelector('.page-transition');
            const links = document.querySelectorAll('a:not(.language-btn)');
            
            // Hide transition on page load
            window.addEventListener('load', function() {
                setTimeout(() => {
                    pageTransition.classList.remove('active');
                }, 500);
            });
            
            // Show transition on link click
            links.forEach(link => {
                link.addEventListener('click', function(e) {
                    // Only apply to internal links
                    if (this.href && this.href.indexOf(window.location.hostname) !== -1) {
                        e.preventDefault();
                        pageTransition.classList.add('active');
                        
                        setTimeout(() => {
                            window.location.href = this.href;
                        }, 400);
                    }
                });
            });
        });
    </script>
</body>
</html>