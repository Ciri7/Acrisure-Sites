<?php include('../../includes/auth.php'); ?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acrisure Services - Cookie Policy</title>
    <meta name="description" content="Cookie Policy di Acrisure Italia. Scopri come utilizziamo i cookie per migliorare la tua esperienza sul nostro sito web.">
    <link rel="canonical" href="https://www.acrisureitalia.com/cookie-policy" />
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
            overflow-x: hidden;
            background: linear-gradient(rgba(255, 255, 255, 0.7), rgba(255, 255, 255, 0.7)), url('/img/body.avif');
            background-size: cover;
            background-position: center;
            background-attachment: fixed; 
        }
        
        /* Page transition */
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
        .policy-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/img/hr3.jpg');
            background-size: cover;
            background-position: top;
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
        
        .policy-hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            line-height: 1.2;
            animation: fadeInUp 1s ease;
        }
        
        /* Policy Content */
        .policy-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 5% 6rem;
        }
        
        .policy-section {
            margin-bottom: 3rem;
        }
        
        .policy-section h2 {
            color: var(--secondary);
            margin-bottom: 1.5rem;
            font-size: 2rem;
            position: relative;
            padding-bottom: 0.8rem;
        }
        
        .policy-section h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 80px;
            height: 3px;
            background-color: var(--accent);
            border-radius: 2px;
        }
        
        .policy-section h3 {
            color: var(--secondary);
            margin: 2rem 0 1rem;
            font-size: 1.5rem;
        }
        
        .policy-section p {
            margin-bottom: 1.2rem;
            line-height: 1.7;
        }
        
        .policy-section ul {
            margin-bottom: 1.5rem;
            padding-left: 1.5rem;
        }
        
        .policy-section li {
            margin-bottom: 0.8rem;
            line-height: 1.6;
        }
        
        .policy-section table {
            width: 100%;
            border-collapse: collapse;
            margin: 2rem 0;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .policy-section th, 
        .policy-section td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid #eee;
        }
        
        .policy-section th {
            background-color: var(--secondary);
            color: white;
            font-weight: 600;
        }
        
        .policy-section tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        
        .policy-section tr:hover {
            background-color: rgba(77, 143, 209, 0.1);
        }
        
        .last-updated {
            font-style: italic;
            color: #666;
            margin-top: 3rem;
            padding-top: 1rem;
            border-top: 1px solid #eee;
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
            white-space: nowrap; /* Aggiungi questa riga */
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
        
        /* Responsive */
        @media (max-width: 1024px) {
            .policy-hero h1 {
                font-size: 3rem;
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
            
            .policy-hero {
                height: 40vh;
                min-height: 350px;
            }
            
            .policy-hero h1 {
                font-size: 2.5rem;
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
            .policy-hero h1 {
                font-size: 2rem;
            }
            
            .policy-section h2 {
                font-size: 1.8rem;
            }
            
            .policy-section h3 {
                font-size: 1.3rem;
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
    </style>
</head>
<body>
    <!-- Page transition overlay -->
    <div class="page-transition"></div>

    <header id="header">
        <div class="navbar">
            <div class="navbar-brand">
                <a href="/eng/services-eng.php">
                    <img src="/img/Acrisure Services.jpg" alt="Acrisure Services Logo" class="logo">
                </a>
                <div class="menu-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <nav>
                <ul>
                    <li><a href="/services.php#news" class="nav-link">News</a></li>
                    <li><a href="/services.php#gruppo" class="nav-link">Leadership</a></li>
                    <li><a href="/services.php#services" class="nav-link">Services</a></li>
                    <li><a href="/index-eng.php#gruppo" class="nav-link">Our Group</a></li>
                    <li><a href="/eng/lavora-con-noi-eng/lcn-acrisure-eng.php" class="nav-link">Work With Us</a></li>
                </ul>
            </nav>
            <nav class="language-switcher">
                <ul>
                    <li><a href="/cookies/cookiesServices.php" class="language-btn">IT</a></li>
                    <li><a onclick="window.location.href='#'" class="language-btn active">EN</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="policy-hero">
        <div class="hero-content">
            <h1>Cookie Policy</h1>
        </div>
    </section>

    <div class="policy-container">
        <div class="policy-section">
            <h2>Introduction</h2>
            <p>This Cookie Policy explains how Acrisure Italy ("we", "our" or "us") uses cookies and similar technologies when you visit our website <a href="/services.php">www.acrisureservices.it</a> ("Site"). We inform you about what cookies are, how we use them, and how you can manage them.</p>
            <p>By using our Site, you consent to the use of cookies in accordance with this Cookie Policy. If you do not accept our use of cookies, please disable them following the instructions in this policy or do not use our Site.</p>
        </div>

        <div class="policy-section">
            <h2>What are cookies?</h2>
            <p>Cookies are small text files that websites visited by the user send and record on their computer or mobile device, to be then retransmitted to the same sites on subsequent visits. Thanks to cookies, a website remembers the user's actions and preferences (such as login data, language, font size, other display settings, etc.) so they don't have to be indicated again when the user returns to visit said site or navigates from one page to another of the same site.</p>
            <p>Cookies are used to perform computer authentication, session monitoring and storage of information regarding the activities of users who access a site and may also contain a unique identification code that allows tracking the user's navigation within the site itself for statistical or advertising purposes.</p>
        </div>

        <div class="policy-section">
            <h2>Types of cookies we use</h2>
            <p>Our Site uses different types of cookies, each with a specific function:</p>
            
            <h3>1. Technical cookies</h3>
            <p>These cookies are essential for the proper functioning of our Site and to allow you to navigate and use its features. Without these cookies, some Site functionalities might not be available.</p>
            <ul>
                <li><strong>Session cookies</strong>: are deleted when you close the browser and are necessary for the site's operation (e.g. maintaining the browsing session).</li>
                <li><strong>Functionality cookies</strong>: remember your choices (such as language or region) to improve your experience.</li>
            </ul>
            
            <h3>2. Analytical cookies</h3>
            <p>These cookies help us understand how visitors interact with our Site, providing us with information about the number of visitors, pages visited, time spent on the site, etc. We use this information to improve our Site and user experience.</p>
            <p>These cookies are collected anonymously and in aggregate form.</p>
            
            <h3>3. Third-party cookies</h3>
            <p>Some pages of our Site may contain third-party cookies that manage content and services such as social plugins or analytics services. These third parties may set their own cookies to track user activity and provide their services.</p>
            <p>We have no control over the content of these cookies, which are entirely managed by third parties according to their respective policies.</p>
        </div>

        <div class="policy-section">
            <h2>Detailed list of cookies used</h2>
            <p>Below is a detailed list of cookies used on our Site:</p>
            
            <table>
                <thead>
                    <tr>
                        <th>Cookie name</th>
                        <th>Type</th>
                        <th>Purpose</th>
                        <th>Duration</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>PHPSESSID</td>
                        <td>Technical</td>
                        <td>Maintains user session state during navigation</td>
                        <td>Until browser closes</td>
                    </tr>
                    <tr>
                        <td>cookie_consent</td>
                        <td>Technical</td>
                        <td>Stores user's choice regarding cookie acceptance</td>
                        <td>1 year</td>
                    </tr>
                    <tr>
                        <td>_ga</td>
                        <td>Analytical (Google Analytics)</td>
                        <td>Distinguishes unique users by assigning a randomly generated number as a client identifier</td>
                        <td>2 years</td>
                    </tr>
                    <tr>
                        <td>_gid</td>
                        <td>Analytical (Google Analytics)</td>
                        <td>Distinguishes users</td>
                        <td>24 hours</td>
                    </tr>
                    <tr>
                        <td>_gat</td>
                        <td>Analytical (Google Analytics)</td>
                        <td>Used to limit request rate</td>
                        <td>1 minute</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="policy-section">
            <h2>How to manage cookies</h2>
            <p>You can manage your cookie preferences through your browser settings. Most browsers allow you to:</p>
            <ul>
                <li>View cookies on your device and delete them</li>
                <li>Block third-party cookies</li>
                <li>Block cookies from certain sites</li>
                <li>Block all cookies from being set</li>
                <li>Delete all cookies when you close the browser</li>
            </ul>
            
            <p>If you choose to disable cookies, some parts of our Site may not work properly. Some features may not be available and some pages may not display correctly.</p>
            
            <h3>Browser-specific guides:</h3>
            <ul>
                <li><a href="https://support.google.com/chrome/answer/95647" target="_blank">Google Chrome</a></li>
                <li><a href="https://support.mozilla.org/en-US/kb/enhanced-tracking-protection-firefox-desktop" target="_blank">Mozilla Firefox</a></li>
                <li><a href="https://support.microsoft.com/en-us/topic/delete-and-manage-cookies-168dab11-0753-043d-7c16-ede5947fc64d" target="_blank">Internet Explorer</a></li>
                <li><a href="https://support.apple.com/en-us/guide/safari/sfri11471/mac" target="_blank">Safari</a></li>
                <li><a href="https://help.opera.com/en/latest/web-preferences/#cookies" target="_blank">Opera</a></li>
            </ul>
            
            <p>To specifically disable Google Analytics cookies, you can download the browser add-on available at the following link: <a href="https://tools.google.com/dlpage/gaoptout" target="_blank">https://tools.google.com/dlpage/gaoptout</a></p>
        </div>

        <div class="policy-section">
            <h2>Changes to the Cookie Policy</h2>
            <p>We reserve the right to make changes to this Cookie Policy at any time. All changes will be posted on this page and, if significant, will be communicated through a clearly visible notice on our Site.</p>
            <p>We encourage you to periodically review this page to be informed of any changes.</p>
        </div>

        <p class="last-updated">Last updated: June 15, 2024</p>
    </div>

    <!-- FOOTER -->
    <footer>
        <div class="footer-content">
            <div class="footer-column">
                <h3><i class="fas fa-building"></i>Registered Office</h3>
                <ul class="footer-links">
                    <li><i class="fas fa-file-contract"></i>Acrisure Services</li>
                    <li><i class="fas fa-map-marker-alt"></i>3 Giuseppe Mazzini Street - 07100 Sassari</li><br>
                    <li><img src="/img/Acrisure Services.jpg" class="logo-footer" alt=""></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3><i class="fas fa-map-marked-alt"></i>Italian Offices</h3>
                <ul class="footer-links">
                    <li><i class="fas fa-city"></i> <strong>Sassari (SS)</strong><br>3 Giuseppe Mazzini Street - 07100</li>
                    <li><i class="fas fa-city"></i> <strong>Milan (MI)</strong><br>6 Santa Maria Segreta Street - 20123</li>
                    <li><i class="fas fa-city"></i> <strong>Rome (RM)</strong><br>6 Lovanio Street - 00198</li>
                    <li><i class="fas fa-city"></i> <strong>Turin (TO)</strong><br>15 San Francesco Da Paola Street - 10123</li>
                    <li><i class="fas fa-city"></i> <strong>Perugia (PG)</strong><br>13 d/e Campo di Marte Street, 06124</li>
                </ul>
            </div>
            
            <div class="footer-column">
                <h3><i class="fas fa-headset"></i>Contacts</h3>
                <ul class="footer-links">
                    <li><i class="fas fa-phone-alt"></i>Administration: 079 2016047</li>
                    <li><i class="fas fa-phone-volume"></i>Customer Care: 079 2853063</li>
                    <li><i class="fas fa-envelope"></i><a href="mailto:info@acrisure.it">info@acrisure.it</a></li>
                    <li><i class="fas fa-envelope"></i><a href="mailto:acrisureservices@pec.acrisureservices.com">acrisureservices@pec.acrisureservices.com</a></li>
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
                    <a href="/eng/legal-eng/legalServices-eng.php">Legal & Compliance</a>
                    <a href="/eng/Qualità-eng/qualitàServices-eng.php">Qualità</a>
                    <a href="/eng/policy-eng/policyServices-eng.php">Privacy Policy</a>
                    <a href="#header">Cookie Policy</a>
                </div>
            </div>
        </div>
        
        <br>
        <div class="footer-legal-notice">
            <p>Acrisure Services S.r.l. - Single-member company subject to the direction and coordination of Acrisure S.r.l. - <br>
            Share capital €10,000.00 fully paid - Company participating in the Acrisure VAT Group VAT No. 13147890969 - <br>
            Tax Code and registration number in the Sassari Companies Register No. 02888100902   REA SS- 212778</p>
        </div>
    </footer>

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

        // Gestione cambio lingua
        const languageButtons = document.querySelectorAll('.language-btn');
        
        languageButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Rimuovi la classe active da tutti i pulsanti
                languageButtons.forEach(btn => btn.classList.remove('active'));
                
                // Aggiungi la classe active al pulsante cliccato
                this.classList.add('active');
                
                // Qui dovresti implementare la logica per cambiare la lingua
                // Ad esempio, reindirizzando alla versione inglese o caricando i contenuti tradotti
                if (this.textContent === 'EN') {
                    // Cambia a inglese
                    console.log('Cambio a inglese');
                    // window.location.href = '/en/services.php';
                } else {
                    // Cambia a italiano
                    console.log('Cambio a italiano');
                    // window.location.href = '/services.php';
                }
            });
        });

        // Page transition animation
        document.querySelectorAll('a[href^="/"]').forEach(link => {
            // Skip anchor links and external links
            if (link.href.includes('#') || !link.href.includes(window.location.host)) return;
            
            link.addEventListener('click', function(e) {
                // Skip if target is blank
                if (this.target === '_blank') return;
                
                e.preventDefault();
                const href = this.getAttribute('href');
                
                // Show page transition
                const transition = document.querySelector('.page-transition');
                transition.style.opacity = '1';
                transition.style.pointerEvents = 'auto';
                
                // After animation completes, navigate to new page
                setTimeout(() => {
                    window.location.href = href;
                }, 400);
            });
        });
        
        // When page loads, animate out the transition
        window.addEventListener('load', () => {
            const transition = document.querySelector('.page-transition');
            if (transition) {
                transition.style.opacity = '0';
                transition.style.pointerEvents = 'none';
            }
        });
    </script>
</body>
</html>