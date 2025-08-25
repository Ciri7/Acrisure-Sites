<?php include('../includes/auth.php'); ?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acrisure - Lavora Con Noi</title>
    <meta name="description" content="Unisciti al team di Acrisure. Scopri le opportunità di carriera e invia la tua candidatura.">
    <link rel="canonical" href="https://www.acrisure.it/lavora-con-noi" />
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

        /* Benefits Section - MODIFICATA */
        .benefits-section {
            background-color: transparent;
        }
        
        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }
        
        .benefit-card {
            background-color: white;
            border-radius: 10px;
            padding: 2.5rem;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s;
            display: flex;
            flex-direction: column;
            height: 450px; /* Altezza aumentata per i blocchi verticali */
        }
        
        .benefit-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        .benefit-icon {
            font-size: 3rem; /* Icone più grandi */
            color: var(--accent);
            margin-bottom: 2rem;
        }
        
        .benefit-title {
            color: var(--secondary);
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
        }
        
        .benefit-description {
            color: #666;
            line-height: 1.6;
            margin-bottom: 2rem;
            flex-grow: 1;
        }
        
        .benefit-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: var(--accent);
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s;
            padding: 1rem;
            border-top: 1px solid #eee;
            margin-top: auto;
        }
        
        .benefit-link i {
            margin-left: 0.5rem;
            transition: transform 0.3s;
        }
        
        .benefit-link:hover {
            color: var(--primary);
        }
        
        .benefit-link:hover i {
            transform: translateX(5px);
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

        /* MODAL STYLES - Aggiunti per i modali */
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
        
        .modal-body {
            padding: 30px;
        }
        
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
            margin-right: 12px;
            color: var(--accent);
        }

        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            white-space: nowrap; /* Aggiungi questa riga */
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
            
            .benefits-grid {
                grid-template-columns: repeat(2, 1fr);
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
            
            .benefits-grid {
                grid-template-columns: 1fr;
            }
            
            .benefit-card {
                height: auto;
                min-height: 400px;
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
            
            .benefit-card {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <header id="header">
        <div class="navbar">
            <div class="navbar-brand">
                <a href="/index.php">
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
                    <li><a href="/index.php#chi-siamo" class="nav-link">Chi Siamo</a></li>
                    <li><a href="/index.php#news" class="nav-link">News</a></li>
                    <li><a href="/index.php#gruppo" class="nav-link">Il Nostro Gruppo</a></li>
                    <li><a href="#header" class="nav-link">Lavora Con Noi</a></li>
                </ul>
            </nav>
            <nav class="language-switcher">
                <ul>
                    <li><a onclick="window.location.href='#'" class="language-btn active">IT</a></li>
                    <li><a href="/eng/lavora-con-noi-eng/lcn-acrisure-eng.php" class="language-btn">EN</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>Lavora Con Noi</h1>
            <p>Unisciti al team di Acrisure e scopri le opportunità di carriera che ti aspettano.</p>
            <a href="#posizioni-aperte" class="btn">Scopri le posizioni aperte</a>
        </div>
    </section>

    <!-- SEZIONE LAVORARE IN ACRISURE (ex Benefit) -->
    <section id="lavorare-in-acrisure" class="section benefits-section">
        <h2 class="section-title">Lavorare In Acrisure</h2>
        <p class="section-subtitle">Scopri l'ambiente di lavoro unico che ti aspetta in Acrisure, dove valorizziamo le persone e promuoviamo un equilibrio perfetto tra professionalità e benessere.</p>
        
        <div class="benefits-grid">
            <!-- Team Building -->
            <div class="benefit-card">
                <div class="benefit-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3 class="benefit-title">Team Building</h3>
                <p class="benefit-description">Partecipa alle nostre attività di team building pensate per rafforzare lo spirito di squadra, migliorare la collaborazione e creare un ambiente di lavoro coeso e motivante.</p>
                <a href="#" class="benefit-link" onclick="openModal('modal-team-building')">Scopri di più <i class="fas fa-arrow-right"></i></a>
            </div>
            
            <!-- Sala Relax & Reset Zone -->
            <div class="benefit-card">
                <div class="benefit-icon">
                    <i class="fas fa-utensils"></i>
                </div>
                <h3 class="benefit-title">Sala Relax & Reset Zone</h3>
                <p class="benefit-description">Goditi i nostri spazi dedicati al relax e alla pausa pranzo. Un'area confortevole dove ricaricarti e condividere momenti informali con i colleghi.</p>
                <a href="#" class="benefit-link" onclick="openModal('modal-sala-relax')">Scopri di più <i class="fas fa-arrow-right"></i></a>
            </div>
            
            <!-- Eventi -->
            <div class="benefit-card">
                <div class="benefit-icon">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <h3 class="benefit-title">Eventi</h3>
                <p class="benefit-description">Prendi parte ai nostri eventi aziendali, feste e celebrazioni che rendono speciale il percorso lavorativo e creano ricordi indimenticabili insieme al team.</p>
                <a href="#" class="benefit-link" onclick="openModal('modal-eventi')">Scopri di più <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <!-- SEZIONE POSIZIONI APERTE -->
    <section id="posizioni-aperte" class="section careers-section">
        <h2 class="section-title">Posizioni Aperte</h2>
        <p class="section-subtitle">Scopri le opportunità di carriera disponibili nel nostro team. Scegli la posizione che fa per te e candidati subito.</p>
        
        <div class="careers-container">
            <!-- Posizione 1 -->
            <div class="career-card">
                <div class="career-header">
                    <h3 class="career-title">Consulente Assicurativo</h3>
                    <div class="career-location">
                        <i class="fas fa-map-marker-alt"></i> Milano
                    </div>
                </div>
                <div class="career-body">
                    <ul class="career-features">
                        <li>Contratto a tempo indeterminato</li>
                        <li>Formazione continua garantita</li>
                        <li>Pacchetto retributivo competitivo</li>
                        <li>Piano di crescita professionale</li>
                    </ul>
                    <a href="#application-form" class="career-link">Candidati ora <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <!-- Posizione 2 -->
            <div class="career-card">
                <div class="career-header">
                    <h3 class="career-title">Back Office Assicurativo</h3>
                    <div class="career-location">
                        <i class="fas fa-map-marker-alt"></i> Roma
                    </div>
                </div>
                <div class="career-body">
                    <ul class="career-features">
                        <li>Contratto a tempo indeterminato</li>
                        <li>Ambiente di lavoro dinamico</li>
                        <li>Orario flessibile</li>
                        <li>Welfare aziendale completo</li>
                    </ul>
                    <a href="#application-form" class="career-link">Candidati ora <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <!-- Posizione 3 -->
            <div class="career-card">
                <div class="career-header">
                    <h3 class="career-title">Account Manager</h3>
                    <div class="career-location">
                        <i class="fas fa-map-marker-alt"></i> Torino
                    </div>
                </div>
                <div class="career-body">
                    <ul class="career-features">
                        <li>Gestione portfolio clienti</li>
                        <li>Retribuzione variabile + fisso</li>
                        <li>Auto aziendale</li>
                        <li>Piano di sviluppo carriera</li>
                    </ul>
                    <a href="#application-form" class="career-link">Candidati ora <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- SEZIONE APPLICATION FORM -->
    <section id="application-form" class="section form-section">
        <h2 class="section-title">Invia la tua candidatura</h2>
        <p class="section-subtitle">Compila il form sottostante per candidarti alla posizione di tuo interesse. Ti contatteremo al più presto.</p>
        
        <form class="application-form" id="career-form" enctype="multipart/form-data">
            <div class="form-message error" id="form-error"></div>
            <div class="form-message success" id="form-success"></div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="first-name">Nome <span class="required">*</span></label>
                    <input type="text" id="first-name" name="first-name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="last-name">Cognome <span class="required">*</span></label>
                    <input type="text" id="last-name" name="last-name" class="form-control" required>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="email">Email <span class="required">*</span></label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="phone">Telefono <span class="required">*</span></label>
                    <input type="tel" id="phone" name="phone" class="form-control" required>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="position">Posizione di interesse <span class="required">*</span></label>
                    <select id="position" name="position" class="form-control" required>
                        <option value="">Seleziona una posizione</option>
                        <option value="Consulente Assicurativo">Consulente Assicurativo</option>
                        <option value="Back Office Assicurativo">Back Office Assicurativo</option>
                        <option value="Account Manager">Account Manager</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="location">Sede preferita <span class="required">*</span></label>
                    <select id="location" name="location" class="form-control" required>
                        <option value="">Seleziona una sede</option>
                        <option value="Milano">Milano</option>
                        <option value="Roma">Roma</option>
                        <option value="Torino">Torino</option>
                    </select>
                </div>
            </div>
            
            <div class="form-group">
                <label for="message">Messaggio <span class="required">*</span></label>
                <textarea id="message" name="message" class="form-control" placeholder="Raccontaci perché sei interessato a lavorare con noi..." required></textarea>
            </div>
            
            <div class="form-group">
                <label for="cv-upload" class="file-upload-label">
                    <i class="fas fa-upload"></i> Carica il tuo CV (PDF, DOC, DOCX - max 5MB)
                </label>
                <input type="file" id="cv-upload" name="cv-upload" accept=".pdf,.doc,.docx" class="form-control" style="display: none;" required>
                <div class="file-name" id="file-name"></div>
            </div>
            
            <div class="form-footer">
                <div class="form-note">
                    Cliccando su "Invia candidatura", accetti la nostra <a href="/privacy-policy.php" target="_blank">Privacy Policy</a>.
                </div>
                <button type="submit" class="btn">Invia candidatura</button>
            </div>
        </form>
    </section>

    <!-- MODAL TEAM BUILDING -->
    <div id="modal-team-building" class="modal">
        <div class="modal-content">
            <button class="close-modal" onclick="closeModal('modal-team-building')">&times;</button>
            <div class="modal-header">
                <img src="/img/team-building.jpg" alt="Team Building" class="modal-header-image">
                <div class="modal-header-content">
                    <h2 class="modal-title">Team Building</h2>
                    <p class="modal-subtitle">Costruiamo insieme relazioni solide e un team coeso</p>
                </div>
            </div>
            <div class="modal-body">
                <p>Le nostre attività di team building sono progettate per rafforzare lo spirito di squadra, migliorare la collaborazione e creare un ambiente di lavoro motivante e positivo.</p>
                
                <div class="modal-features">
                    <div class="modal-feature-card">
                        <h3><i class="fas fa-hiking"></i> Attività Outdoor</h3>
                        <p class="feature-description">Escursioni, attività sportive e giornate all'aria aperta per rafforzare il team in un contesto informale e divertente.</p>
                    </div>
                    
                    <div class="modal-feature-card">
                        <h3><i class="fas fa-puzzle-piece"></i> Workshop Collaborativi</h3>
                        <p class="feature-description">Sessioni di problem solving e attività creative che stimolano la collaborazione e l'innovazione.</p>
                    </div>
                    
                    <div class="modal-feature-card">
                        <h3><i class="fas fa-trophy"></i> Eventi Competitivi</h3>
                        <p class="feature-description">Tornei e sfide amichevoli che alimentano lo spirito di squadra e la sana competizione.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL SALA RELAX -->
    <div id="modal-sala-relax" class="modal">
        <div class="modal-content">
            <button class="close-modal" onclick="closeModal('modal-sala-relax')">&times;</button>
            <div class="modal-header">
                <img src="/img/sala-relax.jpg" alt="Sala Relax & Reset Zone" class="modal-header-image">
                <div class="modal-header-content">
                    <h2 class="modal-title">Sala Relax & Reset Zone</h2>
                    <p class="modal-subtitle">Il tuo spazio per ricaricarti e connetterti con i colleghi</p>
                </div>
            </div>
            <div class="modal-body">
                <p>La nostra sala relax è un ambiente confortevole e accogliente dove puoi staccare la spina, gustare il tuo pranzo e socializzare con i colleghi in un'atmosfera informale.</p>
                
                <div class="modal-features">
                    <div class="modal-feature-card">
                        <h3><i class="fas fa-utensils"></i> Area Pranzo</h3>
                        <p class="feature-description">Spazio attrezzato con microonde, frigorifero e tutte le comodità per il tuo pranzo in compagnia.</p>
                    </div>
                    
                    <div class="modal-feature-card">
                        <h3><i class="fas fa-couch"></i> Zona Relax</h3>
                        <p class="feature-description">Comode poltrone e divani dove rilassarsi durante le pause e ricaricare le energie.</p>
                    </div>
                    
                    <div class="modal-feature-card">
                        <h3><i class="fas fa-gamepad"></i> Area Intrattenimento</h3>
                        <p class="feature-description">Videogiochi, giochi da tavolo e attività ricreative per momenti di divertimento condiviso.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL EVENTI -->
    <div id="modal-eventi" class="modal">
        <div class="modal-content">
            <button class="close-modal" onclick="closeModal('modal-eventi')">&times;</button>
            <div class="modal-header">
                <img src="/img/eventi-aziendali.jpg" alt="Eventi Aziendali" class="modal-header-image">
                <div class="modal-header-content">
                    <h2 class="modal-title">Eventi</h2>
                    <p class="modal-subtitle">Celebriamo insieme i successi e creiamo ricordi indimenticabili</p>
                </div>
            </div>
            <div class="modal-body">
                <p>I nostri eventi aziendali sono momenti speciali per celebrare i traguardi raggiunti, rafforzare i legami del team e creare un senso di appartenenza unico.</p>
                
                <div class="modal-features">
                    <div class="modal-feature-card">
                        <h3><i class="fas fa-glass-cheers"></i> Feste Aziendali</h3>
                        <p class="feature-description">Celebrazioni periodiche, cene di Natale e eventi speciali per festeggiare insieme i successi del team.</p>
                    </div>
                    
                    <div class="modal-feature-card">
                        <h3><i class="fas fa-gift"></i> Eventi Tematici</h3>
                        <p class="feature-description">Serate a tema, feste di compleanno e occasioni speciali per condividere momenti di gioia.</p>
                    </div>
                    
                    <div class="modal-feature-card">
                        <h3><i class="fas fa-award"></i> Cerimonie di Riconoscimento</h3>
                        <p class="feature-description">Eventi dedicati alla valorizzazione dei risultati e al riconoscimento del merito individuale e di gruppo.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- FOOTER -->
    <footer>
        <div class="footer-content">
            <div class="footer-column">
                <h3><i class="fas fa-building"></i>Sede Legale</h3>
                <ul class="footer-links">
                    <li><i class="fas fa-file-contract"></i>Acrisure S.r.l.</li>
                    <!-- <li><i class="fas fa-id-card"></i> P.IVA: 13147890969</li> -->
                    <li><i class="fas fa-map-marker-alt"></i>Via Giuseppe Mazzini, 3 - 07100 Sassari</li><br>
                    <li><img src="/img/AcrisureLOGO.png" class="logo-footer" alt=""></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3><i class="fas fa-map-marked-alt"></i>Sedi Italiane</h3>
                <ul class="footer-links">
                    <li><i class="fas fa-city"></i> <strong>Sassari (SS)</strong><br>Via Giuseppe Mazzini, 3 - 07100</li>
                    <li><i class="fas fa-city"></i> <strong>Milano (MI)</strong><br>Via Santa Maria Segreta, 6 - 20123</li>
                </ul>
            </div>
            
            <div class="footer-column">
                <h3><i class="fas fa-headset"></i>Contatti</h3>
                <ul class="footer-links">
                    <li><i class="fas fa-phone-alt"></i> Amministrazione: 079 2016047</li>
                    <li><i class="fas fa-phone-volume"></i> Customer Care: 079 2853063</li>
                    <li><i class="fas fa-envelope"></i> <a href="mailto:info@acrisure.it"> info@acrisure.it</a></li>
                    <li><i class="fas fa-envelope"></i> <a href="mailto:acrisure@legalmail.it"> acrisure@legalmail.it</a></li>
                </ul>
                
                <div class="social-links">
                    <a href="https://it.linkedin.com/company/acrisureitalia" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                    <a href="https://www.instagram.com/acrisureitalia/" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            
            <div class="footer-column">
                <h3><i class="fas fa-clock"></i>Orari Ufficio</h3>
                <ul class="footer-links">
                    <li><i class="far fa-clock"></i> <strong>Lun-Ven</strong>: 9:00 - 18:00</li>
                    <li><i class="fas fa-door-closed"></i> <strong>Sab-Dom</strong>: Chiuso</li>
                </ul>
                
                <!-- <div class="footer-badge">
                    <img src="/img/BV.jpg" class="logo-footer" alt=""> 
                    <a href="https://www.accredia.it/" target="_blank"><img src="/img/Marchio ACCREDIA.jpg" class="logo-footer" alt=""></a>
                    <a href="https://aiba.it/" target="_blank"><img src="/img/AIBA.png" class="logo-footer" alt="Nuova immagine"></a>
                </div> -->
                
                <div class="legal-links">
                    <a href="/policy/policyAcrisure.php">Privacy Policy</a>
                    <a href="/cookies/cookiesAcrisure.php">Cookie Policy</a>
                    <a href="/legal&comp/legalAcrisure.php">Legal & Compliance</a>
                </div>
            </div>
        </div>
        
        <!-- <div class="footer-bottom">
            <div class="footer-legal">
                
            </div>
            <div class="footer-badge">
                <img src="/img/ivass-badge.png" alt="Autorizzato IVASS" width="80">
            </div>
        </div><br> -->

        <br>
        <!-- Aggiungi questa nuova sezione sopra il footer-bottom -->
        <div class="footer-legal-notice">
            <p>Acrisure S.r.l. - Cap. sociale €10.000,00 i.v. <br>
            Società appartenente al Gruppo IVA Acrisure P.IVA 13147890969<br>
            Cod. Fiscale e n.iscr. al Registro Imprese di Sassari n.11635300962 - REA SS-222619 </p>
        </div>
    </footer>

    <!-- Cookie banner -->
    <div id="cookie-banner" class="cookie-banner">
        <p>Utilizziamo cookie per migliorare la tua esperienza. <a href="/cookies/cookiesAcrisure.php">Maggiori informazioni</a></p>
        <button id="accept-cookies" class="btn">Accetta</button>
    </div>

    <script>
        // Scroll animation
        document.addEventListener('DOMContentLoaded', function() {
            const sections = document.querySelectorAll('.section');
            const menuToggle = document.querySelector('.menu-toggle');
            const nav = document.querySelector('nav');
            const header = document.getElementById('header');
            
            // Intersection Observer for section animations
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, { threshold: 0.1 });
            
            sections.forEach(section => {
                observer.observe(section);
            });
            
            // Header scroll effect
            window.addEventListener('scroll', () => {
                if (window.scrollY > 100) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });
            
            // Mobile menu toggle
            menuToggle.addEventListener('click', () => {
                nav.classList.toggle('active');
                menuToggle.classList.toggle('active');
            });
            
            // Close mobile menu when clicking on links
            document.querySelectorAll('nav a').forEach(link => {
                link.addEventListener('click', () => {
                    nav.classList.remove('active');
                    menuToggle.classList.remove('active');
                });
            });
            
            // File upload name display
            const fileInput = document.getElementById('cv-upload');
            const fileName = document.getElementById('file-name');
            
            fileInput.addEventListener('change', function() {
                if (this.files.length > 0) {
                    fileName.textContent = this.files[0].name;
                    fileName.style.display = 'block';
                } else {
                    fileName.style.display = 'none';
                }
            });
            
            // Form validation
            const form = document.getElementById('career-form');
            const formError = document.getElementById('form-error');
            const formSuccess = document.getElementById('form-success');
            
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Basic validation
                let isValid = true;
                const inputs = form.querySelectorAll('input, textarea, select');
                
                inputs.forEach(input => {
                    if (input.hasAttribute('required') && !input.value.trim()) {
                        input.classList.add('error');
                        isValid = false;
                    } else {
                        input.classList.remove('error');
                    }
                });
                
                if (!isValid) {
                    formError.textContent = 'Per favore, compila tutti i campi obbligatori.';
                    formError.style.display = 'block';
                    formSuccess.style.display = 'none';
                    return;
                }
                
                // File size validation (5MB max)
                const file = fileInput.files[0];
                if (file && file.size > 5 * 1024 * 1024) {
                    formError.textContent = 'Il file non deve superare 5MB.';
                    formError.style.display = 'block';
                    formSuccess.style.display = 'none';
                    return;
                }
                
                // If validation passes, show success message (in a real scenario, you would submit the form)
                formSuccess.textContent = 'Grazie per la tua candidatura! Ti contatteremo al più presto.';
                formSuccess.style.display = 'block';
                formError.style.display = 'none';
                form.reset();
                fileName.style.display = 'none';
                
                // Scroll to success message
                formSuccess.scrollIntoView({ behavior: 'smooth' });
            });
            
            // Cookie banner
            if (!localStorage.getItem('cookiesAccepted')) {
                document.getElementById('cookie-banner').style.display = 'flex';
            }
        });
        
        function acceptCookies() {
            localStorage.setItem('cookiesAccepted', 'true');
            document.getElementById('cookie-banner').style.display = 'none';
        }
        
        // Modal functions
        function openModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.style.display = 'block';
            document.body.classList.add('no-scroll');
        }
        
        function closeModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.style.display = 'none';
            document.body.classList.remove('no-scroll');
        }
        
        // Close modal when clicking outside
        window.addEventListener('click', function(event) {
            const modals = document.querySelectorAll('.modal');
            modals.forEach(modal => {
                if (event.target === modal) {
                    modal.style.display = 'none';
                    document.body.classList.remove('no-scroll');
                }
            });
        });
    </script>
</body>
</html>