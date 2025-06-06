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
    </style>
</head>
<body>
    <!-- Page transition overlay -->
    <div class="page-transition"></div>

    <header id="header">
        <div class="navbar">
            <div class="navbar-brand">
                <a href="/agricolture.html">
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
                    <li><a href="/agricolture.html#news" class="nav-link">News</a></li>
                    <li><a href="/agricolture.html#gruppo" class="nav-link">Leadership</a></li>
                    <li><a href="/agricolture.html#services" class="nav-link">Servizi</a></li>
                    <li><a href="/index.html#gruppo" class="nav-link">Il Nostro Gruppo</a></li>
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
                <p>Acrisure Italia opera nel pieno rispetto delle normative vigenti, adottando i più elevati standard di governance e compliance. Il nostro approccio si basa su trasparenza, integrità e responsabilità, garantendo la conformità a tutte le disposizioni di legge e regolamentari applicabili al settore assicurativo.</p>
                
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
                <h2>Organismo di Vigilanza ex D.Lgs. 231/2001</h2>
                <p>In ottemperanza al Decreto Legislativo 8 giugno 2001, n. 231, Acrisure Italia ha istituito un Organismo di Vigilanza con il compito di:</p>
                <ul>
                    <li>Monitorare l'adeguatezza e l'efficacia del Modello Organizzativo</li>
                    <li>Verificare il rispetto delle procedure e dei protocolli adottati</li>
                    <li>Segnalare eventuali anomalie o violazioni</li>
                    <li>Proporre aggiornamenti al Modello in caso di modifiche normative o organizzative</li>
                </ul>
                <p>L'Organismo opera in piena autonomia e indipendenza, garantendo il costante aggiornamento delle misure di prevenzione.</p>
            </div>

            <div class="legal-section">
                <h2>Modello 231 e Codice Etico</h2>
                <p>Acrisure Italia ha adottato un Modello Organizzativo ai sensi del D.Lgs. 231/2001, che include:</p>
                <ul>
                    <li>Analisi dei rischi di reato</li>
                    <li>Protocolli di prevenzione</li>
                    <li>Sistema disciplinare</li>
                    <li>Flussi informativi e controlli</li>
                </ul>
                <p>Il Codice Etico definisce i principi e i valori che guidano la nostra attività, stabilendo standard di comportamento per dipendenti, amministratori e collaboratori.</p>
            </div>

            <div class="legal-section">
                <h2>Whistleblowing</h2>
                <p>In conformità alla normativa sulla protezione dei segnalanti (Direttiva UE 2019/1937 e D.Lgs. 24/2023), Acrisure Italia ha istituito un canale dedicato per la segnalazione di violazioni o irregolarità.</p>
                <p>Le segnalazioni possono essere inviate:</p>
                <ul>
                    <li>Tramite email a: <a href="mailto:whistleblowing@acrisure.it">whistleblowing@acrisure.it</a></li>
                    <li>Tramite posta raccomandata all'indirizzo: Organismo di Vigilanza - Via Giuseppe Mazzini, 3 - 07100 Sassari</li>
                </ul>
                <p>Garantiamo la massima riservatezza e protezione contro ritorsioni per i segnalanti che agiscono in buona fede.</p>
            </div>

            <div class="legal-section">
                <h2>Documenti e Risorse</h2>
                <p>Scarica i principali documenti relativi alla nostra governance e compliance:</p>
                <ul>
                    <li><a href="/documents/codice-etico.pdf" target="_blank">Codice Etico</a></li>
                    <li><a href="/documents/modello-231.pdf" target="_blank">Modello Organizzativo 231</a></li>
                    <li><a href="/documents/procedura-whistleblowing.pdf" target="_blank">Procedura Whistleblowing</a></li>
                    <li><a href="/documents/politica-antiriciclaggio.pdf" target="_blank">Politica Antiriciclaggio</a></li>
                </ul>
            </div>

            <div class="legal-section">
                <h2>Contatti Compliance</h2>
                <p>Per informazioni o segnalazioni relative a legal e compliance:</p>
                <p><strong>Responsabile Compliance</strong><br>
                Email: <a href="mailto:compliance@acrisure.it">compliance@acrisure.it</a><br>
                Telefono: 079/2016047 (interno 5)</p>
                <p><strong>Organismo di Vigilanza</strong><br>
                Email: <a href="mailto:organismo.vigilanza@acrisure.it">organismo.vigilanza@acrisure.it</a></p>
            </div>
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
                    <li><img src="/img/ACRISURE AGRICOLTURE.jpg" class="logo-footer" alt=""></li>
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
                    <a href="/policy/policyAgricolture.html" class="page-transition-link">Privacy Policy</a>
                    <a href="/cookies/cookiesAgricolture.html" class="page-transition-link">Cookie Policy</a>
                    <a href="#header" class="page-transition-link">Legal & Compliance</a>
                </div>
            </div>
            <div class="footer-badge">
                <img src="/img/ivass-badge.png" alt="Autorizzato IVASS" width="80">
            </div>
        </div>
    </footer>

    <!-- Cookie banner -->
    <div id="cookie-banner" class="cookie-banner">
        <p>Utilizziamo cookie per migliorare la tua esperienza. <a href="/privacy" class="page-transition-link">Maggiori informazioni</a></p>
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