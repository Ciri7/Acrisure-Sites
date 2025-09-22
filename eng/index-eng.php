<?php include('../includes/auth.php'); ?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acrisure S.r.l.</title>
    <meta name="description" content="Acrisure Italia offre soluzioni assicurative innovative e su misura per privati e aziende. Scopri le nostre polizze e servizi di risk management.">
    <!-- Aggiunto per SEO -->
    <meta name="keywords" content="assicurazioni, broker assicurativo, polizze, risk management, Acrisure, coperture assicurative">
    <link rel="canonical" href="https://www.acrisureitalia.com" />
    <!-- Schema markup per organizzazione -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Acrisure Italia",
      "url": "https://www.acrisureitalia.com",
      "logo": "https://www.acrisureitalia.com/img/Acrisure.png",
      "sameAs": [
        "https://www.linkedin.com/company/acrisure-italia",
        "https://facebook.com/acrisureitalia"
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
            background: linear-gradient(rgba(255, 255, 255, 0.7), rgba(255, 255, 255, 0.7)), url('img/body.avif');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;     
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
        
        nav ul li:not(:last-child):not(.language-switcher)::after {
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
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/img/acrisure7.jpg');
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

        .hero2 {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/img/cit2.avif');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            height: 60vh;
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

        .hero2-content {
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

        .hero2 h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            line-height: 1.2;
            animation: fadeInUp 1s ease;
            text-align: center;
        }
        
        .hero p {
            font-size: 1.3rem;
            max-width: 600px;
            margin-bottom: 2.5rem;
            opacity: 0.9;
            animation: fadeInUp 1s ease 0.3s forwards;
            opacity: 0;
        }

        .hero2 p {
            font-size: 1.3rem;
            max-width: 600px;
            margin-bottom: 2.5rem;
            opacity: 0.9;
            animation: fadeInUp 1s ease 0.3s forwards;
            opacity: 0;
            text-align: center;
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
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
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
        
        /* .section-subtitle {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 3rem;
            font-size: 1.2rem;
            color: #555;
        } */
        
        .section-subtitle {
            text-align: center;
            max-width: 1200px;
            margin: 0 auto 3rem;
            font-size: 1.2rem;
            color: #555;
        }
        .section-subtitle2 {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 3rem;
            font-size: 1.2rem;
            color: #fff;
        }
        /* About Section */
        /* .about {
            background-color: var(--light);
        } */
        
        .about-content {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .about-content p {
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
            line-height: 1.7;
            text-align: center;
        }
        
        /* Gruppo Section */
        .aziende-container {
            display: flex;
            justify-content: center;
        }
        
        .aziende-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
            max-width: 1200px;
            width: 100%;
        }
        
        .azienda-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            text-align: center;
            padding: 2rem;
            border: 1px solid #eee;
        }
        
        .azienda-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
            border-color: var(--accent);
        }
        
        .azienda-logo {
            height: 80px;
            width: auto;
            max-width: 100%;
            object-fit: contain;
            margin-bottom: 1.5rem;
            transition: transform 0.5s;
        }
        
        .azienda-card:hover .azienda-logo {
            transform: scale(1.1);
        }
        
        .azienda-nome {
            color: var(--secondary);
            margin: 1rem 0;
            font-size: 1.3rem;
            transition: color 0.3s;
        }
        
        .azienda-card:hover .azienda-nome {
            color: var(--accent);
        }
        
        .azienda-desc {
            color: #666;
            font-size: 1rem;
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }
        
        .azienda-link {
            display: inline-flex;
            align-items: center;
            color: var(--accent);
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .azienda-link i {
            margin-left: 0.5rem;
            transition: transform 0.3s;
        }
        
        .azienda-link:hover {
            color: var(--primary);
        }
        
        .azienda-link:hover i {
            transform: translateX(5px);
        }

        /* ========== LEADERSHIP SECTION ========== */
        .leadership {
            background: linear-gradient(to bottom, 
                rgba(0, 0, 0, 0.1) 0%, 
                rgba(0, 0, 0, 0.7) 20%, 
                rgba(0, 0, 0, 0.7) 80%, 
                rgba(0, 0, 0, 0.1) 100%), 
                url('/img/leadership-bg.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white;
            position: relative;
        }
        
        .leadership .section-title {
            color: white;
            position: relative;
            z-index: 2;
        }
        
        .leadership .section-title::after {
            background-color: white;
        }
        
        .leadership-container {
            display: flex;
            justify-content: center;
            position: relative;
            z-index: 2;
        }
        
        .leadership-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
            margin-top: 2rem;
            max-width: 1200px;
            width: 100%;
        }
        
        /* Nuovo stile per la prima riga con 2 card centrate */
        .leadership-first-row {
            grid-column: 1 / -1;
            display: flex;
            justify-content: center;
            gap: 2rem;
        }
        
        .leadership-first-row .leadership-card {
            width: 45%;
            max-width: 500px;
        }
        
        /* Stile per le righe successive con 3 card */
        .leadership-other-rows {
            grid-column: 1 / -1;
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            gap: 2rem;
        }

        /* Stile per le righe successive con 3 card */
        .leadership-other-rows2 {
            grid-column: 1 / -1;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2rem;
        }
        
        .leadership-card {
            background-color: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            text-align: center;
            padding: 2rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
            position: relative;
            z-index: 2;
        }
        
        .leadership-card:hover {
            transform: translateY(-10px);
            background-color: rgba(255, 255, 255, 0.15);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
            border-color: var(--accent);
        }
        
        .leadership-logo {
            height: 80px;
            width: auto;
            max-width: 100%;
            object-fit: contain;
            margin-bottom: 1.5rem;
            transition: transform 0.5s;
        }
        
        .leadership-card:hover .leadership-logo {
            transform: scale(1.1);
        }
        
        .leadership-name {
            color: white;
            margin: 1rem 0;
            font-size: 1.3rem;
        }
        
        .leadership-desc {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1rem;
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }
        
        /* News Section */
        .news-section {
            background: linear-gradient(to bottom, 
                rgba(0, 0, 0, 0.1) 0%, 
                rgba(0, 0, 0, 0.7) 20%, 
                rgba(0, 0, 0, 0.7) 80%, 
                rgba(0, 0, 0, 0.1) 100%), 
                url('/img/777.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white;
        }
        
        .news-section .section-title {
            color: white;
        }
        
        .news-section .section-title::after {
            background-color: white;
        }
        
        .news-container {
            display: flex;
            gap: 2rem;
            flex-wrap: wrap;
            justify-content: center;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .news-carousel {
            flex: 2;
            min-width: 300px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 10px;
            padding: 2rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .news-item {
            margin-bottom: 1.5rem;
            padding-bottom: 1.5rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .news-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        
        .news-date {
            font-size: 0.9rem;
            color: var(--accent);
            margin-bottom: 0.5rem;
        }
        
        .news-item h3 {
            margin: 0.5rem 0;
            color: white;
            font-size: 1.3rem;
        }
        
        .news-item p {
            font-size: 1rem;
            opacity: 0.9;
            margin-bottom: 1rem;
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
            color: white;
        }
        
        .news-link:hover i {
            transform: translateX(5px);
        }
        
        .newsletter-box {
            flex: 1;
            min-width: 300px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 10px;
            padding: 2rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .newsletter-box h3 {
            margin-top: 0;
            color: white;
            margin-bottom: 1rem;
            font-size: 1.3rem;
        }
        
        .newsletter-box p {
            margin-bottom: 1.5rem;
            opacity: 0.9;
        }
        
        .newsletter-form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        
        .newsletter-form input {
            padding: 1rem;
            border: none;
            border-radius: 4px;
            background: rgba(255, 255, 255, 0.9);
            font-size: 1rem;
        }
        
        .newsletter-form button {
            align-self: flex-start;
            padding: 1rem 2rem;
            font-size: 1rem;
        }
        
        .newsletter-box .privacy-note {
            font-size: 0.8rem;
            margin-top: 1rem;
            opacity: 0.7;
        }
        
        .newsletter-box .privacy-note a {
            color: var(--accent);
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .newsletter-box .privacy-note a:hover {
            color: white;
        }

        .news-cta {
            text-align: center;
            margin-top: 2rem;
        }
        
        /* Contact Form Section */
        .contact-form {
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
        
        .form-message.success {
            background-color: rgba(40, 167, 69, 0.1);
            border: 1px solid var(--success);
            color: var(--success);
            display: block;
        }
        
        .form-message.error {
            background-color: rgba(220, 53, 69, 0.1);
            border: 1px solid var(--error);
            color: var(--error);
            display: block;
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
        
        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 0.8rem;
            line-height: 1.6;
        }
        
        .footer-links a {
            color: #003366;
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

        /* Footer migliorato */
        .footer-column h3 i {
            margin-right: 10px;
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

        .footer-newsletter {
            display: flex;
            margin-top: 1rem;
        }

        .footer-newsletter input {
            background: rgba(0, 0, 0, 0.05);
            color: var(--dark);
            border: 1px solid #ddd;
            padding: 0.8rem 1rem;
            font-size: 0.9rem;
            transition: all 0.3s;
            width: 100%;
        }

        .footer-newsletter input:focus {
            outline: none;
            box-shadow: 0 0 0 2px var(--accent);
            border-color: var(--accent);
        }

        .footer-newsletter button {
            background: var(--accent);
            color: white;
            border: none;
            padding: 0 1.2rem;
            border-radius: 0 4px 4px 0;
            cursor: pointer;
            transition: all 0.3s;
        }

        .footer-newsletter button:hover {
            background: var(--primary);
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
        
        /* Sezione Chi Siamo migliorata */
        .about-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 4rem;
        }

        .about-card {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            text-align: center;
            transition: all 0.3s;
        }

        .about-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .about-icon {
            font-size: 2.5rem;
            color: var(--accent);
            margin-bottom: 1.5rem;
        }

        .about-card h3 {
            color: var(--secondary);
            margin-bottom: 1rem;
        }

        .about-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 2rem;
            margin: 4rem 0;
            text-align: center;
        }

        .stat-item {
            padding: 1.5rem;
            background: rgba(0, 86, 179, 0.1);
            border-radius: 8px;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--secondary);
            margin-bottom: 0.5rem;
        }

        .stat-label {
            color: var(--dark);
            font-weight: 600;
        }

        .about-values h3 {
            text-align: center;
            margin-bottom: 3rem;
            font-size: 1.8rem;
            color: var(--secondary);
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .value-item {
            text-align: center;
            padding: 2rem;
            background: white;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .value-item i {
            font-size: 2rem;
            color: var(--accent);
            margin-bottom: 1.5rem;
        }

        .value-item h4 {
            color: var(--secondary);
            margin-bottom: 1rem;
        }

        /* Animazione numeri */
        @keyframes countUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .stat-number.animated {
            animation: countUp 1s ease forwards;
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
            padding: 0.8rem 1.5rem;
            border-radius: 4px;
            cursor: pointer;
            transition: all 0.3s;
            font-weight: 600;
            font-size: 1rem;
            min-width: 120px;
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
        
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
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
            
            .aziende-grid {
                grid-template-columns: repeat(2, minmax(250px, 1fr));
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

            .legal-links {
                justify-content: center;
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
            
            .aziende-grid {
                grid-template-columns: 1fr;
            }
            
            .news-container {
                flex-direction: column;
            }
            
            .news-carousel, .newsletter-box {
                min-width: 100%;
            }
            
            .contact-form {
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

        /* News Section */
        .news-section {
            overflow: hidden;
        }
        
        .news-wrapper {
            position: relative;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 5%;
            perspective: 1000px;
            height: 500px;
        }
        
        .news-container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            position: relative;
            transform-style: preserve-3d;
        }
        
        .news-card {
            position: absolute;
            width: 300px;
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 1px solid #eee;
            cursor: pointer;
            transform-origin: center center -200px;
            pointer-events: none;
            opacity: 0;
            transform: translateX(0) rotateY(0) scale(1);
            transition: all 0.5s ease;
        }
        
        .news-card.active {
            transform: translateZ(0);
            z-index: 10;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
            pointer-events: auto;
            opacity: 1;
        }
        
        .news-card.prev {
            transform: translateX(-80%) rotateY(30deg) scale(0.8);
            z-index: 5;
            opacity: 0.8;
            filter: brightness(0.9);
        }
        
        .news-card.next {
            transform: translateX(80%) rotateY(-30deg) scale(0.8);
            z-index: 5;
            opacity: 0.8;
            filter: brightness(0.9);
        }
        
        .news-card.far-prev {
            transform: translateX(-150%) rotateY(45deg) scale(0.6);
            z-index: 1;
            opacity: 0.6;
            filter: brightness(0.7);
        }
        
        .news-card.far-next {
            transform: translateX(150%) rotateY(-45deg) scale(0.6);
            z-index: 1;
            opacity: 0.6;
            filter: brightness(0.7);
        }
        
        .news-card.hidden-left {
            transform: translateX(-200%) rotateY(60deg) scale(0.4);
            opacity: 0;
            z-index: 0;
        }
        
        .news-card.hidden-right {
            transform: translateX(200%) rotateY(-60deg) scale(0.4);
            opacity: 0;
            z-index: 0;
        }
        
        .news-card.active:hover {
            transform: translateZ(20px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
        }
        
        .news-image {
            height: 200px;
            overflow: hidden;
        }
        
        .news-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }
        
        .news-card.active:hover .news-image img {
            transform: scale(1.1);
        }
        
        .news-content {
            padding: 2rem;
        }
        
        .news-content h3 {
            color: var(--secondary);
            margin-bottom: 1rem;
            font-size: 1.5rem;
            transition: color 0.3s;
        }
        
        .news-card.active:hover h3 {
            color: var(--accent);
        }
        
        .news-date {
            font-size: 0.9rem;
            color: var(--accent);
            margin-bottom: 0.5rem;
        }
        
        .news-content p {
            color: #666;
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }
        
        .news-cta {
            text-align: center;
            margin-top: 3rem;
        }
        
        /* Navigation arrows */
        .news-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 40px;
            height: 40px;
            background-color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.20);
            transition: all 0.3s;
            z-index: 10;
            border: none;
            color: var(--accent);
            font-size: 1.2rem;
        }
        
        .news-nav:hover {
            background-color: var(--accent);
            color: white;
            transform: translateY(-50%) scale(1.1);
        }
        
        .news-nav.prev {
            left: 20px;
        }
        
        .news-nav.next {
            right: 20px;
        }
        
        .news-nav.disabled {
            opacity: 0.3;
            cursor: not-allowed;
        }

        /* Modifiche per la sezione gruppo */
        .aziende-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
            max-width: 1200px;
            width: 100%;
        }

        .azienda-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            text-align: center;
            padding: 2rem;
            border: 1px solid #eee;
            display: flex;
            flex-direction: column;
            height: 100%; /* Assicura che tutte le card abbiano la stessa altezza */
            min-height: 400px; /* Altezza minima per uniformità */
        }

        .azienda-card-content {
            flex: 1; /* Fa espandere il contenuto per occupare lo spazio disponibile */
            display: flex;
            flex-direction: column;
        }

        .azienda-logo {
            height: 80px;
            width: auto;
            max-width: 100%;
            object-fit: contain;
            margin-bottom: 1.5rem;
            transition: transform 0.5s;
        }

        .azienda-nome {
            color: var(--secondary);
            margin: 1rem 0;
            font-size: 1.3rem;
            transition: color 0.3s;
        }

        .azienda-desc {
            color: #666;
            font-size: 1rem;
            margin-bottom: 1.5rem;
            line-height: 1.6;
            flex: 1; /* Fa espandere la descrizione per occupare lo spazio */
        }

        .azienda-link-container {
            margin-top: auto; /* Spinge il link in fondo */
            padding-top: 1.5rem;
            border-top: 1px solid rgba(0, 0, 0, 0.1); /* Linea separatrice */
        }

        .azienda-link {
            display: inline-flex;
            align-items: center;
            color: var(--accent);
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s;
        }

        .azienda-link i {
            margin-left: 0.5rem;
            transition: transform 0.3s;
        }

        .azienda-link:hover {
            color: var(--primary);
        }

        .azienda-link:hover i {
            transform: translateX(5px);
        }

        .social-links {
            margin-top: 1.5rem;
            display: flex;
            gap: 15px;
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
    </style>
</head>
<body>
    <header id="header">
        <div class="navbar">
            <div class="navbar-brand">
                <a href="#home">
                <img src="/img/AcrisureLOGO.png" class="logo" alt=""></li>
                </a>
                <div class="menu-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <nav>
                <ul>
                    <li><a href="#chi-siamo" class="nav-link">About Us</a></li>
                    <li><a href="#leadership" class="nav-link">Leadership</a></li>
                    <li><a href="#news" class="nav-link">News</a></li>
                    <li><a href="#gruppo" class="nav-link">Our Group</a></li>
                    <li><a href="/eng/lavora-con-noi-eng/lcn-acrisure-eng.php" class="nav-link">Work With Us</a></li>
                </ul>
            </nav>
            <nav class="language-switcher">
                <ul>
                    <li><a href="/index.php" class="language-btn">IT</a></li>
                    <li><a onclick="window.location.href='#'" class="language-btn active">EN</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="home" class="hero">
        <div class="hero-content">
            <h1>Acrisure S.r.l.</h1>
            <p>Acrisure combines advanced technology with human expertise to provide you with tailored solutions for your personal and business needs.</p>
        </div>
    </section>
    
    <!-- ABOUT US _________________________________________________________________________________________________________________________________ -->

    <section id="chi-siamo" class="section about">
        <h2 class="section-title">About Us</h2>
        <p class="section-subtitle">Acrisure S.r.l. is the Italian holding company of the Acrisure Group, one of the leading global operators in insurance and reinsurance brokerage and financial advisory services. The company plays a strategic direction and shareholding management role, coordinating the activities of the Group's companies in S.r.l. and fostering their growth in line with Acrisure's international vision, consolidating expertise, innovation, and strong market relationships.</p>
        <br>
        <div class="about-content">
            <div class="about-cards">
                <div class="about-card">
                    <div class="about-icon">
                        <i class="fas fa-globe-europe"></i>
                    </div>
                    <h3>Global Presence</h3>
                    <p>Acrisure is one of the leading international operators in insurance and financial services, with a presence in over 20 countries, integrating local excellence into a global reality capable of offering innovative and personalized solutions for businesses and individuals.</p>
                </div>
                
                <div class="about-card">
                    <div class="about-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3>Fintech</h3>
                    <p>A global leader in the Fintech sector that combines the best of humanity and high technology based on trust, ethics, and sustainability. Constantly updated with market innovations, we combine experience, professionalism, and cutting-edge technological tools to ensure a quality relationship with our partners, suppliers, and clients.</p>
                </div>
            </div>

            <h3 style="color: var(--secondary); text-align: center;">Global Presence</h3>
            <div class="about-stats">
                <div class="stat-item">
                    <div class="stat-number" data-count="$4.8B">0</div>
                    <div class="stat-label">Revenue</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number add-plus" data-count="+19,000">0</div>
                    <div class="stat-label">Employees</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number" data-count="24">0</div>
                    <div class="stat-label">Countries</div>
                </div>
            </div>

            <h3 style="color: var(--secondary); text-align: center;">Presence in S.r.l.</h3>
            <div class="about-stats">
                <div class="stat-item">
                    <div class="stat-number" data-count="6">0</div>
                    <div class="stat-label">Operating Offices</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number add-plus" data-count="+100">0</div>
                    <div class="stat-label">Employees</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number" data-count="10">0</div>
                    <div class="stat-label">Business Lines</div>
                </div>
            </div>
            
            <div class="values-grid">
                <div class="about-card">
                    <div class="about-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3>Values</h3>
                    <p>Acrisure's success in S.r.l. is based on integrity, trust, and entrepreneurship. Our staff is the core of the company's values: professionalism and dedication that translate every day into solid relationships with clients and partners, enhancing local skills in line with the Group's international vision.</p>
                </div>

                <div class="about-card">
                    <div class="about-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Social Responsibility</h3>
                    <p>
                        Our social commitment is not just a corporate responsibility, but a fundamental value. We actively work for a more sustainable future, convinced that taking concrete action is the only way to truly make a difference.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== LEADERSHIP SECTION ========== -->
    <section id="leadership" class="section leadership">
        <h2 class="section-title">Leadership</h2>
        <p class="section-subtitle2">Our team leads the company with strategic vision, proven experience, and a strong commitment to innovation and excellence. Discover the people who inspire our growth and shape our future</p>
        
        <div class="leadership-container">
            <div class="leadership-grid">
                <!-- First row with 2 centered cards -->
                <div class="leadership-first-row">
                    <div class="leadership-card">
                        <img src="/img/Acrisure Bianco 2.webp" alt="Acrisure Italia" class="leadership-logo">
                        <h3 class="leadership-name">Jason Howard</h3>
                        <p class="leadership-desc">Chairman</p>
                    </div>
                    
                    <div class="leadership-card">
                        <img src="/img/Acrisure Bianco 2.webp" alt="Acrisure Italia" class="leadership-logo">
                        <h3 class="leadership-name">Stefano Sardara</h3>
                        <p class="leadership-desc">Chief Executive Officer</p>
                    </div>
                </div>

                <!-- Second row with 1 centered card (same size as the first two) -->
                <div class="leadership-first-row">
                    <div class="leadership-card">
                        <img src="/img/Acrisure Bianco 2.webp" alt="Acrisure Italia" class="leadership-logo">
                        <h3 class="leadership-name">Giovanni Dallavalle</h3>
                        <p class="leadership-desc">Chief Financial Officer</p>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
    </section>

    <!-- _______________________________________________________________________________________________________________________________________________________ -->

    <!-- NEWS -->
    <section id="news" class="section news-section">
        <br><br><br>
        <h2 class="section-title">News & Updates</h2>
        <p class="section-subtitle" style="color: var(--light);">Discover the latest news and updates from our group</p>
        
        <div class="news-wrapper">
            <button class="news-nav prev" aria-label="Previous news">
                <i class="fas fa-chevron-left"></i>
            </button>
            
            <div class="news-container">
                <div class="news-card" data-index="0" onclick="window.location.href='#'">
                    <div class="news-image">
                        <img src="/img/news1.jpg" alt="New partnership in the agricultural sector">
                    </div>
                    <div class="news-content">
                        <div class="news-date">March 15, 2024</div>
                        <h3>New partnership in the agricultural sector</h3>
                        <p>Acrisure Agricolture announces a strategic collaboration with the leading national agricultural consortium to offer even more advantageous policies.</p>
                    </div>
                </div>
                
                <div class="news-card" data-index="1" onclick="window.location.href='#'">
                    <div class="news-image">
                        <img src="/img/news2.jpg" alt="Insurance Innovation Award 2024">
                    </div>
                    <div class="news-content">
                        <div class="news-date">February 28, 2024</div>
                        <h3>Insurance Innovation Award 2024</h3>
                        <p>Acrisure S.r.l. wins the prestigious award for its advanced digital risk management platform.</p>
                    </div>
                </div>
                
                <div class="news-card" data-index="2" onclick="window.location.href='#'">
                    <div class="news-image">
                        <img src="/img/news3.jpg" alt="Expansion of the Italian network">
                    </div>
                    <div class="news-content">
                        <div class="news-date">January 10, 2024</div>
                        <h3>Expansion of the Italian network</h3>
                        <p>Opening of the new Turin office, with a team specialized in insurance for the automotive sector.</p>
                    </div>
                </div>
                
                <div class="news-card" data-index="3" onclick="window.location.href='#'">
                    <div class="news-image">
                        <img src="/img/news4.jpg" alt="New welfare service">
                    </div>
                    <div class="news-content">
                        <div class="news-date">December 5, 2023</div>
                        <h3>New welfare service</h3>
                        <p>Launch of the new benefits package for client companies' employees, with customizable solutions.</p>
                    </div>
                </div>
                
                <div class="news-card" data-index="4" onclick="window.location.href='#'">
                    <div class="news-image">
                        <img src="/img/news5.jpg" alt="Annual conference">
                    </div>
                    <div class="news-content">
                        <div class="news-date">November 20, 2023</div>
                        <h3>Annual conference</h3>
                        <p>Success for the "Innovation and Insurance" conference organized by Acrisure S.r.l. in Milan.</p>
                    </div>
                </div>
            </div>
            
            <button class="news-nav next" aria-label="Next news">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
        
        <div class="news-cta">
            <a href="news/newsAcrisure.php" class="btn btn-secondary">View all news</a>
        </div>
        <br><br><br>
    </section>

    <!-- OUR GROUP _____________________________________________________________________________________________________________________ -->

    <section id="gruppo" class="section gruppo">
        <h2 class="section-title">Our Group</h2>
        <p style="text-align: center; max-width: 800px; margin: 0 auto 2rem;">Acrisure represents a network of specialized companies operating in various areas of the insurance sector, offering integrated solutions and specific expertise.</p>
        
        <div class="aziende-container">
            <div class="aziende-grid">
                <div class="azienda-card">
                    <div class="azienda-card-content">
                        <img src="/img/Acrisure Italia.jpg" alt="Acrisure Italia" class="azienda-logo">
                        <h3 class="azienda-nome">Acrisure Italia S.p.A.</h3>
                        <p class="azienda-desc">Insurance brokerage company operating at national and international level</p>
                        <div class="azienda-link-container">
                            <a href="/eng/italia-eng.php" class="azienda-link">Learn more <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="azienda-card">
                    <div class="azienda-card-content">
                        <img src="/img/Acrisure Services.jpg" alt="Acrisure Italia" class="azienda-logo">
                        <h3 class="azienda-nome">Acrisure Services S.r.l.</h3>
                        <p class="azienda-desc">Specialized in operational and management activities of companies, integrating skills and interconnections between multiple service areas</p>
                        <div class="azienda-link-container">
                            <a href="/eng/services-eng.php" class="azienda-link">Learn more <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="azienda-card">
                    <div class="azienda-card-content">
                        <img src="/img/Acrisure Re Italia.jpg" alt="Acrisure Italia" class="azienda-logo">
                        <h3 class="azienda-nome">Acrisure Re S.r.l.</h3>
                        <p class="azienda-desc">Leader in the reinsurance sector, with deep expertise in risk and capital management</p>
                        <div class="azienda-link-container">
                            <a href="/eng/re-eng.php" class="azienda-link">Learn more <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                                
                <div class="azienda-card">
                    <div class="azienda-card-content">
                        <img src="/img/ACRISURE AGRICOLTURE.jpg" alt="Acrisure Italia" class="azienda-logo">
                        <h3 class="azienda-nome">Acrisure Agricolture S.r.l.</h3>
                        <p class="azienda-desc">Insurance broker expert in policies for the protection of agricultural businesses</p>
                        <div class="azienda-link-container">
                            <a href="/eng/agricolture-eng.php" class="azienda-link">Learn more <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="azienda-card">
                    <div class="azienda-card-content">
                        <img src="/img/ACRISURE AGRISERVICES.jpg" alt="Acrisure Italia" class="azienda-logo">
                        <h3 class="azienda-nome">Acrisure Agriservices S.r.l.</h3>
                        <p class="azienda-desc">Company specialized in insurance of risks related to the agricultural sector</p>
                        <div class="azienda-link-container">
                            <a href="/eng/agricolture-eng.php" class="azienda-link">Learn more <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="azienda-card">
                    <div class="azienda-card-content">
                        <img src="/img/New Alta provvisorio.webp" alt="Acrisure Italia" class="azienda-logo">
                        <h3 class="azienda-nome">Alta Broker & Partners S.r.l.</h3>
                        <p class="azienda-desc">Broker specialized in retail policies suitable for all your needs</p>
                        <div class="azienda-link-container">
                            <a href="/eng/altabroker-eng.php" class="azienda-link">Learn more <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- QUOTE _____________________________________________________________________________________________________________________________________ -->

    <section id="home" class="hero2">
        <div class="hero-content">
            <h1>"Only those who dare to fail greatly can ever achieve greatly"</h1><br>
            <p>~ Robert F. Kennedy</p>
        </div>
    </section>

<!-- ________________________________________________________________________________________________________________________________________________ -->

    <!-- FOOTER -->
    <footer>
        <div class="footer-content">
            <div class="footer-column">
                <h3><i class="fas fa-building"></i>Headquarters</h3>
                <ul class="footer-links">
                    <li><i class="fas fa-file-contract"></i>Acrisure S.r.l.</li>
                    <li><i class="fas fa-map-marker-alt"></i>3 Giuseppe Mazzini Street - 07100 Sassari</li><br>
                    <li><img src="/img/AcrisureLOGO.png" class="logo-footer" alt="Acrisure Logo"></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3><i class="fas fa-map-marked-alt"></i>Italian Offices</h3>
                <ul class="footer-links">
                    <li><i class="fas fa-city"></i> <strong>Sassari (SS)</strong><br>3 Giuseppe Mazzini Street - 07100</li>
                    <li><i class="fas fa-city"></i> <strong>Milan (MI)</strong><br>6 Santa Maria Segreta Street - 20123</li>
                </ul>
            </div>
            
            <div class="footer-column">
                <h3><i class="fas fa-headset"></i>Contacts</h3>
                <ul class="footer-links">
                    <li><i class="fas fa-phone-alt"></i> Administration: +39 079 2016047</li>
                    <li><i class="fas fa-phone-volume"></i> Customer Care: +39 079 2853063</li>
                    <li><i class="fas fa-envelope"></i> <a href="mailto:info@acrisure.it"> info@acrisure.it</a></li>
                    <li><i class="fas fa-envelope"></i> <a href="mailto:acrisure@legalmail.it"> acrisure@legalmail.it</a></li>
                </ul>
                
                <div class="social-links">
                    <a href="https://it.linkedin.com/company/acrisureitalia" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                    <a href="https://www.instagram.com/acrisureitalia/" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            
            <div class="footer-column">
                <h3><i class="fas fa-clock"></i>Office Hours</h3>
                <ul class="footer-links">
                    <li><i class="far fa-clock"></i> <strong>Mon-Fri</strong>: 9:00 AM - 6:00 PM</li>
                    <li><i class="fas fa-door-closed"></i> <strong>Sat-Sun</strong>: Closed</li>
                </ul>
                
                <div class="legal-links">
                    <a href="/eng/policy-eng/policyAcrisure-eng.php">Privacy Policy</a>
                    <a href="/eng/cookies-eng/cookiesAcrisure-eng.php">Cookie Policy</a>
                    <a href="/eng/legal-eng/legalAcrisure-eng.php">Legal & Compliance</a>
                </div>
            </div>
        </div>
        
        <br>
        <div class="footer-legal-notice">
            <p>Acrisure S.r.l. - Share capital €10,000.00 fully paid up <br>
            Company belonging to the Acrisure VAT Group VAT number 13147890969<br>
            Tax Code and registration number in the Sassari Company Register no.11635300962 - REA SS-222619 </p>
        </div>
    </footer>

    <!-- Cookie banner -->
    <div id="cookie-banner" class="cookie-banner">
        <p>We use cookies to improve your experience. <a href="/eng/cookies-eng/cookiesAcrisure-eng.php">More information</a></p>
        <button id="accept-cookies" class="btn">Accept</button>
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
        
        // Gestione avanzata del form di contatto
        const contactForm = document.getElementById('contactForm');
        const formMessage = document.getElementById('formMessage');
        
        if (contactForm) {
            // Resetta gli errori quando l'utente inizia a digitare
            contactForm.querySelectorAll('.form-control').forEach(input => {
                input.addEventListener('input', function() {
                    if (this.value.trim() !== '') {
                        this.classList.remove('error');
                    }
                });
                
                // Solo per email e telefono, gestisci il blur diversamente
                if (input.type === 'email' || input.type === 'tel') {
                    input.addEventListener('blur', function() {
                        // Non mostrare errori finché non si tenta l'invio
                        if (!contactForm.dataset.submitted) return;
                        
                        if (input.type === 'email' && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(this.value)) {
                            this.classList.add('error');
                        } else if (input.type === 'tel' && this.value && !/^[+\d\s\-]{10,15}$/.test(this.value)) {
                            this.classList.add('error');
                        }
                    });
                }
            });
            
            contactForm.addEventListener('submit', async function(e) {
                e.preventDefault();
                contactForm.dataset.submitted = 'true';
                
                let isValid = true;
                const requiredFields = this.querySelectorAll('[required]');
                
                // Validazione campi obbligatori
                requiredFields.forEach(field => {
                    if (field.value.trim() === '') {
                        field.classList.add('error');
                        isValid = false;
                    }
                });
                
                // Validazione email specifica
                const email = this.querySelector('input[type="email"]');
                if (email && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)) {
                    email.classList.add('error');
                    isValid = false;
                }
                
                // Validazione telefono
                const phone = this.querySelector('input[type="tel"]');
                if (phone && phone.value && !/^[+\d\s\-]{10,15}$/.test(phone.value)) {
                    phone.classList.add('error');
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
                    
                    formMessage.textContent = 'Grazie per il tuo messaggio! Ti contatteremo al più presto.';
                    formMessage.classList.remove('error');
                    formMessage.classList.add('success');
                    formMessage.style.display = 'block';
                    
                    contactForm.reset();
                    delete contactForm.dataset.submitted;
                    
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
        
        // Animazione numeri nella sezione Chi Siamo - VERSIONE CORRETTA
        function animateStats() {
            const statNumbers = document.querySelectorAll('.stat-number');
            
            statNumbers.forEach(stat => {
                const dataValue = stat.getAttribute('data-count');
                let target, prefix = '', suffix = '';
                
                // Gestione dei valori con prefissi (come $) e suffissi
                if (dataValue.startsWith('$')) {
                    // Per i valori che iniziano con $ (es. "$4,8B")
                    prefix = '$';
                    const cleanValue = dataValue.substring(1);
                    
                    if (cleanValue.includes('B')) {
                        // Per i miliardi
                        target = parseFloat(cleanValue.replace('B', '').replace(',', '.')) * 1000000000;
                        suffix = 'B';
                    } else if (cleanValue.includes('+')) {
                        // Per i valori con il segno "+"
                        target = parseInt(cleanValue.replace('+', '').replace(',', ''));
                        suffix = '+';
                    } else if (cleanValue.includes(',')) {
                        // Per i valori con separatore delle migliaia
                        target = parseInt(cleanValue.replace(',', ''));
                    } else {
                        // Per i valori normali
                        target = parseInt(cleanValue);
                    }
                } else if (dataValue.includes('B')) {
                    // Per i miliardi (es. "4,8B" -> 4.8 miliardi)
                    target = parseFloat(dataValue.replace('B', '').replace(',', '.')) * 1000000000;
                    suffix = 'B';
                } else if (dataValue.includes('+')) {
                    // Per i valori con il segno "+" (es. "+19,000" -> 19000)
                    prefix = dataValue.includes('+') ? '+' : '';
                    target = parseInt(dataValue.replace('+', '').replace(',', ''));
                } else if (dataValue.includes(',')) {
                    // Per i valori con separatore delle migliaia (es. "19,000" -> 19000)
                    target = parseInt(dataValue.replace(',', ''));
                } else {
                    // Per i valori normali
                    target = parseInt(dataValue);
                }
                
                const duration = 2000; // 2 secondi
                const step = target / (duration / 16); // 60fps
                
                let current = 0;
                const increment = () => {
                    current += step;
                    if (current < target) {
                        // Formatta il numero in base al tipo
                        if (suffix === 'B') {
                            // Per i miliardi, mostra un decimale
                            stat.textContent = prefix + (current / 1000000000).toFixed(1).replace('.', ',') + suffix;
                        } else if (prefix === '+') {
                            // Per i valori con "+", formatta con separatore delle migliaia
                            stat.textContent = prefix + Math.floor(current).toLocaleString('it-IT');
                        } else {
                            // Per i valori normali
                            stat.textContent = prefix + Math.floor(current).toLocaleString('it-IT');
                        }
                        requestAnimationFrame(increment);
                    } else {
                        // Valore finale - manteniamo il formato originale
                        stat.textContent = dataValue;
                    }
                };
                
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting && !stat.classList.contains('animated')) {
                            stat.classList.add('animated');
                            increment();
                            observer.unobserve(stat);
                        }
                    });
                }, { threshold: 0.5 });
                
                observer.observe(stat);
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
        
        // Gestione newsletter
        const newsletterForm = document.querySelector('.newsletter-form');
        if (newsletterForm) {
            newsletterForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const emailInput = this.querySelector('input[type="email"]');
                
                if (emailInput.value && /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailInput.value)) {
                    alert('Grazie per esserti iscritto alla nostra newsletter!');
                    emailInput.value = '';
                } else {
                    emailInput.classList.add('error');
                }
            });
        }

        // News navigation - 3D Rotating Ticker
        const newsCards = document.querySelectorAll('.news-card');
        const newsPrevBtn = document.querySelector('.news-nav.prev');
        const newsNextBtn = document.querySelector('.news-nav.next');
        let currentIndex = 0;
        let autoRotateInterval;
        let isAutoRotating = true;
        let rotationSpeed = 1800; //1.8 secondi
        
        // Funzione per posizionare le card in base all'indice corrente
        function positionNewsCards() {
            const totalCards = newsCards.length;
            
            newsCards.forEach((card, index) => {
                // Calcola la posizione relativa rispetto alla card corrente
                let position = (index - currentIndex + totalCards) % totalCards;
                
                // Reset di tutte le classi
                card.classList.remove('active', 'prev', 'next', 'far-prev', 'far-next', 'hidden-left', 'hidden-right');
                
                // Assegna le classi in base alla posizione
                if (position === 0) {
                    card.classList.add('active');
                } else if (position === 1) {
                    card.classList.add('next');
                } else if (position === 2) {
                    card.classList.add('far-next');
                } else if (position === totalCards - 1) {
                    card.classList.add('prev');
                } else if (position === totalCards - 2) {
                    card.classList.add('far-prev');
                } else {
                    if (position < totalCards / 2) {
                        card.classList.add('hidden-right');
                    } else {
                        card.classList.add('hidden-left');
                    }
                }
            });
            
            // Aggiorna lo stato dei pulsanti di navigazione
            newsPrevBtn.classList.remove('disabled');
            newsNextBtn.classList.remove('disabled');
        }
        
        // Funzione per ruotare le news automaticamente
        function rotateNews() {
            currentIndex = (currentIndex + 1) % newsCards.length;
            positionNewsCards();
        }
        
        // Avvia la rotazione automatica
        function startAutoRotation() {
            if (autoRotateInterval) clearInterval(autoRotateInterval);
            autoRotateInterval = setInterval(rotateNews, rotationSpeed);
            isAutoRotating = true;
        }
        
        // Ferma la rotazione automatica
        function stopAutoRotation() {
            clearInterval(autoRotateInterval);
            isAutoRotating = false;
        }
        
        // Ripristina la rotazione automatica dopo una pausa
        function resetAutoRotationTimer() {
            stopAutoRotation();
            setTimeout(() => {
                if (!isAutoRotating) {
                    startAutoRotation();
                }
            }, 7000); // 5 secondi di pausa dopo l'interazione
        }
        
        // Navigazione manuale
        newsPrevBtn.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + newsCards.length) % newsCards.length;
            positionNewsCards();
            resetAutoRotationTimer();
        });
        
        newsNextBtn.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % newsCards.length;
            positionNewsCards();
            resetAutoRotationTimer();
        });
        
        // Click su una card per portarla in primo piano
        newsCards.forEach(card => {
            card.addEventListener('click', function(e) {
                if (!this.classList.contains('active')) {
                    const cardIndex = parseInt(this.getAttribute('data-index'));
                    currentIndex = cardIndex;
                    positionNewsCards();
                    resetAutoRotationTimer();
                } else {
                    // Se la card è già attiva, reindirizza alla pagina della news
                    const link = this.getAttribute('onclick').match(/window\.location\.href='([^']+)'/);
                    if (link && link[1]) {
                        window.location.href = link[1];
                    }
                }
            });
        });
        
        // Inizializza le posizioni delle card
        positionNewsCards();
        
        // Avvia la rotazione automatica
        startAutoRotation();
        
        // Pausa la rotazione quando il mouse è sopra il contenitore
        document.querySelector('.news-wrapper').addEventListener('mouseenter', stopAutoRotation);
        document.querySelector('.news-wrapper').addEventListener('mouseleave', startAutoRotation);
        
        // Inizializzazione
        window.addEventListener('load', () => {
            checkSections();
            animateStats();
        });
        window.addEventListener('scroll', checkSections);
    </script>
</body>
</html>