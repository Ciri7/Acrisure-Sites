<?php include('../includes/auth.php'); ?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acrisure Agricolture - Legal & Compliance</title>
    <meta name="description" content="Informazioni su legalità e conformità di Acrisure Italia. Scopri il nostro impegno per la trasparenza e il rispetto delle normative.">
    <meta name="keywords" content="legal, compliance, normativa, regolamentazione, Acrisure Italia">
    <link rel="canonical" href="https://www.acrisureitalia.com/legal-e-compliance" />
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
        .legal-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/img/colture3.jpg');
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
        
        .legal-hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            line-height: 1.2;
            animation: fadeIn 0.8s ease;
        }
        
        .legal-hero p {
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
        
        /* Legal Content */
        .legal-content {
            max-width: 1000px;
            margin: 0 auto;
            background-color: white;
            padding: 3rem;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }
        
        .legal-section {
            margin-bottom: 3rem;
        }
        
        .legal-section h2 {
            color: var(--secondary);
            margin-bottom: 1.5rem;
            font-size: 1.8rem;
            position: relative;
            padding-bottom: 0.8rem;
        }
        
        .legal-section h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 2px;
            background-color: var(--accent);
        }
        
        .legal-section h3 {
            color: var(--secondary);
            margin: 2rem 0 1rem;
            font-size: 1.4rem;
        }
        
        .legal-section p, 
        .legal-section ul {
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
            line-height: 1.7;
            color: #555;
        }
        
        .legal-section ul {
            padding-left: 2rem;
        }
        
        .legal-section li {
            margin-bottom: 0.8rem;
        }
        
        .legal-section strong {
            color: var(--secondary);
            font-weight: 600;
        }
        
        .legal-section a {
            color: var(--accent);
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .legal-section a:hover {
            color: var(--primary);
            text-decoration: underline;
        }
        
        /* Compliance Boxes */
        .compliance-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }
        
        .compliance-box {
            background-color: white;
            border-radius: 8px;
            padding: 2rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s, box-shadow 0.3s;
            border-top: 4px solid var(--accent);
        }
        
        .compliance-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        .compliance-box h3 {
            color: var(--secondary);
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
        }
        
        .compliance-box h3 i {
            margin-right: 10px;
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
            .legal-hero h1 {
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
            
            .legal-hero {
                height: 40vh;
                min-height: 300px;
            }
            
            .legal-hero h1 {
                font-size: 2.5rem;
            }
            
            .legal-hero p {
                font-size: 1.1rem;
            }
            
            .legal-content {
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
            .legal-hero h1 {
                font-size: 2rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .section {
                padding: 4rem 5%;
            }
            
            .legal-content {
                padding: 1.5rem;
            }
            
            .legal-section h2 {
                font-size: 1.5rem;
            }
            
            .legal-section h3 {
                font-size: 1.2rem;
            }
            
            .legal-section p, 
            .legal-section ul {
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

                /* Allineamento giustificato del contenuto - PERFETTO ---------------------------------------------------------*/
        .legal-section p {
            text-align: justify;
            text-justify: inter-word;
        }

        .legal-section ul {
            text-align: left;
            margin: 1.5rem 0;
        }

        .legal-section li {
            text-align: justify;
            text-justify: inter-word;
            margin-bottom: 0.8rem;
            line-height: 1.6;
        }

        /* Gestione specifica per il contenuto misto dentro i paragrafi */
        .legal-section p br {
            display: block;
            margin: 0.8rem 0;
            content: "";
        }

        /* Assicura che tutto il testo sia giustificato */
        .legal-section {
            text-align: justify;
        }

        /* Mantieni l'allineamento a sinistra per i titoli */
        .legal-section h2,
        .legal-section h3 {
            text-align: left;
        }

        /* Migliora la spaziatura per una lettura ottimale */
        .legal-section p {
            margin-bottom: 1.2rem;
            line-height: 1.7;
        }

        /* Allineamento specifico per i link nelle liste */
        .legal-section li a {
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
                <a href="/agricolture.php">
                    <img src="/img/ACRISURE AGRICOLTURE.jpg" alt="Acrisure Services Logo" class="logo">
                </a>
                <div class="menu-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <nav>
                <ul>
                    <li><a href="/agricolture.php#news" class="nav-link">News</a></li>
                    <li><a href="/agricolture.php#gruppo" class="nav-link">Leadership</a></li>
                    <li><a href="/agricolture.php#services" class="nav-link">Servizi</a></li>
                    <li><a href="/index.php#gruppo" class="nav-link">Il Nostro Gruppo</a></li>
                    <li><a href="/lavora-con-noi/lcn-acrisure.php" class="nav-link">Lavora con noi</a></li>
                </ul>
            </nav>
            <nav class="language-switcher">
                <ul>
                    <li><a onclick="window.location.href='#'" class="language-btn active">IT</a></li>
                    <li><a href="/eng/legal-eng/legalAgricolture-eng.php" class="language-btn">EN</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="legal-hero">
        <div class="hero-content">
            <h1>Legal & Compliance</h1>
            <p>Il nostro impegno per la trasparenza, la conformità normativa e la tutela degli stakeholder.</p>
        </div>
    </section>

    <section class="section">
        <div class="legal-content">
            <div class="legal-section">
                <h2>Governance e Compliance</h2>
                <p>Acrisure Agricolture opera nel pieno rispetto delle normative vigenti, adottando i più elevati standard di governance e compliance. Il nostro approccio si basa su trasparenza, integrità e responsabilità, garantendo la conformità a tutte le disposizioni di legge e regolamentari applicabili al settore assicurativo.</p>
                
                <div class="compliance-grid">
                    <div class="compliance-box">
                        <h3><i class="fas fa-balance-scale"></i> Normativa IVASS</h3>
                        <p>Rispettiamo scrupolosamente le disposizioni dell'IVASS (Istituto per la Vigilanza sulle Assicurazioni), garantendo la massima trasparenza nelle relazioni con i clienti e la corretta gestione dei prodotti assicurativi.</p>
                    </div>
                    
                    <div class="compliance-box">
                        <h3><i class="fas fa-shield-alt"></i> Antiriciclaggio</h3>
                        <p>Abbiamo implementato un solido sistema di prevenzione del riciclaggio e del finanziamento del terrorismo, in conformità al D.Lgs. 231/2007 e alle successive modifiche.</p>
                    </div>
                    
                    <div class="compliance-box">
                        <h3><i class="fas fa-user-shield"></i> Protezione Dati</h3>
                        <p>La privacy e la sicurezza dei dati personali sono prioritarie. Il trattamento avviene nel rispetto del GDPR (Regolamento UE 2016/679) e del Codice Privacy italiano.</p>
                    </div>
                    
                    <div class="compliance-box">
                        <h3><i class="fas fa-handshake"></i> Condotta Commerciale</h3>
                        <p>Adottiamo politiche rigorose per garantire correttezza, trasparenza e lealtà in tutte le attività commerciali, in linea con le disposizioni IVASS sulla distribuzione assicurativa.</p>
                    </div>
                </div>
            </div>

            <div class="legal-section">
                <h2>Whistleblowing</h2>
                <p>
                    Acrisure Agricolture S.r.l., promuove e sostiene attivamente la segnalazione, in buona fede, da parte di dipendenti e soggetti terzi, di comportamenti inappropriati, scorretti, attivi o omissivi, nonché di possibili violazioni sia delle norme interne — quali il Codice Etico e, più in generale, l’intero corpus normativo aziendale — sia delle normative esterne applicabili, come leggi e regolamenti, oltre a qualsiasi illecito o irregolarità legata alla gestione delle attività aziendali.
                    L’obiettivo è duplice: da un lato, intervenire tempestivamente per contrastare ogni comportamento illecito o non etico, agendo sui fatti segnalati e sui responsabili; dall’altro, prevenire rischi che possano portare la Società a sanzioni o azioni legali da parte delle Autorità, con conseguenti danni reputazionali.
                    A tal fine, Acrisure Agricolture S.r.l. si è dotata di un sistema interno per la gestione delle segnalazioni, disciplinato dalla Procedura Whistleblowing, elaborata in collaborazione con le rappresentanze sindacali, ai sensi dell’art. 51 del D.lgs. 81/2015. Questa procedura stabilisce le modalità di ricezione e verifica delle segnalazioni, coinvolgendo attivamente la Società, i dipendenti e i soggetti terzi.
                    La piattaforma per l’invio delle segnalazioni è raggiungibile ed utilizzabile al seguente link: <a href="https://acrisure.lpwhistleblowing.com/" target="_blank">https://acrisure.lpwhistleblowing.com/</a>.
                    Garantiamo la massima riservatezza e protezione contro ritorsioni per i segnalanti che agiscono in buona fede.
                </p>
                <ul>
                    <li><a href="../DOCUMENTI/MODELLO 231/WB_Agricolture.pdf" target="_blank">Procedura Whistleblowing</a></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="footer-content">
            <div class="footer-column">
                <h3><i class="fas fa-building"></i>Sede Legale</h3>
                <ul class="footer-links">
                    <li><i class="fas fa-file-contract"></i>Acrisure Agricolture S.r.l.</li>
                    <!-- <li><i class="fas fa-id-card"></i> P.IVA: 13147890969</li> -->
                    <li><i class="fas fa-map-marker-alt"></i>Via Lovanio, 6 - 00198 Roma</li><br>
                    <li><img src="/img/ACRISURE AGRICOLTURE.jpg" class="logo-footer" alt=""></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3><i class="fas fa-map-marked-alt"></i>Sedi Italiane</h3>
                <ul class="footer-links">
                    <li><i class="fas fa-city"></i> <strong>Roma (RM)</strong><br>Via Lovanio, 6 - 00198</li>
                    <!-- <li><i class="fas fa-city"></i> <strong>Milano (MI)</strong><br>Via Santa Maria Segreta, 6 - 20123</li>
                    <li><i class="fas fa-city"></i> <strong>Torino (TO)</strong><br>Via San Francesco Da Paola, 15 - 10123</li>
                    <li><i class="fas fa-city"></i> <strong>Genova (GE)</strong><br>Piazza della Vittoria, 9 - 16121</li>
                    <li><i class="fas fa-city"></i> <strong>Cles (TN)</strong><br>Piazza Granda 44, - 38023</li> -->
                </ul>
            </div>
            
            <div class="footer-column">
                <h3><i class="fas fa-headset"></i>Contatti</h3>
                <ul class="footer-links">
                    <li><i class="fas fa-phone-alt"></i>Amministrazione: 069 8968206</li>
                    <!-- <li><i class="fas fa-phone-volume"></i> Customer Care: 079 2853063</li> -->
                    <!-- <li><i class="fas fa-envelope"></i> <a href="mailto:info@acrisure.it">info@acrisure.it</a></li> -->
                        <li><i class="fas fa-envelope"></i> <a href="mailto:agricolture@pec.acrisure.it">agricolture@pec.acrisure.it</a></li>
                </ul>
                
                <div class="social-links">
                    <a href="https://it.linkedin.com/company/acrisureitalia" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                    <a href="https://www.instagram.com/acrisureitalia/" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                </div>

                <br>
                <div class="footer-column">
                    <h3><i class="fas fa-exclamation-circle"></i> <a href="/reclami/reclamiAgricolture.php" class="footer-title-link">Reclami</a></h3>
                    <ul class="footer-links">
                        <li><i class="fas fa-envelope"></i> <a href="mailto:reclami.agricolture@acrisure.it">reclami.agricolture@acrisure.it</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-column">
                <h3><i class="fas fa-clock"></i> Orari Ufficio</h3>
                <ul class="footer-links">
                    <li><i class="far fa-clock"></i> <strong>Lun-Ven</strong>: 9:00 - 18:00</li>
                    <li><i class="fas fa-door-closed"></i> <strong>Sab-Dom</strong>: Chiuso</li>
                </ul>
                
                <div class="legal-links">
                    <a href="/policy/policyAgricolture.php">Privacy Policy</a>
                    <a href="/cookies/cookiesAgricolture.php">Cookie Policy</a>
                    <a href="/legal&comp/legalAgricolture.php">Legal & Compliance</a>
                </div>
            </div>
        </div>

        <br>
        <!-- Aggiungi questa nuova sezione sopra il footer-bottom -->
        <div class="footer-legal-notice">
            <p>Acrisure Agricolture S.r.l. - Società con socio unico soggetta alla direzione e coordinamento di Acrisure S.r.l.- Cap. sociale € 150.000,00 i.v.
                Iscritta alla Sez. B del RUI n° 000243223, è soggetta alla vigilanza IVASS.
                I dati identificativi e di iscrizione sopra forniti possono essere verificati consultando il Registro Unico degli Intermediari (RUI) sul sito Ivass: <a href="https://ruipubblico.ivass.it/rui-pubblica/ng/#/home" target="_blank">www.ivass.it</a>.
                Società partecipante al Gruppo IVA Acrisure P.IVA 13147890969- Cod. Fiscale e n. iscr.al registro Imprese di Roma n.08359221002. REA RM- 1089539
            </p>
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