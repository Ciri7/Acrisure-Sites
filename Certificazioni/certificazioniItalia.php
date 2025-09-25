<?php include('../includes/auth.php'); ?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificazioni - Acrisure Italia</title>
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
    </style>
</head>
<body>
    <!-- Page transition overlay -->
    <div class="page-transition"></div>

    <header id="header">
        <div class="navbar">
            <div class="navbar-brand">
                <a href="/italia.php">
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
                    <li><a href="/italia.php#news" class="nav-link">News</a></li>
                    <li><a href="/italia.php#gruppo" class="nav-link">Leadership</a></li>
                    <li><a href="/italia.php#services" class="nav-link">Servizi</a></li>
                    <li><a href="/index.php#gruppo" class="nav-link">Il Nostro Gruppo</a></li>
                    <li><a href="/lavora-con-noi/lcn-acrisure.php" class="nav-link">Lavora con noi</a></li>
                </ul>
            </nav>
            <nav class="language-switcher">
                <ul>
                    <li><a onclick="window.location.href='#'" class="language-btn active">IT</a></li>
                    <li><a href="/eng/Qualità-eng/qualitàItalia-eng.php" class="language-btn">EN</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="certifications-hero">
        <div class="hero-content">
            <h1>Certificazioni</h1>
            <p>Le certificazioni che attestano il nostro impegno verso l'eccellenza e la conformità normativa</p>
        </div>
    </section>

    <section class="section">
        <div class="certifications-content">
            <h2 class="section-title">Le Nostre Certificazioni</h2>
            
            <!-- Certificazione Qualità -->
            <div class="certification-accordion">
                <div class="accordion-header">
                    <h3>Politica della Qualità</h3>
                    <span class="accordion-icon"><i class="fas fa-chevron-down"></i></span>
                </div>
                <div class="accordion-content">
                    <p>In qualità di broker assicurativo, Acrisure Italia S.p.A. considera la qualità come il fulcro del proprio impegno verso clienti e stakeholder. Attraverso il Sistema di Gestione della Qualità, investiamo costantemente nella crescita delle nostre persone e nella solidità delle relazioni con i clienti, per offrire soluzioni assicurative caratterizzate da trasparenza, professionalità ed eccellenza consulenziale.</p>
                    
                    <p>Abbiamo adottato una Politica per la Qualità conforme alla Norma ISO 9001:2015, consapevoli che rappresenti una leva strategica per raggiungere gli obiettivi aziendali, garantire la conformità ai requisiti applicabili e creare valore sostenibile nel tempo.</p>
                    
                    <p>Con questa Politica ci impegniamo a:</p>
                    <ul>
                        <li>comprendere a fondo i bisogni dei clienti, fornendo risposte puntuali e personalizzate;</li>
                        <li>rafforzare la fiducia attraverso un approccio consulenziale etico, responsabile e conforme alle normative;</li>
                        <li>promuovere il miglioramento continuo delle competenze, dei processi interni e delle performance aziendali.</li>
                    </ul>
                    
                    <p>Per noi, qualità significa dare certezze e costruire fiducia, accompagnando i nostri clienti nelle scelte più importanti. La Politica è diffusa, compresa e riesaminata periodicamente per garantirne l'attualità e l'efficacia.</p>
                    
                    <div class="certification-badge">
                        <i class="fas fa-certificate"></i>
                        <span>ISO 9001:2015</span>
                    </div>
                    
                    <p><a href="/DOCUMENTI/QUALITÀ/Politica della Qualità Acrisure Italia.pdf" target="_blank">Scarica il documento completo della Politica per la Qualità</a></p>
                </div>
            </div>
            
            <!-- Certificazione Privacy -->
            <!-- <div class="certification-accordion">
                <div class="accordion-header">
                    <h3>Protezione dei Dati Personali</h3>
                    <span class="accordion-icon"><i class="fas fa-chevron-down"></i></span>
                </div>
                <div class="accordion-content">
                    <p>Acrisure Italia S.p.A. è impegnata a garantire la massima protezione dei dati personali dei propri clienti e stakeholder, in conformità al Regolamento Generale sulla Protezione dei Dati (GDPR) e alla normativa italiana in materia.</p>
                    
                    <p>Il nostro Sistema di Gestione della Privacy è progettato per:</p>
                    <ul>
                        <li>Garantire la riservatezza, integrità e disponibilità dei dati personali</li>
                        <li>Rispettare i diritti degli interessati in materia di protezione dati</li>
                        <li>Implementare misure tecniche e organizzative adeguate per la sicurezza dei dati</li>
                        <li>Assicurare la conformità normativa in tutte le attività di trattamento</li>
                    </ul>
                    
                    <p>La nostra organizzazione ha nominato un Responsabile della Protezione dei Dati (DPO) che supervisiona l'attuazione e il mantenimento del sistema di gestione privacy.</p>
                    
                    <div class="certification-badge">
                        <i class="fas fa-user-shield"></i>
                        <span>Conforme al GDPR</span>
                    </div>
                    
                    <p><a href="/policy/policyItalia.php">Consulta la nostra Privacy Policy completa</a></p>
                </div>
            </div> -->
            
            <!-- Certificazione Antiriciclaggio -->
            <!-- <div class="certification-accordion">
                <div class="accordion-header">
                    <h3>Antiriciclaggio e Compliance</h3>
                    <span class="accordion-icon"><i class="fas fa-chevron-down"></i></span>
                </div>
                <div class="accordion-content">
                    <p>Acrisure Italia S.p.A. adotta un rigoroso sistema di compliance antiriciclaggio in conformità al D.Lgs. 231/2007 e successive modifiche, nonché alle disposizioni IVASS in materia.</p>
                    
                    <p>Il nostro sistema di controlli interni include:</p>
                    <ul>
                        <li>Procedure di verifica della clientela (KYC - Know Your Customer)</li>
                        <li>Monitoraggio continuo delle operazioni sospette</li>
                        <li>Formazione obbligatoria del personale sulle normative antiriciclaggio</li>
                        <li>Nomina di un Responsabile Antiriciclaggio</li>
                        <li>Adozione di un Modello Organizzativo ex D.Lgs. 231/2001</li>
                    </ul>
                    
                    <p>Questo approccio ci consente di operare nel pieno rispetto della legalità e di contribuire attivamente alla lotta contro il riciclaggio e il finanziamento del terrorismo.</p>
                    
                    <div class="certification-badge">
                        <i class="fas fa-balance-scale"></i>
                        <span>Conforme D.Lgs. 231/2007</span>
                    </div>
                </div>
            </div> -->
            
            <!-- Certificazione Ambientale -->
            <!-- <div class="certification-accordion">
                <div class="accordion-header">
                    <h3>Sostenibilità Ambientale</h3>
                    <span class="accordion-icon"><i class="fas fa-chevron-down"></i></span>
                </div>
                <div class="accordion-content">
                    <p>Acrisure Italia S.p.A. è impegnata nella riduzione del proprio impatto ambientale attraverso l'adozione di pratiche sostenibili e l'implementazione di un sistema di gestione ambientale.</p>
                    
                    <p>Le nostre iniziative includono:</p>
                    <ul>
                        <li>Digitalizzazione dei processi per ridurre il consumo di carta</li>
                        <li>Implementazione di politiche di risparmio energetico</li>
                        <li>Promozione della mobilità sostenibile</li>
                        <li>Scelta di fornitori che condividono i nostri valori ambientali</li>
                        <li>Sensibilizzazione del personale sulle tematiche ambientali</li>
                    </ul>
                    
                    <p>Il nostro impegno verso la sostenibilità si riflette anche nell'offerta di soluzioni assicurative che promuovono pratiche eco-compatibili presso i nostri clienti.</p>
                    
                    <div class="certification-badge">
                        <i class="fas fa-leaf"></i>
                        <span>Impegno Sostenibilità</span>
                    </div>
                    
                    <p><a href="/Sostenibilità/sostenibilitaItalia.php">Scopri di più sul nostro impegno per la sostenibilità</a></p>
                </div>
            </div> -->
            
            <!-- Spazio per future certificazioni -->
            <!-- <div class="certification-accordion">
                <div class="accordion-header">
                    <h3>Certificazioni Future</h3>
                    <span class="accordion-icon"><i class="fas fa-chevron-down"></i></span>
                </div>
                <div class="accordion-content">
                    <p>Acrisure Italia S.p.A. è costantemente impegnata nel miglioramento continuo e nell'espansione delle proprie certificazioni per garantire i più alti standard di qualità e conformità.</p>
                    
                    <p>Stiamo attualmente valutando l'ottenimento di ulteriori certificazioni in ambiti quali:</p>
                    <ul>
                        <li>Cybersecurity e protezione dei dati</li>
                        <li>Responsabilità sociale d'impresa (CSR)</li>
                        <li>Innovazione digitale nei servizi assicurativi</li>
                    </ul>
                    
                    <p>Questa sezione verrà aggiornata non appena nuove certificazioni saranno ottenute, a testimonianza del nostro costante impegno verso l'eccellenza.</p>
                    
                    <div class="certification-badge">
                        <i class="fas fa-rocket"></i>
                        <span>In Evoluzione</span>
                    </div>
                </div>
            </div> -->
        </div>
    </section>

    <!-- FOOTER ------------------------------------------------------------------------------------------------------------------ -->
    <footer>
        <div class="footer-content">
            <div class="footer-column">
                <h3><i class="fas fa-building"></i> Sede Legale</h3>
                <ul class="footer-links">
                    <li><i class="fas fa-file-contract"></i> Acrisure Italia S.p.A.</li>
                    <!-- <li><i class="fas fa-id-card"></i> P.IVA: 13147890969</li> -->
                    <li><i class="fas fa-map-marker-alt"></i> Via Giuseppe Mazzini, 3 - 07100 Sassari</li><br>
                    <li><img src="/img/Acrisure Italia.jpg" class="logo-footer" alt=""></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3><i class="fas fa-map-marked-alt"></i> Sedi Italiane</h3>
                <ul class="footer-links">
                    <li><i class="fas fa-city"></i> <strong>Sassari (SS)</strong><br>Via Giuseppe Mazzini, 3 - 07100</li>
                    <li><i class="fas fa-city"></i> <strong>Milano (MI)</strong><br>Via Santa Maria Segreta, 6 - 20123</li>
                    <li><i class="fas fa-city"></i> <strong>Roma (RM)</strong><br>Via Lovanio, 6 - 00198</li>
                </ul>
            </div>
            
            <div class="footer-column">
                <h3><i class="fas fa-headset"></i> Contatti</h3>
                <ul class="footer-links">
                    <li><i class="fas fa-phone-alt"></i> Amministrazione: 079 2016047</li>
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
                    <h3><i class="fas fa-exclamation-circle"></i> <a href="/reclami/reclamiItalia.php" class="footer-title-link">Reclami</a></h3>
                    <ul class="footer-links">
                        <li><i class="fas fa-envelope"></i> <a href="mailto:reclami@acrisureitalia.com">reclami@acrisureitalia.com</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-column">
                <h3><i class="fas fa-clock"></i> Orari Ufficio</h3>
                <ul class="footer-links">
                    <li><i class="far fa-clock"></i> <strong>Lun-Ven</strong>: 9:00 - 18:00</li>
                    <li><i class="fas fa-door-closed"></i> <strong>Sab-Dom</strong>: Chiuso</li>
                </ul>
                
                <div class="footer-badge">
                    <img src="/img/BV.jpg" class="logo-footer" alt=""> 
                    <a href="https://www.accredia.it/" target="_blank"><img src="/img/Marchio ACCREDIA.jpg" class="logo-footer" alt=""></a>
                    <a href="https://aiba.it/" target="_blank"><img src="/img/AIBA.png" class="logo-footer" alt="Nuova immagine"></a>
                </div>
                
                <br>
                <div class="legal-links">
                    <a href="/legal&comp/legalItalia.php">Legal & Compliance</a>
                    <a href="#header">Certificazioni</a>
                    <a href="/Sostenibilità/sostenibilitaItalia.php">Sostenibilità</a>
                    <a href="/policy/policyItalia.php">Privacy Policy</a>
                    <a href="/cookies/cookiesItalia.php">Cookie Policy</a>
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
            <p>Acrisure Italia S.p.A. - Società con socio unico soggetta alla direzione e coordinamento di Acrisure S.r.l.- Cap. Sociale € 200.000,00 i.v.
                I dati identificativi e di iscrizione sopra forniti possono essere verificati consultando il Registro Unico degli Intermediari (RUI) sul sito Ivass: <a href="https://ruipubblico.ivass.it/rui-pubblica/ng/#/home" target="_blank">www.ivass.it</a>.
                Iscritta alla Sez. B del RUI n.000673774, è soggetta alla vigilanza IVASS
                Società partecipante al Gruppo IVA Acrisure P.IVA 13147890969- Cod. Fiscale e n. iscr.al registro Imprese di Sassari n.02848210908. REA SS-222619
            </p>
        </div>
    </footer>

    <script>

        // Gestione speciale per i link anchor
        const anchorLinks = document.querySelectorAll('a[href^="#"]');

        anchorLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                // Se il link anchor punta a un elemento nella stessa pagina
                if (this.getAttribute('href') !== '#' && 
                    document.querySelector(this.getAttribute('href'))) {
                    
                    e.preventDefault();
                    pageTransition.classList.add('active');
                    
                    setTimeout(() => {
                        window.location.href = this.href;
                    }, 400);
                }
            });
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