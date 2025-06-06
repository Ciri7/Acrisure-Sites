<?php include('../../includes/auth.php'); ?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lavora con Noi - Acrisure Services</title>
    <meta name="description" content="Unisciti al team di Acrisure Services. Scopri le opportunità di carriera e invia la tua candidatura.">
    <link rel="canonical" href="https://www.acrisureservices.it/lavora-con-noi" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Stili base (gli stessi del file principale) */
        :root {
            --primary: #0056b3;
            --secondary: #003366;
            --accent: #4d8fd1;
            --light: #f8f9fa;
            --dark: #212529;
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
            background: linear-gradient(rgba(255, 255, 255, 0.7), rgba(255, 255, 255, 0.7)), url('../img/body.avif');
            background-size: cover;
            background-position: center;
            background-attachment: fixed; 
        }
        
        /* Header (stili identici al file principale) */
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
        
        .logo:hover {
            transform: scale(1.05);
        }

        .logo-footer {
            height: 50px;
            transition: transform 0.3s;
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
        
        /* Barra verticale tra le voci di menu */
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
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/img/relife-lavora-con-noi.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            height: 100vh;
            min-height: 700px;
            display: flex;
            align-items: center;
            padding-top: 80px;
            color: white;
        }
        
        .hero-content {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 5%;
            width: 100%;
        }
        
        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            line-height: 1.2;
            animation: fadeInUp 1s ease;
        }
        
        .hero p {
            font-size: 1.3rem;
            max-width: 600px;
            margin-bottom: 2.5rem;
            opacity: 0.9;
            animation: fadeInUp 1s ease 0.3s forwards;
            opacity: 0;
        }
        
        .btn {
            display: inline-block;
            background-color: var(--accent);
            color: white;
            padding: 0.8rem 1.5rem;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s;
            animation: fadeInUp 1s ease 0.6s forwards;
            opacity: 0;
            border: 2px solid var(--accent);
            text-align: center;
        }
        
        .btn:hover {
            background-color: transparent;
            color: var(--accent);
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .btn-secondary {
            background-color: transparent;
            color: white;
            border-color: white;
        }

        .btn-secondary:hover {
            background-color: white;
            color: var(--primary);
            border-color: white;
        }
        
        /* Section Styling */
        .section {
            padding: 6rem 5%;
            max-width: 1400px;
            margin: 0 auto;
            opacity: 0;
            transform: translateY(30px);
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
        
        .section-subtitle {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 3rem;
            font-size: 1.2rem;
            color: #555;
        }

        /* Careers Section */
        .careers-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }
        
        .career-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 1px solid #eee;
        }
        
        .career-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
            border-color: var(--accent);
        }
        
        .career-header {
            padding: 2rem;
            background-color: var(--light);
            border-bottom: 1px solid #eee;
        }
        
        .career-title {
            color: var(--secondary);
            margin-bottom: 0.5rem;
            font-size: 1.5rem;
        }
        
        .career-location {
            color: var(--accent);
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .career-body {
            padding: 2rem;
        }
        
        .career-features {
            margin-bottom: 2rem;
        }
        
        .career-features li {
            margin-bottom: 0.8rem;
            position: relative;
            padding-left: 1.8rem;
            color: #555;
            list-style-type: none;
        }
        
        .career-features li::before {
            content: '\f054';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            color: var(--accent);
            font-size: 0.8rem;
        }
        
        .career-link {
            display: inline-flex;
            align-items: center;
            color: var(--accent);
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .career-link i {
            margin-left: 0.5rem;
            transition: transform 0.3s;
        }
        
        .career-link:hover {
            color: var(--primary);
        }
        
        .career-link:hover i {
            transform: translateX(5px);
        }

        /* Benefits Section */
        .benefits-section {
            background-color: transparent;
        }
        
        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(200px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }
        
        .benefit-card {
            background-color: white;
            border-radius: 10px;
            padding: 2rem;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s;
        }
        
        .benefit-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        .benefit-icon {
            font-size: 2.5rem;
            color: var(--accent);
            margin-bottom: 1.5rem;
        }
        
        .benefit-title {
            color: var(--secondary);
            margin-bottom: 1rem;
            font-size: 1.3rem;
        }
        
        .benefit-description {
            color: #666;
            line-height: 1.6;
        }

        /* Application Form */
        .application-form {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            padding: 3rem;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }
        
        .form-header {
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .form-header h3 {
            color: var(--secondary);
            margin-bottom: 0.5rem;
            font-size: 1.5rem;
        }
        
        .form-header p {
            color: #666;
            font-size: 1.1rem;
        }
        
        .form-row {
            display: flex;
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }
        
        .form-group {
            flex: 1;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: var(--secondary);
            font-size: 1rem;
        }
        
        .form-group label .required {
            color: var(--error);
        }
        
        .form-control {
            width: 100%;
            padding: 1rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-family: inherit;
            font-size: 1rem;
            transition: all 0.3s;
            background-color: #f9f9f9;
        }
        
        .form-control.error {
            border-color: var(--error);
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--accent);
            box-shadow: 0 0 0 3px rgba(77, 143, 209, 0.2);
            background-color: white;
        }
        
        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }
        
        .file-upload {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }
        
        .file-upload-label {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--secondary);
            font-weight: 600;
            cursor: pointer;
        }
        
        .file-upload-label i {
            color: var(--accent);
        }
        
        .file-name {
            font-size: 0.9rem;
            color: #666;
            margin-top: 0.5rem;
            display: none;
        }
        
        .form-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 2rem;
            flex-wrap: wrap;
        }
        
        .form-note {
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 1rem;
        }
        
        .form-note a {
            color: var(--accent);
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .form-note a:hover {
            color: var(--primary);
            text-decoration: underline;
        }
        
        .form-message {
            padding: 1rem;
            border-radius: 4px;
            margin-bottom: 1.5rem;
            display: none;
            font-size: 1rem;
        }
        
        .form-message.error {
            background-color: rgba(220, 53, 69, 0.1);
            border: 1px solid var(--error);
            color: var(--error);
            display: block;
        }
        
        .form-message.success {
            background-color: rgba(40, 167, 69, 0.1);
            border: 1px solid #28a745;
            color: #28a745;
            display: block;
        }

        /* Footer (stili identici al file principale) */
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
        }
        
        .footer-links a:hover {
            color: var(--accent);
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
        
        .footer-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            padding-top: 3rem;
            margin-top: 3rem;
            border-top: 1px solid rgba(0, 0, 0, 0.1);
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
            .hero h1 {
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
            
            .section {
                padding: 4rem 5%;
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
            
            .hero {
                height: 90vh;
                min-height: 600px;
            }
            
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .hero p {
                font-size: 1.1rem;
            }
            
            .btn {
                display: block;
                width: 100%;
                margin-bottom: 1rem;
                padding: 1rem;
                min-height: 45px;
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
            
            .form-row {
                flex-direction: column;
                gap: 0;
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

            .footer-links li {
                margin-bottom: 1rem;
            }

            .legal-links {
                justify-content: center;
            }

            .careers-container {
                grid-template-columns: 1fr;
            }
        }
        
        @media (max-width: 480px) {
            .hero h1 {
                font-size: 2rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .section {
                padding: 4rem 5%;
            }
            
            .application-form {
                padding: 2rem;
            }
            
            .form-footer {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .form-footer button {
                width: 100%;
                margin-top: 1rem;
            }
        }
    </style>
</head>
<body>
    <header id="header">
        <div class="navbar">
            <div class="navbar-brand">
                <a href="/services.html">
                    <img src="/img/Acrisure Services 2.jpg" class="logo" alt="Acrisure Services">
                </a>
                <div class="menu-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <nav>
                <ul>
                    <li><a href="/services.html#news" class="nav-link">News</a></li>
                    <li><a href="/services.html#gruppo" class="nav-link">Leadership</a></li>
                    <li><a href="/services.html#services" class="nav-link">Servizi</a></li>
                    <li><a href="/index.html#gruppo" class="nav-link">Il Nostro Gruppo</a></li>
                    <li><a href="lcn-services.html" class="nav-link">Lavora con noi</a></li>
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

    <section class="hero">
        <div class="hero-content">
            <h1>Lavora con Noi</h1>
            <p>Unisciti al team di Acrisure Services e fai parte di una realtà dinamica e in continua crescita nel settore assicurativo.</p>
            <a href="#open-positions" class="btn btn-secondary">Scopri le posizioni aperte</a>
        </div>
    </section>

    <section id="open-positions" class="section">
        <h2 class="section-title">Posizioni Aperte</h2>
        <p class="section-subtitle">Scegli tra le nostre opportunità di carriera e candidati per unirti al nostro team</p>
        
        <div class="careers-container">
            <div class="career-card">
                <div class="career-header">
                    <h3 class="career-title">Customer Service Specialist</h3>
                    <div class="career-location">
                        <i class="fas fa-map-marker-alt"></i> Milano
                    </div>
                </div>
                <div class="career-body">
                    <ul class="career-features">
                        <li>Gestione delle richieste dei clienti via telefono e email</li>
                        <li>Supporto nella risoluzione di problemi e reclami</li>
                        <li>Collaborazione con i vari dipartimenti aziendali</li>
                        <li>Mantenimento di elevati standard di servizio</li>
                    </ul>
                    <a href="#application-form" class="career-link">Candidati ora <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <div class="career-card">
                <div class="career-header">
                    <h3 class="career-title">Esperto in Gestione Sinistri</h3>
                    <div class="career-location">
                        <i class="fas fa-map-marker-alt"></i> Roma
                    </div>
                </div>
                <div class="career-body">
                    <ul class="career-features">
                        <li>Gestione end-to-end delle pratiche sinistri</li>
                        <li>Analisi documentale e valutazione dei danni</li>
                        <li>Comunicazione con clienti e fornitori</li>
                        <li>Rispetto delle procedure e dei tempi stabiliti</li>
                    </ul>
                    <a href="#application-form" class="career-link">Candidati ora <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <div class="career-card">
                <div class="career-header">
                    <h3 class="career-title">HR Specialist</h3>
                    <div class="career-location">
                        <i class="fas fa-map-marker-alt"></i> Sassari
                    </div>
                </div>
                <div class="career-body">
                    <ul class="career-features">
                        <li>Gestione del personale e delle relazioni sindacali</li>
                        <li>Supporto al reclutamento e selezione</li>
                        <li>Amministrazione del personale</li>
                        <li>Gestione dei processi di formazione</li>
                    </ul>
                    <a href="#application-form" class="career-link">Candidati ora <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <div class="career-card">
                <div class="career-header">
                    <h3 class="career-title">Fleet Manager</h3>
                    <div class="career-location">
                        <i class="fas fa-map-marker-alt"></i> Torino
                    </div>
                </div>
                <div class="career-body">
                    <ul class="career-features">
                        <li>Gestione operativa delle flotte aziendali</li>
                        <li>Coordinamento con fornitori e officine</li>
                        <li>Monitoraggio costi e ottimizzazione risorse</li>
                        <li>Analisi dei dati e reporting</li>
                    </ul>
                    <a href="#application-form" class="career-link">Candidati ora <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <div class="career-card">
                <div class="career-header">
                    <h3 class="career-title">Compliance Officer</h3>
                    <div class="career-location">
                        <i class="fas fa-map-marker-alt"></i> Milano
                    </div>
                </div>
                <div class="career-body">
                    <ul class="career-features">
                        <li>Monitoraggio della conformità normativa</li>
                        <li>Analisi dei rischi e implementazione controlli</li>
                        <li>Formazione del personale</li>
                        <li>Rapporti con le autorità di vigilanza</li>
                    </ul>
                    <a href="#application-form" class="career-link">Candidati ora <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <div class="career-card">
                <div class="career-header">
                    <h3 class="career-title">Sviluppatore Software</h3>
                    <div class="career-location">
                        <i class="fas fa-map-marker-alt"></i> Remoto
                    </div>
                </div>
                <div class="career-body">
                    <ul class="career-features">
                        <li>Sviluppo e manutenzione di applicazioni interne</li>
                        <li>Collaborazione con il team IT</li>
                        <li>Analisi e risoluzione di problemi</li>
                        <li>Implementazione di nuove funzionalità</li>
                    </ul>
                    <a href="#application-form" class="career-link">Candidati ora <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="section benefits-section">
        <h2 class="section-title">I Nostri Benefit</h2>
        <p class="section-subtitle">Ecco cosa offriamo ai nostri collaboratori</p>
        
        <div class="benefits-grid">
            <div class="benefit-card">
                <div class="benefit-icon">
                    <i class="fas fa-hand-holding-usd"></i>
                </div>
                <h3 class="benefit-title">Pacchetto Retributivo</h3>
                <p class="benefit-description">Retribuzione competitiva con bonus di risultato e premi di produzione</p>
            </div>
            
            <div class="benefit-card">
                <div class="benefit-icon">
                    <i class="fas fa-heartbeat"></i>
                </div>
                <h3 class="benefit-title">Welfare Aziendale</h3>
                <p class="benefit-description">Pacchetto benefit personalizzabile (assicurazioni, buoni pasto, ecc.)</p>
            </div>
            
            <div class="benefit-card">
                <div class="benefit-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h3 class="benefit-title">Formazione Continua</h3>
                <p class="benefit-description">Percorsi di crescita professionale e corsi di aggiornamento</p>
            </div>
            
            <div class="benefit-card">
                <div class="benefit-icon">
                    <i class="fas fa-balance-scale"></i>
                </div>
                <h3 class="benefit-title">Work-Life Balance</h3>
                <p class="benefit-description">Flessibilità oraria e smart working quando possibile</p>
            </div>
            
            <div class="benefit-card">
                <div class="benefit-icon">
                    <i class="fas fa-utensils"></i>
                </div>
                <h3 class="benefit-title">Area Ristoro</h3>
                <p class="benefit-description">Spazi dedicati alla pausa pranzo con distributori e microonde</p>
            </div>
            
            <div class="benefit-card">
                <div class="benefit-icon">
                    <i class="fas fa-baby-carriage"></i>
                </div>
                <h3 class="benefit-title">Sostegno alla Famiglia</h3>
                <p class="benefit-description">Agevolazioni per asili nido e congedi parentali</p>
            </div>
        </div>
    </section>

    <section id="application-form" class="section">
        <div class="application-form">
            <div class="form-header">
                <h3>Invia la tua candidatura</h3>
                <p>Compila il form sottostante per candidarti a una delle nostre posizioni aperte</p>
            </div>
            
            <div id="formMessage" class="form-message"></div>
            
            <form id="careerForm">
                <div class="form-row">
                    <div class="form-group">
                        <label for="fullName">Nome e Cognome <span class="required">*</span></label>
                        <input type="text" id="fullName" name="fullName" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email <span class="required">*</span></label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="phone">Telefono <span class="required">*</span></label>
                        <input type="tel" id="phone" name="phone" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="position">Posizione di interesse <span class="required">*</span></label>
                        <select id="position" name="position" class="form-control" required>
                            <option value="">-- Seleziona --</option>
                            <option value="Customer Service Specialist">Customer Service Specialist</option>
                            <option value="Esperto in Gestione Sinistri">Esperto in Gestione Sinistri</option>
                            <option value="HR Specialist">HR Specialist</option>
                            <option value="Fleet Manager">Fleet Manager</option>
                            <option value="Compliance Officer">Compliance Officer</option>
                            <option value="Sviluppatore Software">Sviluppatore Software</option>
                            <option value="Altro">Altro</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="message">Messaggio <span class="required">*</span></label>
                    <textarea id="message" name="message" rows="5" class="form-control" required></textarea>
                </div><br>
                
                <div class="form-group">
                    <label for="cv">Carica il tuo CV (PDF, max 5MB) <span class="required">*</span></label>
                    <div class="file-upload">
                        <label for="cv" class="file-upload-label">
                            <i class="fas fa-file-upload"></i> Scegli file
                        </label>
                        <input type="file" id="cv" name="cv" accept=".pdf,.doc,.docx" required style="display: none;">
                        <span id="fileName" class="file-name"></span>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="additionalFiles">Altri allegati (opzionali)</label>
                    <div class="file-upload">
                        <label for="additionalFiles" class="file-upload-label">
                            <i class="fas fa-file-upload"></i> Scegli file
                        </label>
                        <input type="file" id="additionalFiles" name="additionalFiles" multiple style="display: none;">
                        <span id="additionalFilesName" class="file-name"></span>
                    </div>
                </div>
                
                <div class="form-footer">
                    <div class="form-note">
                        <p><span class="required">*</span> Campi obbligatori</p>
                        <p>Leggi la nostra <a href="../policy/policyServices.html">Privacy Policy</a></p>
                    </div>
                    <button type="submit" class="btn">Invia Candidatura</button>
                </div>
            </form>
        </div>
    </section>

    <footer>
        <div class="footer-content">
            <div class="footer-column">
                <h3><i class="fas fa-building"></i> Sede Legale</h3>
                <ul class="footer-links">
                    <li><i class="fas fa-file-contract"></i> Acrisure S.r.l. - REA MI-2616058</li>
                    <li><i class="fas fa-id-card"></i> P.IVA: 13147890969</li>
                    <li><i class="fas fa-map-marker-alt"></i> Via Giuseppe Mazzini, 3 - 07100 Sassari</li><br>
                    <li><img src="/img/Acrisure Services 2.jpg" class="logo-footer" alt=""></li>
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
                    <a href="/policy/policyServices.html">Privacy Policy</a>
                    <a href="/cookies/cookiesServices.html">Cookie Policy</a>
                    <a href="/legal&comp/legalServices.html">Legal & Compliance</a>
                </div>
            </div>
            <div class="footer-badge">
                <img src="/img/ivass-badge.png" alt="Autorizzato IVASS" width="80">
            </div>
        </div>
    </footer>

    <!-- Cookie banner -->
    <div id="cookie-banner" class="cookie-banner">
        <p>Utilizziamo cookie per migliorare la tua esperienza. <a href="../privacy">Maggiori informazioni</a></p>
        <button id="accept-cookies" class="btn">Accetta</button>
    </div>

    <script>
        // Smooth scrolling per i link di navigazione
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
        
        // Animazione delle sezioni al scroll
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
        
        // Gestione menu mobile
        const menuToggle = document.querySelector('.menu-toggle');
        const nav = document.querySelector('nav');
        
        function toggleMenu() {
            menuToggle.classList.toggle('active');
            nav.classList.toggle('active');
        }
        
        menuToggle.addEventListener('click', toggleMenu);
        
        // Chiudi il menu quando si clicca su un link
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
        
        // Gestione file upload
        document.getElementById('cv').addEventListener('change', function(e) {
            const fileName = document.getElementById('fileName');
            if (this.files.length > 0) {
                fileName.textContent = this.files[0].name;
                fileName.style.display = 'block';
            } else {
                fileName.style.display = 'none';
            }
        });
        
        document.getElementById('additionalFiles').addEventListener('change', function(e) {
            const fileName = document.getElementById('additionalFilesName');
            if (this.files.length > 0) {
                fileName.textContent = `${this.files.length} file selezionati`;
                fileName.style.display = 'block';
            } else {
                fileName.style.display = 'none';
            }
        });
        
        // Gestione form di candidatura
        const careerForm = document.getElementById('careerForm');
        const formMessage = document.getElementById('formMessage');
        
        if (careerForm) {
            careerForm.addEventListener('submit', async function(e) {
                e.preventDefault();
                
                let isValid = true;
                const requiredFields = this.querySelectorAll('[required]');
                
                // Validazione campi obbligatori
                requiredFields.forEach(field => {
                    if (field.value.trim() === '') {
                        field.classList.add('error');
                        isValid = false;
                    }
                });
                
                // Validazione email
                const email = this.querySelector('input[type="email"]');
                if (email && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)) {
                    email.classList.add('error');
                    isValid = false;
                }
                
                // Validazione telefono
                const phone = this.querySelector('input[type="tel"]');
                if (phone && !/^[+\d\s\-]{10,15}$/.test(phone.value)) {
                    phone.classList.add('error');
                    isValid = false;
                }
                
                // Validazione file
                const cv = this.querySelector('input[type="file"]');
                if (cv && cv.files.length === 0) {
                    cv.classList.add('error');
                    isValid = false;
                }
                
                if (!isValid) {
                    formMessage.textContent = 'Per favore controlla i campi evidenziati';
                    formMessage.classList.remove('success');
                    formMessage.classList.add('error');
                    formMessage.style.display = 'block';
                    return;
                }
                
                // Simulazione invio
                try {
                    // Qui andrebbe una chiamata fetch() al tuo backend
                    await new Promise(resolve => setTimeout(resolve, 1000));
                    
                    formMessage.textContent = 'Grazie per la tua candidatura! Ti contatteremo al più presto.';
                    formMessage.classList.remove('error');
                    formMessage.classList.add('success');
                    formMessage.style.display = 'block';
                    
                    careerForm.reset();
                    document.getElementById('fileName').style.display = 'none';
                    document.getElementById('additionalFilesName').style.display = 'none';
                    
                    setTimeout(() => {
                        formMessage.style.display = 'none';
                    }, 5000);
                } catch (error) {
                    formMessage.textContent = 'Si è verificato un errore. Riprova più tardi.';
                    formMessage.classList.remove('success');
                    formMessage.classList.add('error');
                    formMessage.style.display = 'block';
                }
            });
        }
        
        // Gestione cookie banner
        const cookieBanner = document.getElementById('cookie-banner');
        const acceptCookiesBtn = document.getElementById('accept-cookies');
        
        if (!localStorage.getItem('cookies-accepted')) {
            cookieBanner.style.display = 'flex';
            
            acceptCookiesBtn.addEventListener('click', () => {
                localStorage.setItem('cookies-accepted', 'true');
                cookieBanner.style.display = 'none';
            });
        }
        
        // Inizializzazione
        window.addEventListener('load', () => {
            checkSections();
        });
        window.addEventListener('scroll', checkSections);
    </script>
</body>
</html>