<?php include('../includes/auth.php'); ?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acrisure Services - Privacy Policy</title>
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
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/img/serv9.avif');
            background-size: cover;
            background-position: top;
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
    </style>
</head>
<body>
    <!-- Page transition overlay -->
    <div class="page-transition"></div>

    <header id="header">
        <div class="navbar">
            <div class="navbar-brand">
                <a href="/services.php">
                    <img src="/img/Acrisure Services 2.jpg" alt="Acrisure Services Logo" class="logo">
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
                    <li><a href="/services.php#services" class="nav-link">Servizi</a></li>
                    <li><a href="/index.php#gruppo" class="nav-link">Il Nostro Gruppo</a></li>
                    <li><a href="/lavora-con-noi/lcn-services.php" class="nav-link">Lavora con noi</a></li>
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

    <section class="privacy-hero">
        <div class="hero-content">
            <h1>Privacy Policy</h1>
            <p>Scopri come gestiamo e proteggiamo i tuoi dati personali in conformità con il GDPR e la normativa italiana.</p>
        </div>
    </section>

    <section class="section">
        <div class="privacy-content">
            <div class="privacy-section">
                <h2>Informativa sulla privacy</h2>
                <p>La presente Informativa sulla privacy descrive le modalità con cui Acrisure Italia S.r.l. ("Acrisure Italia") raccoglie, utilizza, conserva e protegge le informazioni personali degli utenti ("Utente/i") che accedono e utilizzano il sito web <a href="https://www.acrisureitalia.com">www.acrisureitalia.com</a> ("Sito").</p>
                <p>Questa Informativa è resa ai sensi dell'art. 13 del Regolamento (UE) 2016/679 ("GDPR") e del D.Lgs. 196/2003 ("Codice Privacy") come modificato dal D.Lgs. 101/2018.</p>
            </div>

            <div class="privacy-section">
                <h2>Titolare del trattamento</h2>
                <p>Il Titolare del trattamento dei dati è:</p>
                <p><strong>Acrisure Italia S.r.l.</strong><br>
                Via Giuseppe Mazzini, 3 - 07100 Sassari<br>
                P.IVA: 13147890969<br>
                REA: MI-2616058<br>
                Email: <a href="mailto:info@acrisure.it">info@acrisure.it</a><br>
                PEC: <a href="mailto:acrisure@pec.acrisure.it">acrisure@pec.acrisure.it</a></p>
            </div>

            <div class="privacy-section">
                <h2>Tipologie di dati raccolti</h2>
                <p>Tra i Dati Personali raccolti da questo Sito, in modo autonomo o tramite terze parti, ci sono:</p>
                <ul>
                    <li><strong>Dati di navigazione</strong>: i sistemi informatici e le procedure software preposte al funzionamento di questo Sito acquisiscono, nel normale esercizio, alcuni dati personali la cui trasmissione è implicita nell'uso dei protocolli di comunicazione Internet.</li>
                    <li><strong>Dati forniti volontariamente dall'utente</strong>: l'invio facoltativo, esplicito e volontario di messaggi agli indirizzi di contatto, nonché la compilazione e l'inoltro dei moduli presenti sul Sito, comportano l'acquisizione dei dati personali inseriti, necessari per rispondere alle richieste.</li>
                    <li><strong>Cookie</strong>: il Sito utilizza cookie per garantire una migliore esperienza di navigazione. Per maggiori informazioni, consulta la nostra <a href="cookies.php" class="page-transition-link">Cookie Policy</a>.</li>
                </ul>
            </div>

            <div class="privacy-section">
                <h2>Finalità e base giuridica del trattamento</h2>
                <p>I dati personali sono trattati per le seguenti finalità:</p>
                <ul>
                    <li><strong>Esecuzione di servizi richiesti</strong>: risposta a richieste di informazioni, preventivi o contatti (base giuridica: esecuzione di misure precontrattuali o contrattuali).</li>
                    <li><strong>Adempimenti legali</strong>: adempimento di obblighi previsti da leggi, regolamenti o normativa comunitaria (base giuridica: obbligo legale).</li>
                    <li><strong>Marketing</strong>: invio di comunicazioni commerciali, previo consenso dell'Utente (base giuridica: consenso).</li>
                    <li><strong>Statistiche</strong>: analisi anonima dei dati di navigazione per migliorare il Sito (base giuridica: legittimo interesse).</li>
                </ul>
            </div>

            <div class="privacy-section">
                <h2>Modalità del trattamento</h2>
                <p>Il trattamento dei dati personali è effettuato mediante strumenti informatici e/o telematici, con modalità organizzative e con logiche strettamente correlate alle finalità indicate.</p>
                <p>Specifiche misure di sicurezza sono osservate per prevenire la perdita dei dati, usi illeciti o non corretti e accessi non autorizzati.</p>
                <p>I dati sono trattati esclusivamente da personale autorizzato e da eventuali responsabili esterni nominati come tali ai sensi dell'art. 28 GDPR.</p>
            </div>

            <div class="privacy-section">
                <h2>Periodo di conservazione</h2>
                <p>I dati personali sono conservati per il tempo necessario al conseguimento delle finalità per le quali sono stati raccolti, in particolare:</p>
                <ul>
                    <li>Dati per finalità contrattuali: per tutta la durata del rapporto e successivamente per 10 anni per adempiere agli obblighi di legge.</li>
                    <li>Dati per finalità di marketing: fino alla revoca del consenso da parte dell'interessato.</li>
                    <li>Dati di navigazione: per il tempo strettamente necessario alla finalità di raccolta e comunque non oltre 12 mesi.</li>
                </ul>
            </div>

            <div class="privacy-section">
                <h2>Diritti degli interessati</h2>
                <p>Ai sensi degli artt. 15-22 GDPR, l'Utente può esercitare i seguenti diritti:</p>
                <ul>
                    <li>Accesso ai propri dati personali.</li>
                    <li>Richiesta di rettifica o cancellazione.</li>
                    <li>Limitazione del trattamento.</li>
                    <li>Opposizione al trattamento.</li>
                    <li>Portabilità dei dati.</li>
                    <li>Revoca del consenso, ove previsto.</li>
                </ul>
                <p>Le richieste vanno indirizzate al Titolare ai contatti sopra indicati. L'Utente ha inoltre il diritto di proporre reclamo all'Autorità Garante per la protezione dei dati personali (www.garanteprivacy.it).</p>
            </div>

            <div class="privacy-section">
                <h2>Comunicazione e diffusione dei dati</h2>
                <p>I dati personali potranno essere comunicati a:</p>
                <ul>
                    <li>Soggetti interni all'organizzazione di Acrisure Italia, autorizzati al trattamento.</li>
                    <li>Soggetti esterni nominati responsabili del trattamento (es. fornitori di servizi IT, consulenti).</li>
                    <li>Autorità giudiziarie o amministrative, nei casi previsti dalla legge.</li>
                </ul>
                <p>I dati non saranno diffusi, se non in forma anonima e aggregata per finalità statistiche.</p>
            </div>

            <div class="privacy-section">
                <h2>Trasferimento dati extra UE</h2>
                <p>Alcuni servizi terzi utilizzati dal Sito potrebbero comportare il trasferimento di dati in Paesi extra UE. In tali casi, Acrisure Italia adotta le garanzie previste dal GDPR (clausole contrattuali standard, decisioni di adeguatezza).</p>
            </div>

            <div class="privacy-section">
                <h2>Modifiche alla privacy policy</h2>
                <p>Acrisure Italia si riserva il diritto di apportare modifiche alla presente Informativa. Le versioni aggiornate saranno pubblicate sul Sito con l'indicazione della data di revisione. Si invita l'Utente a consultare periodicamente questa pagina.</p>
                <p><strong>Ultimo aggiornamento:</strong> 31 marzo 2024</p>
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
                    <a href="#header">Privacy Policy</a>
                    <a href="/cookies/cookiesServices.php">Cookie Policy</a>
                    <a href="/legal&comp/legalServices.php">Legal & Compliance</a>
                </div>
            </div>
            <div class="footer-badge">
                <img src="/img/ivass-badge.png" alt="Autorizzato IVASS" width="80">
            </div>
        </div>
    </footer>

    <!-- Cookie banner -->
    <div id="cookie-banner" class="cookie-banner">
        <p>Utilizziamo cookie per migliorare la tua esperienza. <a href="/privacy">Maggiori informazioni</a></p>
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