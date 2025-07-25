<?php include('../includes/auth.php'); ?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acrisure Agricolture</title>
    <meta name="description" content="Acrisure Services offre servizi specializzati in attività operative e gestionali per le aziende, con competenze in risorse umane, legal e compliance, TPA e Customer Service.">
    <meta name="keywords" content="servizi assicurativi, gestione flotte, risorse umane, compliance, TPA, customer service, Acrisure">
    <link rel="canonical" href="https://www.acrisureservices.it" />
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
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/img/colture3.jpg');
            background-size: cover;
            background-position: top;
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
            color: var(--white);
            border-color: var(--white);
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
        .section-subtitle2 {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 3rem;
            font-size: 1.2rem;
            color: #fff;
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
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            margin-top: 2rem;
            max-width: 1200px;
            width: 100%;
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
            overflow: hidden;
        }
        
        .news-wrapper {
            position: relative;
            max-width: 1100px;
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
        
        /* Services Section */
        .services-wrapper {
            position: relative;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 5%;
        }
        
        .services-container {
            display: flex;
            gap: 2rem;
            overflow-x: auto;
            scroll-behavior: smooth;
            padding: 1rem 0;
            position: relative;
            scrollbar-width: none;
        }
        
        .services-container::-webkit-scrollbar {
            display: none;
        }
        
        .service-card {
            flex: 0 0 auto;
            width: 300px;
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 1px solid #eee;
            display: flex;
            flex-direction: column;
        }
        
        .service-card:hover {
            transform: scale(1.05);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
            border-color: var(--accent);
        }
        
        .service-image {
            height: 200px;
            overflow: hidden;
        }
        
        .service-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }
        
        .service-card:hover .service-image img {
            transform: scale(1.1);
        }
        
        .service-content {
            padding: 2rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        
        .service-content h3 {
            color: var(--secondary);
            margin-bottom: 1rem;
            font-size: 1.5rem;
            transition: color 0.3s;
        }
        
        .service-card:hover h3 {
            color: var(--accent);
        }
        
        .service-content p {
            color: #666;
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }
        
        .service-features {
            margin-bottom: 1.5rem;
            flex-grow: 1;
        }
        
        .service-features li {
            margin-bottom: 0.5rem;
            position: relative;
            padding-left: 1.5rem;
            color: #555;
            list-style-type: none;
        }
        
        .service-features li::before {
            content: '\f00c';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            color: var(--accent);
        }
        
        .service-link {
            display: inline-flex;
            align-items: center;
            color: var(--accent);
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s;
            margin-top: auto;
            justify-content: center;
            padding: 0.8rem;
            border-top: 1px solid #eee;
        }
        
        .service-link i {
            margin-left: 0.5rem;
            transition: transform 0.3s;
        }
        
        .service-link:hover {
            color: var(--primary);
        }
        
        .service-link:hover i {
            transform: translateX(5px);
        }
        
        /* Navigation arrows */
        .services-nav {
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
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: all 0.3s;
            z-index: 10;
            border: none;
            color: var(--accent);
            font-size: 1.2rem;
        }
        
        .services-nav:hover {
            background-color: var(--accent);
            color: white;
            transform: translateY(-50%) scale(1.1);
        }
        
        .services-nav.prev {
            left: 0;
        }
        
        .services-nav.next {
            right: 0;
        }
        
        .services-nav.disabled {
            opacity: 0.3;
            cursor: not-allowed;
        }
        
        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.85);
            z-index: 2000;
            overflow-y: auto;
            padding: 20px;
            box-sizing: border-box;
            overscroll-behavior: contain;
        }
        
        .modal-content {
            background-color: white;
            margin: 5% auto;
            border-radius: 10px;
            max-width: 900px;
            position: relative;
            animation: modalFadeIn 0.4s ease-out;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }
        
        .close-modal {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s;
            z-index: 10;
            border: none;
            color: var(--primary);
            font-size: 1.5rem;
            font-weight: bold;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }
        
        .close-modal:hover {
            background-color: var(--accent);
            color: white;
            transform: rotate(90deg);
        }
        
        /* Header modale con immagine */
        .modal-header {
            position: relative;
            height: 250px;
            overflow: hidden;
        }
        
        .modal-header-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.7);
        }

        .modal-header-image2 {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: bottom;
            filter: brightness(0.7);
        }
        
        .modal-header-content {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 30px;
            background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, transparent 100%);
            color: white;
        }
        
        .modal-title {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
            color: white;
            text-shadow: 0 2px 5px rgba(0,0,0,0.5);
        }
        
        .modal-subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
            color: var(--light);
            text-shadow: 0 1px 3px rgba(0,0,0,0.5);
            font-weight: 500;
        }
        
        /* Corpo modale */
        .modal-body {
            padding: 30px;
        }
        
        /* Sezione features */
        .modal-features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }
        
        .modal-feature-card {
            background-color: var(--light);
            border-radius: 8px;
            padding: 1.5rem;
            border-left: 4px solid var(--accent);
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .modal-feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        
        .modal-feature-card h3 {
            color: var(--secondary);
            margin-bottom: 1rem;
            font-size: 1.3rem;
            display: flex;
            align-items: center;
        }
        
        .modal-feature-card h3 i {
            margin-right: 10px;
            color: var(--accent);
        }
        
        .feature-description {
            color: #555;
            line-height: 1.6;
            margin-bottom: 1rem;
        }
        
        .feature-list {
            list-style: none;
            padding-left: 1.5rem;
            margin-top: 1rem;
        }
        
        .feature-list li {
            position: relative;
            margin-bottom: 0.5rem;
            color: #555;
        }
        
        .feature-list li::before {
            content: '\f054';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: -1.5rem;
            color: var(--accent);
            font-size: 0.8rem;
        }

        .no-scroll {
            position: fixed;
            width: 100%;
            overflow-y: scroll;
        }
        
        /* CTA Section */
        .cta-section {
            text-align: center;
            background-color: var(--primary);
            color: white;
            padding: 8rem 5%;
            position: relative;
            overflow: hidden;
        }
        
        .cta-section .section-title {
            color: white;
            position: relative;
            z-index: 1;
        }
        
        .cta-section .section-title::after {
            background-color: white;
        }
        
        .cta-content {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }
        
        .cta-content p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }
        
        .cta-section .btn {
            background-color: white;
            color: var(--primary);
            border-color: white;
            font-size: 1.1rem;
            padding: 1rem 2rem;
            position: relative;
            z-index: 1;
        }
        
        .cta-section .btn:hover {
            background-color: transparent;
            color: white;
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

        .footer-legal-notice {
            text-align: center;
            padding: 1.5rem 5%;
            border-top: 1px solid rgba(0, 0, 0, 0.1);
            /* border-bottom: 1px solid rgba(0, 0, 0, 0.1); */
            margin: 0 auto;
            max-width: 1400px;
        }

        .footer-legal-notice p {
            font-size: 0.85rem;
            color: var(--secondary);
            line-height: 1.5;
            margin: 0;
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
        
        @keyframes modalFadeIn {
            from {
                opacity: 0;
                transform: translateY(-30px);
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
            
            .leadership-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .leadership-card:nth-child(1),
            .leadership-card:nth-child(2) {
                grid-column: span 1;
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
            
            .services-container,
            .news-container {
                flex-wrap: wrap;
                overflow-x: visible;
                justify-content: center;
            }
            
            .service-card,
            .news-card {
                width: 100%;
                max-width: 350px;
            }
            
            .services-nav,
            .news-nav {
                display: none;
            }

            .modal-content {
                margin: 10% auto;
                padding: 20px;
                width: 90%;
            }
            
            .modal-header {
                height: 200px;
            }
            
            .modal-title {
                font-size: 2rem;
            }
            
            .modal-subtitle {
                font-size: 1rem;
            }
            
            .modal-body {
                padding: 20px;
            }
            
            .modal-features {
                grid-template-columns: 1fr;
            }
            
            .close-modal {
                width: 35px;
                height: 35px;
                font-size: 1.2rem;
                top: 10px;
                right: 10px;
            }

            /* News ticker mobile */
            .news-wrapper {
                height: auto;
                perspective: none;
            }

            .news-container {
                flex-direction: column;
                transform-style: flat;
                gap: 2rem;
            }

            .news-card {
                position: relative;
                transform: none !important;
                opacity: 1 !important;
                filter: none !important;
                width: 100%;
                max-width: 350px;
                margin: 0 auto;
                pointer-events: auto;
            }

            /* Mobile language switcher */
            .language-switcher {
                margin-left: 0;
                justify-content: center;
                padding: 1rem 0;
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
            
            .leadership-grid {
                grid-template-columns: 1fr;
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

            .modal-content {
                margin: 15% auto;
                padding: 15px;
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
    </style>
</head>
<body>
    <header id="header">
        <div class="navbar">
            <div class="navbar-brand">
                <a href="#home">
                <img src="/img/ACRISURE AGRICOLTURE.jpg" class="logo" alt=""></li>
                </a>
                <div class="menu-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <nav>
                <ul>
                    <li><a href="#news" class="nav-link">News</a></li>
                    <li><a href="#gruppo" class="nav-link">Leadership</a></li>
                    <li><a href="#services" class="nav-link">Services</a></li>
                    <li><a href="/eng/index-eng.php#gruppo" class="nav-link">Our Group</a></li>
                    <li><a href="/eng/lavora-con-noi-eng/lcn-acrisure-eng.php" class="nav-link">Work with us</a></li>
                </ul>
            </nav>
            <nav class="language-switcher">
                <ul>
                    <li><a href="/agricolture.php" class="language-btn">IT</a></li>
                    <li><a onclick="window.location.href='#'" class="language-btn active">EN</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="home" class="hero">
        <div class="hero-content">
            <h1>Acrisure Agricolture Ltd.</h1>
            <p>Specialized consultancy for the agricultural sector to guide our clients to the best coverage to guarantee their business results. Check in statute</p>
            <a href="#contatti" class="btn btn-secondary">Contact us</a>
        </div>
    </section>

    <!-- News section modified with 3D Rotating Ticker -->
    <section id="news" class="section news-section">
        <h2 class="section-title">News & Updates</h2>
        <p class="section-subtitle">Discover the latest news and updates from our group</p>
        
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
                        <p>Acrisure Agricolture announces a strategic collaboration with the main national agricultural consortium to offer even more advantageous policies.</p>
                    </div>
                </div>
                
                <div class="news-card" data-index="1" onclick="window.location.href='#'">
                    <div class="news-image">
                        <img src="/img/news2.jpg" alt="Insurance Innovation Award 2024">
                    </div>
                    <div class="news-content">
                        <div class="news-date">February 28, 2024</div>
                        <h3>Insurance Innovation Award 2024</h3>
                        <p>Acrisure Italy wins the prestigious award for its advanced digital risk management platform.</p>
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
                        <p>Launch of the new package of benefits for client companies' employees, with customizable solutions.</p>
                    </div>
                </div>
                
                <div class="news-card" data-index="4" onclick="window.location.href='#'">
                    <div class="news-image">
                        <img src="/img/news5.jpg" alt="Annual conference">
                    </div>
                    <div class="news-content">
                        <div class="news-date">November 20, 2023</div>
                        <h3>Annual conference</h3>
                        <p>Success for the "Innovation and insurance" conference organized by Acrisure Italy in Milan.</p>
                    </div>
                </div>
            </div>
            
            <button class="news-nav next" aria-label="Next news">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
        
        <div class="news-cta">
            <a href="news/newsAgricolture.php" class="btn">View all news</a>
        </div>
    </section>

    <!-- ========== LEADERSHIP SECTION ========== -->
    <section id="gruppo" class="section leadership">
        <br>
        <h2 class="section-title">Leadership</h2>
        <p class="section-subtitle2">Our team leads the company with strategic vision, consolidated experience and a strong commitment to innovation and excellence. Discover the people who inspire our growth and shape our future</p>
        
        <div class="leadership-container">
            <div class="leadership-grid">
                <!-- First row with 2 centered cards -->
                <div class="leadership-first-row">
                    <div class="leadership-card">
                        <img src="/img/Acrisure Services.jpg" alt="Acrisure Italy" class="leadership-logo">
                        <h3 class="leadership-name">Maurizio Capiello</h3>
                        <p class="leadership-desc">Chief Executive Officer</p>
                    </div>

                    <div class="leadership-card">
                        <img src="/img/Acrisure Services.jpg" alt="Acrisure Italy" class="leadership-logo">
                        <h3 class="leadership-name">Andrea Maffei</h3>
                        <p class="leadership-desc">Chairman</p>
                    </div>
                </div><br>
            </div>
        </div>
        <br><br><br>
    </section>

    <!-- Services Section Modified -->
    <section id="services" class="section">
        <h2 class="section-title">Our Services</h2>
        <p class="section-subtitle">Specialized solutions for the agricultural sector, designed to protect and enhance your business</p>
    
        <div class="services-wrapper">
            <div class="services-container" style="justify-content: center; gap: 3rem;">
                <div class="service-card" style="width: 450px; height: 450px;">
                    <div class="service-image" style="height: 250px;">
                        <img src="/img/Consulenza.jpg" alt="Agricultural Consulting">
                    </div>
                    <div class="service-content" style="padding: 2rem; text-align: center;">
                        <h3 style="font-size: 1.7rem; margin-bottom: 1.5rem;">CONSULTING</h3>
                        <div style="display: flex; justify-content: center;">
                            <div style="width: 60px; height: 4px; background-color: var(--accent); margin-bottom: 1.5rem;"></div>
                        </div>
                        <p style="color: #555; line-height: 1.6; font-size: 1.1rem;">
                            Specialized consulting services to optimize insurance coverage and manage risks in the agricultural sector
                        </p>
                    </div>
                </div>

                <div class="service-card" style="width: 450px; height: 450px;">
                    <div class="service-image" style="height: 250px;">
                        <img src="/img/Sottoscrizione di polizze.jpg" alt="Policy Subscription">
                    </div>
                    <div class="service-content" style="padding: 2rem; text-align: center;">
                        <h3 style="font-size: 1.7rem; margin-bottom: 1.5rem;">POLICY SUBSCRIPTION</h3>
                        <div style="display: flex; justify-content: center;">
                            <div style="width: 60px; height: 4px; background-color: var(--accent); margin-bottom: 1.5rem;"></div>
                        </div>
                        <p style="color: #555; line-height: 1.6; font-size: 1.1rem;">
                            Customized insurance solutions to protect activities and investments in the agricultural sector
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contatti" class="section">
        <div class="contact-form">
            <div class="form-header">
                <h3>Request information</h3>
                <p>Fill out the form below and we will get back to you as soon as possible</p>
            </div>
            
            <div id="formMessage" class="form-message"></div>
            
            <form id="contactForm">
                <div class="form-row">
                    <div class="form-group">
                        <label for="name">Full Name <span class="required">*</span></label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="company">Company</label>
                        <input type="text" id="company" name="company" class="form-control">
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="email">Email <span class="required">*</span></label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="tel" id="phone" name="phone" class="form-control">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="service">Service of interest <span class="required">*</span></label>
                    <select id="service" name="service" class="form-control" required>
                        <option value="">-- Select a service --</option>
                        <option value="consulenza">Consulting</option>
                        <option value="sottoscrizione_di_polizze">Policy subscription</option>
                        <option value="altro">Other</option>
                    </select>
                </div><br>
                
                <div class="form-group">
                    <label for="message">Message <span class="required">*</span></label>
                    <textarea id="message" name="message" rows="5" class="form-control" required></textarea>
                </div>
                
                <div class="form-footer">
                    <div class="form-note">
                        <p><span class="required">*</span> Required fields</p>
                        <p>Read our <a href="/policy/policyAgricolture.php">Privacy Policy</a></p>
                    </div>
                    <button type="submit" class="btn">Send Request</button>
                </div>
            </form>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="footer-content">
            <div class="footer-column">
                <h3><i class="fas fa-building"></i>Legal Headquarters</h3>
                <ul class="footer-links">
                    <li><i class="fas fa-file-contract"></i>Acrisure Agricolture Ltd.</li>
                    <!-- <li><i class="fas fa-id-card"></i> VAT: 13147890969</li> -->
                    <li><i class="fas fa-map-marker-alt"></i>6 Lovanio Street - 00198 Rome</li><br>
                    <li><img src="/img/ACRISURE AGRICOLTURE.jpg" class="logo-footer" alt="Acrisure Agricolture Logo"></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3><i class="fas fa-map-marked-alt"></i>Italian Offices</h3>
                <ul class="footer-links">
                    <li><i class="fas fa-city"></i> <strong>Rome (RM)</strong><br>6 Lovanio Street - 00198</li>
                    <!-- <li><i class="fas fa-city"></i> <strong>Milan (MI)</strong><br>6 Santa Maria Segreta Street - 20123</li>
                    <li><i class="fas fa-city"></i> <strong>Turin (TO)</strong><br>15 San Francesco Da Paola Street - 10123</li>
                    <li><i class="fas fa-city"></i> <strong>Genoa (GE)</strong><br>9 Piazza della Vittoria - 16121</li>
                    <li><i class="fas fa-city"></i> <strong>Cles (TN)</strong><br>44 Piazza Granda - 38023</li> -->
                </ul>
            </div>
            
            <div class="footer-column">
                <h3><i class="fas fa-headset"></i>Contacts</h3>
                <ul class="footer-links">
                    <li><i class="fas fa-phone-alt"></i>Administration: +39 06 98968206</li>
                    <!-- <li><i class="fas fa-phone-volume"></i> Customer Care: +39 079 2853063</li> -->
                    <!-- <li><i class="fas fa-envelope"></i> <a href="mailto:info@acrisure.it">info@acrisure.it</a></li> -->
                    <li><i class="fas fa-file-alt"></i> <a href="mailto:premium@pec.premiumbroker.it">premium@pec.premiumbroker.it</a></li>
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
                    <a href="/policy/policyAgricolture.php">Privacy Policy</a>
                    <a href="/cookies/cookiesAgricolture.php">Cookie Policy</a>
                    <a href="/legal&comp/legalAgricolture.php">Legal & Compliance</a>
                </div>
            </div>
        </div>
        
        <br>
        <!-- Add this new section above the footer-bottom -->
        <div class="footer-legal-notice">
            <p>Acrisure Agricolture Ltd. - Single-member company subject to the direction and coordination of Acrisure Ltd.<br>
            Share capital €150,000.00 fully paid up - RUI: B000243223. Company participating in the Acrisure Group VAT 13147890969<br>
            Tax Code and registration number in the Rome Companies Register: 08359221002. REA RM- 1089539</p>
        </div>
    </footer>


    <!-- Cookie banner -->
    <div id="cookie-banner" class="cookie-banner">
        <p>We use cookies to improve your experience. <a href="/cookies/cookiesAgricolture.php">More information</a></p>
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
        
        // Gestione modali
        const modals = document.querySelectorAll('.modal');
        const modalLinks = document.querySelectorAll('.discover-more');
        const closeButtons = document.querySelectorAll('.close-modal');
        
        // Apri modale quando si clicca su "Scopri di più"
        modalLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const modalId = this.getAttribute('data-modal') + '-modal';
                const modal = document.getElementById(modalId);
                if (modal) {
                    // Salva la posizione corrente dello scroll
                    const scrollPosition = window.pageYOffset || document.documentElement.scrollTop;
                    document.body.style.top = `-${scrollPosition}px`;
                    document.body.classList.add('no-scroll');
                    
                    modal.style.display = 'block';
                    modal.dataset.scrollPosition = scrollPosition;
                }
            });
        });
        
        // Chiudi modale quando si clicca sulla X
        closeButtons.forEach(button => {
            button.addEventListener('click', function() {
                const modal = this.closest('.modal');
                modal.style.display = 'none';
                
                // Ripristina la posizione dello scroll
                const scrollPosition = modal.dataset.scrollPosition;
                document.body.classList.remove('no-scroll');
                window.scrollTo(0, scrollPosition);
                document.body.style.top = '';
            });
        });
        
        // Chiudi modale quando si clicca fuori dal contenuto
        modals.forEach(modal => {
            modal.addEventListener('click', function(e) {
                if (e.target === this) {
                    // Ripristina la posizione dello scroll
                    const scrollPosition = this.dataset.scrollPosition;
                    document.body.classList.remove('no-scroll');
                    window.scrollTo(0, scrollPosition);
                    document.body.style.top = '';
                    
                    this.style.display = 'none';
                }
            });
        });
        
        // Servizi navigation - Smooth scroll with single click to end/start
        const servicesContainer = document.querySelector('.services-container');
        const prevBtn = document.querySelector('.services-nav.prev');
        const nextBtn = document.querySelector('.services-nav.next');

        if (servicesContainer && prevBtn && nextBtn) {
            const cardWidth = 320; // Larghezza di ogni card + gap
            const cardCount = document.querySelectorAll('.service-card').length;
            let scrollPosition = 0;
    
            function updateNavButtons() {
                prevBtn.classList.toggle('disabled', scrollPosition === 0);
                nextBtn.classList.toggle('disabled', 
                scrollPosition >= servicesContainer.scrollWidth - servicesContainer.clientWidth);
            }
    
            prevBtn.addEventListener('click', () => {
                if (scrollPosition === 0) {
                    // Se siamo all'inizio, vai alla fine
                    scrollPosition = servicesContainer.scrollWidth - servicesContainer.clientWidth;
                } else {
                    // Altrimenti vai all'inizio o alla card precedente
                    scrollPosition = Math.max(0, scrollPosition - (cardWidth * 3));
                }
        
                servicesContainer.scrollTo({
                    left: scrollPosition,
                    behavior: 'smooth'
                });
            });
    
            nextBtn.addEventListener('click', () => {
                const maxScroll = servicesContainer.scrollWidth - servicesContainer.clientWidth;
        
                if (scrollPosition >= maxScroll - 10) { // 10px di tolleranza
                    // Se siamo alla fine, torna all'inizio
                    scrollPosition = 0;
                } else {
                    // Altrimenti vai alla fine o alla prossima card
                    scrollPosition = Math.min(maxScroll, scrollPosition + (cardWidth * 3));
                }
        
                servicesContainer.scrollTo({
                    left: scrollPosition,
                    behavior: 'smooth'
                });
            });
    
            servicesContainer.addEventListener('scroll', () => {
                scrollPosition = servicesContainer.scrollLeft;
                updateNavButtons();
            });
    
            updateNavButtons();
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
                    // window.location.href = '/en/services.html';
                } else {
                    // Cambia a italiano
                    console.log('Cambio a italiano');
                    // window.location.href = '/services.html';
                }
            });
        });
        
        // Inizializzazione
        window.addEventListener('load', () => {
            checkSections();
        });
        window.addEventListener('scroll', checkSections);
    </script>
</body>
</html>