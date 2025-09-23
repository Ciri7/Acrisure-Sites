<?php include('../../includes/auth.php'); ?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acrisure Agriservices - Privacy Policy</title>
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
        .privacy-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/img/agriservices2.jpg');
            background-size: cover;
            background-position: bottom;
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
        
        .privacy-hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            line-height: 1.2;
            animation: fadeIn 0.8s ease;
        }
        
        .privacy-hero p {
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
        
        /* Privacy Content */
        .privacy-content {
            max-width: 1000px;
            margin: 0 auto;
            background-color: white;
            padding: 3rem;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }
        
        .privacy-section {
            margin-bottom: 3rem;
        }
        
        .privacy-section h2 {
            color: var(--secondary);
            margin-bottom: 1.5rem;
            font-size: 1.8rem;
            position: relative;
            padding-bottom: 0.8rem;
        }
        
        .privacy-section h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 2px;
            background-color: var(--accent);
        }
        
        .privacy-section h3 {
            color: var(--secondary);
            margin: 2rem 0 1rem;
            font-size: 1.4rem;
        }
        
        .privacy-section p, 
        .privacy-section ul {
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
            line-height: 1.7;
            color: #555;
        }
        
        .privacy-section ul {
            padding-left: 2rem;
        }
        
        .privacy-section li {
            margin-bottom: 0.8rem;
        }
        
        .privacy-section strong {
            color: var(--secondary);
            font-weight: 600;
        }
        
        .privacy-section a {
            color: var(--accent);
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .privacy-section a:hover {
            color: var(--primary);
            text-decoration: underline;
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
            .privacy-hero h1 {
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
            
            .privacy-hero {
                height: 40vh;
                min-height: 300px;
            }
            
            .privacy-hero h1 {
                font-size: 2.5rem;
            }
            
            .privacy-hero p {
                font-size: 1.1rem;
            }
            
            .privacy-content {
                padding: 2rem;
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
            .privacy-hero h1 {
                font-size: 2rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .section {
                padding: 4rem 5%;
            }
            
            .privacy-content {
                padding: 1.5rem;
            }
            
            .privacy-section h2 {
                font-size: 1.5rem;
            }
            
            .privacy-section h3 {
                font-size: 1.2rem;
            }
            
            .privacy-section p, 
            .privacy-section ul {
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

        /* Tabella Privacy */
        .privacy-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        
        .privacy-table th, .privacy-table td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        
        .privacy-table th {
            background-color: #f5f5f5;
            font-weight: 600;
            color: var(--secondary);
        }
        
        .privacy-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        
        .privacy-table tr:hover {
            background-color: #f1f1f1;
        }
        
        @media (max-width: 768px) {
            .privacy-table {
                display: block;
                overflow-x: auto;
            }
        }
    </style>
</head>
<body>
    <!-- Page transition overlay -->
    <div class="page-transition"></div>

    <header id="header">
        <div class="navbar">
            <div class="navbar-brand">
                <a href="/eng/agriservices-eng.php">
                    <img src="/img/ACRISURE AGRISERVICES.jpg" alt="Acrisure Services Logo" class="logo">
                </a>
                <div class="menu-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <nav>
                <ul>
                    <li><a href="/eng/agriservices-eng.php#news" class="nav-link">News</a></li>
                    <li><a href="/eng/agriservices-eng.php#gruppo" class="nav-link">Leadership</a></li>
                    <li><a href="/eng/agriservices-eng.php#services" class="nav-link">Services</a></li>
                    <li><a href="/eng/index-eng.php#gruppo" class="nav-link">Our Group</a></li>
                    <li><a href="/eng/lavora-con-noi-eng/lcn-acrisure-eng.php" class="nav-link">Work With Us</a></li>
                </ul>
            </nav>
            <nav class="language-switcher">
                <ul>
                    <li><a href="/policy/policyAgriservices.php" class="language-btn">IT</a></li>
                    <li><a onclick="window.location.href='#'" class="language-btn active">EN</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="privacy-hero">
        <div class="hero-content">
            <h1>Privacy Policy</h1>
            <p>Discover how we manage and protect your personal data in compliance with GDPR and Italian regulations.</p>
        </div>
    </section>

    <section class="section">
        <div class="privacy-content">
            <div class="privacy-section">
            <h2>PRIVACY POLICY FOR THE WEBSITE</h2>
            <h3>INTRODUCTION</h3>
                <p>Pursuant to Regulation (EU) 2016/679 ("GDPR"), Acrisure Agriservices S.r.l. provides this information on the processing of personal data of users who browse the website <a href="/eng/agriservices-eng.php">Acrisure Agriservices S.r.l.</a> and who provide their personal data to use the services offered therein.</p>
                <p>This information does not concern other websites or online services accessible via hyperlinks that may be published on the Website but refer to resources outside the domain.</p>
                <p>This policy applies to all users, including registered and unregistered visitors, of our site: <a href="/eng/agriservices-eng.php">Acrisure Agriservices S.r.l.</a>. The user is invited to read this information carefully. In case of doubts or questions, the user can contact us at: <a href="mailto:demetra@pec.demetra.it">demetra@pec.demetra.it</a></p>
            </div>

            <div class="privacy-section">
                <h2>1) DATA CONTROLLER AND DATA PROTECTION OFFICER</h2>
                <p><strong>Data Controller</strong> is Acrisure Agriservices S.r.l., Via Lovanio, 6 - 00198 Roma.</p>
                <p><strong>Data Protection Officer (DPO)</strong> is Dr. Alessandro Asole, Z.I Predda Niedda str 1, reachable at the following address: <a href="mailto:privacy@prismaquality.com">privacy@prismaquality.com</a></p>
            </div>

            <div class="privacy-section">
                <h2>2) PERSONAL DATA PROCESSED</h2>
                <p>Acrisure Agriservices S.r.l. will process the following personal data of users:</p>
                
                <h3>a) Navigation data</h3>
                <p>That is, personal data whose transmission is implicit in the use of Internet communication protocols.</p>
                <p>This category of data includes IP addresses or domain names of computers used by users connecting to the site, URI (Uniform Resource Identifier) addresses of requested resources, time of request, method used to submit the request to the server and other parameters related to the operating system and the user's IT environment as well as, with regard to the use of connected services, the user's personal details. For personal data processed through the use of cookies, please refer to the <a href="/eng/cookies-eng/cookiesAgriservices-eng.php">relevant information</a>.</p>
                
                <h3>b) Data provided by the user</h3>
                <p>That is, all data that the user decides to share with Acrisure Agriservices S.r.l. to use the services available on the Website. In particular, in order to use the services offered on the Website, interested parties may communicate:</p>
                <ul>
                    <li>Personal and contact details (e.g. name, surname, email, telephone) provided through the "Contacts" section;</li>
                    <li>Data contained in the curriculum vitae transmitted through the "Work with us" section;</li>
                    <li>Other data that may be requested in the future through new sections or services of the Website (for example only and not exhaustively, newsletter subscriptions, registrations to reserved areas or similar interaction tools);</li>
                    <li>Data contained in messages sent to Acrisure Agriservices S.r.l. to request information.</li>
                </ul>
            </div>

            <div class="privacy-section">
                <h2>3) TYPE OF DATA PROCESSED, LEGAL BASIS, PURPOSE OF PROCESSING, RETENTION TIMES, MANDATORY NATURE OF PROVISION</h2>
                
                <table style="width:100%; border-collapse: collapse; margin: 20px 0;">
                    <tr style="background-color: #f5f5f5;">
                        <th style="border: 1px solid #ddd; padding: 12px; text-align: left;">TYPE OF DATA PROCESSED</th>
                        <th style="border: 1px solid #ddd; padding: 12px; text-align: left;">LEGAL BASIS</th>
                        <th style="border: 1px solid #ddd; padding: 12px; text-align: left;">PURPOSE OF PROCESSING</th>
                        <th style="border: 1px solid #ddd; padding: 12px; text-align: left;">RETENTION TIMES</th>
                        <th style="border: 1px solid #ddd; padding: 12px; text-align: left;">MANDATORY NATURE OF PROVISION</th>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #ddd; padding: 12px; vertical-align: top;"><strong>I.</strong> Navigation data\ strictly necessary technical cookies and analytical cookies</td>
                        <td style="border: 1px solid #ddd; padding: 12px; vertical-align: top;">art. 130 Legislative Decree 196/2003</td>
                        <td style="border: 1px solid #ddd; padding: 12px; vertical-align: top;"><strong>Delivery of Website content and aggregate statistical analysis</strong></td>
                        <td style="border: 1px solid #ddd; padding: 12px; vertical-align: top;">Please refer to what is reported in the <a href="/eng/cookies-eng/cookiesAgriservices-eng.php">cookie policy</a>.</td>
                        <td style="border: 1px solid #ddd; padding: 12px; vertical-align: top;">Please refer to what is reported in the <a href="/eng/cookies-eng/cookiesAgriservices-eng.php">cookie policy</a>.</td>
                    </tr>
                    <tr style="background-color: #f9f9f9;">
                        <td style="border: 1px solid #ddd; padding: 12px; vertical-align: top;"><strong>II.</strong> Personal and contact details\ Data relating to the asset to be insured</td>
                        <td style="border: 1px solid #ddd; padding: 12px; vertical-align: top;">Performance of a contract or pre-contractual measures requested by the data subject (art. 6, par. 1, lett. b), GDPR)</td>
                        <td style="border: 1px solid #ddd; padding: 12px; vertical-align: top;"><strong>Provision of "Information request" and "assistance request" services in the "contact us" area\ Provision of "consultancy" services</strong></td>
                        <td style="border: 1px solid #ddd; padding: 12px; vertical-align: top;">2 years from the service request and request for quotation (for prospects)\ 10 years from termination of the contractual relationship (for customers)</td>
                        <td style="border: 1px solid #ddd; padding: 12px; vertical-align: top;">Failure to provide data will make it impossible for Acrisure Agriservices S.r.l. to provide the requested services, but will not affect the user's use of the Website.</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #ddd; padding: 12px; vertical-align: top;"><strong>III.</strong> Common personal data provided by the data subject, including those relating to addresses and contacts.</td>
                        <td style="border: 1px solid #ddd; padding: 12px; vertical-align: top;">Consent of the data subject (art. 6, par. 1, lett. a), GDPR)</td>
                        <td style="border: 1px solid #ddd; padding: 12px; vertical-align: top;"><strong>MARKETING</strong> (for example only and not exhaustively: sending promotional communications, direct sales, targeting and re-targeting, carrying out market research through automated and digital methods e.g. SMS, Email, Instant Messaging Apps...)</td>
                        <td style="border: 1px solid #ddd; padding: 12px; vertical-align: top;">24 months from the request for quotation or request for consultancy or until revocation of consent by the data subject if earlier.</td>
                        <td style="border: 1px solid #ddd; padding: 12px; vertical-align: top;">Provision of data is optional and if you decide not to give consent to processing, you will not suffer any negative consequences regarding the existing or being formed contract.</td>
                    </tr>
                    <tr style="background-color: #f9f9f9;">
                        <td style="border: 1px solid #ddd; padding: 12px; vertical-align: top;"><strong>IV.</strong> -- personal data, provided by you and/or acquired from third parties (excluding special category data),\ -- contact data (email and telephone)\ -- data acquired through questionnaires on needs, interests and preferences, for the purpose of analyzing aspects concerning, among others, economic situation, personal preferences, interests, habits, behavior, and to improve the offer of the Company itself and by the companies of the belonging group.</td>
                        <td style="border: 1px solid #ddd; padding: 12px; vertical-align: top;">Consent of the data subject (art. 6, par. 1, lett. a), GDPR)</td>
                        <td style="border: 1px solid #ddd; padding: 12px; vertical-align: top;"><strong>PROFILING</strong> (automated processing of personal data to analyze or predict aspects concerning economic situation, personal preferences, interests, behavior for marketing activities)</td>
                        <td style="border: 1px solid #ddd; padding: 12px; vertical-align: top;">12 months from the request for quotation or request for consultancy or until revocation of consent by the data subject if earlier.</td>
                        <td style="border: 1px solid #ddd; padding: 12px; vertical-align: top;">Provision of data is optional and if you decide not to give consent to processing, you will not suffer any negative consequences regarding the existing or being formed contract.</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #ddd; padding: 12px; vertical-align: top;"><strong>V.</strong> Personal details and data provided for example on the occasion of the mandatory by law completion of questionnaires relating to your risk profiles</td>
                        <td style="border: 1px solid #ddd; padding: 12px; vertical-align: top;">Compliance with legal obligations to which the controller is subject (art. 6, par. 1, lett. c), GDPR)</td>
                        <td style="border: 1px solid #ddd; padding: 12px; vertical-align: top;"><strong>Compliance with legal obligations incumbent on the Controller</strong> (e.g. regulatory obligations relating to the insurance sector, obligations for Website accessibility, etc.)</td>
                        <td style="border: 1px solid #ddd; padding: 12px; vertical-align: top;">10 years or the different term provided by applicable law</td>
                        <td style="border: 1px solid #ddd; padding: 12px; vertical-align: top;">Provision of personal data is implicit whenever the user browses the Website and/or requests to use the services offered by the Website.</td>
                    </tr>
                    <tr style="background-color: #f9f9f9;">
                        <td style="border: 1px solid #ddd; padding: 12px; vertical-align: top;"><strong>VI.</strong> Personal and pre-contractual data, and any relevant data in the specific case</td>
                        <td style="border: 1px solid #ddd; padding: 12px; vertical-align: top;">Legitimate interest of Acrisure Agriservices S.r.l. and/or third parties to exercise the right of defense and protection of rights and/or interests of Acrisure Agriservices S.r.l. and/or third parties (art. 6, par. 1, lett. f), GDPR).</td>
                        <td style="border: 1px solid #ddd; padding: 12px; vertical-align: top;"><strong>Establishment, exercise or defense of a right of Acrisure Agriservices S.r.l. or third parties</strong></td>
                        <td style="border: 1px solid #ddd; padding: 12px; vertical-align: top;">For the entire time necessary to define any contentious or pre-contentious situation until final res judicata or expiration of limitation periods.</td>
                        <td style="border: 1px solid #ddd; padding: 12px; vertical-align: top;">Provision of personal data is implicit whenever the user browses the Website and/or requests to use the services offered by the Website.</td>
                    </tr>
                </table>
            </div>

            <div class="privacy-section">
                <h2>4) DATA COMMUNICATION</h2>
                <p>The processing of personal data for the purposes described above will be carried out by the internal staff specifically appointed by Acrisure Agriservices S.r.l. who will act on the basis of specific instructions provided by the Controller itself.</p>
                <p>Furthermore, personal data may also be communicated to the following subjects:</p>
                <ul>
                    <li>a) Insurance agents and subjects who process personal data for the purposes described above on behalf of Acrisure Agriservices S.r.l., specifically appointed as data processors pursuant to art. 28 GDPR (for example, IT service providers or Website developers);</li>
                    <li>b) Public or private subjects (for example only, insurance companies, banks, legal consultants, public authorities, judicial bodies, revenue agency), who will process personal data as autonomous data controllers.</li>
                </ul>
            </div>

            <div class="privacy-section">
                <h2>5) DATA TRANSFER</h2>
                <p>Without prejudice to what is provided for the processing of data carried out through cookies, for which please refer to the <a href="/eng/cookies-eng/cookiesAgriservices-eng.php">relevant information</a>, the transfer of personal data to countries not belonging to the European Economic Area ("EEA") or to international organizations is not envisaged.</p>
                <p>If such transfer should become necessary, the measures provided for by the GDPR will be implemented, after updating this information as well.</p>
            </div>

            <div class="privacy-section">
                <h2>6) USER RIGHTS</h2>
                <p>Pursuant to arts. 15-22 GDPR, data subjects can contact the Controller to exercise specific rights such as:</p>
                <ul>
                    <li><strong>Right of access</strong>: right to obtain from the Controller confirmation as to whether or not personal data is being processed and, if so, to obtain access to personal data and further information on origin, purpose, category of data processed, recipients of communication and/or data transfer, etc;</li>
                    <li><strong>Right to rectification</strong>: right to obtain from the Controller the rectification of inaccurate personal data without undue delay, as well as the integration of incomplete personal data, also by providing an integrative statement;</li>
                    <li><strong>Right to erasure</strong>: right to obtain from the Controller the erasure of personal data without undue delay in the event that:
                        <ul>
                            <li>personal data are no longer necessary in relation to the purposes for which they were collected;</li>
                            <li>the consent on which the processing is based is withdrawn and there is no other legal basis for the processing;</li>
                            <li>personal data have been unlawfully processed;</li>
                            <li>personal data must be erased to comply with a legal obligation under Union or Member State law to which the controller is subject;</li>
                        </ul>
                    </li>
                    <li><strong>Right to object to processing</strong>: right to object at any time, for reasons related to your particular situation, to the processing of personal data pursuant to art. 6, par. 1, lett. e) or f), GDPR, including profiling based on these provisions;</li>
                    <li><strong>Right to restriction of processing</strong>: right to obtain from the Controller the restriction of processing, in cases where the accuracy of personal data is contested (for the period necessary for the controller to verify the accuracy of such personal data), if the processing is unlawful and/or the data subject has objected to the processing;</li>
                    <li><strong>Right to data portability</strong>: right to receive in a structured, commonly used and machine-readable format the personal data and to transmit those data to another controller, only for cases where the processing is based on consent and only for data processed through electronic means.</li>
                </ul>
                <p>To exercise these rights, make reports and/or request clarifications on the processing of personal data, data subjects can send an email to: <a href="mailto:demetra@pec.demetra.it">demetra@pec.demetra.it</a> or a registered letter to: Acrisure Agriservices S.r.l., Via Lovanio, 6 - 00198 Roma.</p>
            </div>

            <div class="privacy-section">
                <h2>7) METHODS OF EXERCISING RIGHTS</h2>
                <p><strong>We also remind you that you have the right to lodge a complaint with a supervisory authority.</strong> In particular, without prejudice to any other administrative or judicial remedy, the data subject who considers that the processing concerning him/her violates the GDPR has the right to lodge a complaint with the supervisory authority of the Member State in which he/she resides or habitually works, or of the State in which the alleged violation occurred. For Italy, the competent Authority is the Garante per la Protezione dei Dati Personali (Data Protection Authority).</p>
            </div>

            <div class="privacy-section">
                <h2>8) CHANGES AND UPDATES TO THIS INFORMATION</h2>
                <p>Also in consideration of future changes that may occur in the legislation on the protection of personal data, Acrisure Agriservices S.r.l. may integrate and/or update, in whole or in part, this information. It is understood that any changes, integrations or updates will be communicated in accordance with current legislation, by means of publication on the website <a href="/eng/agriservices-eng.php">Acrisure Agriservices S.r.l.</a></p>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="footer-content">
            <div class="footer-column">
                <h3><i class="fas fa-building"></i>Registered Office</h3>
                <ul class="footer-links">
                    <li><i class="fas fa-file-contract"></i>Acrisure Agriservices</li>
                    <!-- <li><i class="fas fa-id-card"></i> VAT: 13147890969</li> -->
                    <li><i class="fas fa-map-marker-alt"></i>6 Via Lovanio - 00198 Rome</li><br>
                    <li><img src="/img/ACRISURE AGRISERVICES.jpg" class="logo-footer" alt="Acrisure Agriservices Logo"></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3><i class="fas fa-map-marked-alt"></i>Italian Offices</h3>
                <ul class="footer-links">
                    <li><i class="fas fa-city"></i> <strong>Rome (RM)</strong><br>6 Via Lovanio - 00198</li>
                    <li><i class="fas fa-city"></i> <strong>Cles (TN)</strong><br>44 Piazza Granda - 38023</li>
                </ul>
            </div>
            
            <div class="footer-column">
                <h3><i class="fas fa-headset"></i>Contacts</h3>
                <ul class="footer-links">
                    <li><i class="fas fa-phone-alt"></i>Administration: +39 069 8968206</li>
                    <li><i class="fas fa-envelope"></i> <a href="mailto:info@acrisure.it">info@acrisure.it</a></li>
                    <li><i class="fas fa-file-alt"></i> <a href="mailto:agriservices@pec.acrisure.it">agriservices@pec.acrisure.it</a></li>
                </ul>
                
                <div class="social-links">
                    <a href="https://it.linkedin.com/company/acrisureitalia" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                    <a href="https://www.instagram.com/acrisureitalia/" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            
            <div class="footer-column">
                <h3><i class="fas fa-clock"></i> Office Hours</h3>
                <ul class="footer-links">
                    <li><i class="far fa-clock"></i> <strong>Mon-Fri</strong>: 9:00 AM - 6:00 PM</li>
                    <li><i class="fas fa-door-closed"></i> <strong>Sat-Sun</strong>: Closed</li>
                </ul>
                
                <div class="legal-links">
                    <a href="#header">Privacy Policy</a>
                    <a href="/eng/cookies-eng/cookiesAgriservices-eng.php">Cookie Policy</a>
                    <a href="/eng/legal-eng/legalAgriservices-eng.php">Legal & Compliance</a>
                </div>
            </div>
        </div>
        
        <br>
        <!-- Add this new section above the footer-bottom -->
        <div class="footer-legal-notice">
            <p>Acrisure Agriservices S.r.l. - Single-member company subject to the direction and coordination of Acrisure S.r.l. - <br>
            Share capital €10,400.00 fully paid - Company participating in the Acrisure VAT Group VAT No. 13147890969 - <br>
            Tax Code and registration number in the Rome Companies Register No. 05901241009 REA RM- 937257 </p>
        </div>
    </footer>
    
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