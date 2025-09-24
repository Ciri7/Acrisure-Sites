<?php include('../includes/auth.php'); ?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acrisure Re Italia - Privacy Policy</title>
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
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/img/re2.avif');
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
    <header id="header">
        <div class="navbar">
            <div class="navbar-brand">
                <a href="/re.php">
                    <img src="/img/Acrisure Re Italia.jpg" alt="Acrisure Services Logo" class="logo">
                </a>
                <div class="menu-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <nav>
                <ul>
                    <li><a href="/re.php#news" class="nav-link">News</a></li>
                    <li><a href="/re.php#gruppo" class="nav-link">Leadership</a></li>
                    <li><a href="/re.php#services" class="nav-link">Servizi</a></li>
                    <li><a href="/index.php#gruppo" class="nav-link">Il Nostro Gruppo</a></li>
                    <li><a href="/lavora-con-noi/lcn-acrisure.php" class="nav-link">Lavora con noi</a></li>
                </ul>
            </nav>
            <nav class="language-switcher">
                <ul>
                    <li><a onclick="window.location.href='#'" class="language-btn active">IT</a></li>
                    <li><a href="/eng/policy-eng/policyRe-eng.php" class="language-btn">EN</a></li>
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
                <h2>INFORMATIVA SUL TRATTAMENTO DEI DATI PERSONALI PER IL SITO</h2>
                <h3>INTRODUZIONE</h3>
                <p>Ai sensi del Regolamento (UE) 2016/679 ("GDPR"), Acrisure Re Italia S.r.l. fornisce la presente informativa sul trattamento dei dati personali degli utenti che navigano sul sito web <a href="/re.php">Acrisure Re Italia S.r.l.</a> e che forniscono i propri dati personali per fruire dei servizi ivi offerti.</p>
                <p>Le presenti informazioni non riguardano altri siti web o servizi online raggiungibili tramite link ipertestuali eventualmente pubblicati sul Sito web ma riferiti a risorse esterne al dominio.</p>
                <p>La presente informativa si applica a tutti gli utenti, tra cui visitatori registrati e non registrati, del nostro sito: <a href="/re.php">Acrisure Re Italia S.r.l.</a>. Si invita l'utente a leggere attentamente la presente informativa. In caso di dubbi o domande l'utente potrà contattarci all'indirizzo: <a href="mailto:acrisurereitalia@pec.it">acrisurereitalia@pec.it</a></p>
            </div>

            <div class="privacy-section">
                <h2>1) TITOLARE DEL TRATTAMENTO E RESPONSABILE DELLA PROTEZIONE DEI DATI</h2>
                <p><strong>Titolare del Trattamento</strong> è Acrisure Re Italia S.r.l., Via Mazzini 3, 07100, Sassari</p>
                <p><strong>Responsabile per la protezione dati (DPO)</strong> è dott. Alessandro Asole, Z.I Predda Niedda str 1, raggiungibile al seguente indirizzo: <a href="mailto:privacy@prismaquality.com">privacy@prismaquality.com</a></p>
            </div>

            <div class="privacy-section">
                <h2>2) DATI PERSONALI TRATTATI</h2>
                <p>Acrisure Re Italia S.r.l. tratterà i seguenti dati personali degli utenti:</p>
                
                <h3>a) dati di navigazione</h3>
                <p>Vale a dire, dati personali la cui trasmissione è implicita nell'uso dei protocolli di comunicazione di Internet.</p>
                <p>In questa categoria di dati rientrano gli indirizzi IP o i nomi a dominio dei computer utilizzati dagli utenti che si connettono al sito, gli indirizzi in notazione URI (Uniform Resource Identifier) delle risorse richieste, l'orario della richiesta, il metodo utilizzato nel sottoporre la richiesta al server ed altri parametri relativi al sistema operativo e all'ambiente informatico dell'utente nonché, per quanto riguarda l'utilizzo dei servizi connessi, i dati anagrafici dell'utente. Per i dati personali trattati tramite l'utilizzo dei cookie, si rinvia alla <a href="/cookies/cookiesRe.php">relativa informativa</a>.</p>
                
                <h3>b) dati comunicati dall'utente</h3>
                <p>Vale a dire, tutti i dati che l'utente deciderà di condividere con Acrisure Re Italia S.r.l. per fruire dei servizi disponibili sul Sito web. In particolare, al fine di usufruire dei servizi offerti sul Sito web gli interessati potranno comunicare:</p>
                <ul>
                    <li>dati anagrafici e di contatto (es. nome, cognome, e-mail, telefono) forniti tramite la sezione "Contatti";</li>
                    <li>dati contenuti nel curriculum vitae trasmesso tramite la sezione "Lavora con noi";</li>
                    <li>altri dati che potranno essere richiesti in futuro attraverso nuove sezioni o servizi del Sito web (a titolo meramente esemplificativo e non esaustivo ad esempio, iscrizioni a newsletter, registrazioni ad aree riservate o analoghi strumenti di interazione);</li>
                    <li>dati presenti nei messaggi inviati a Acrisure Re Italia S.r.l. per richiedere informazioni.</li>
                </ul>
            </div>

            <div class="privacy-section">
                <h2>3) TIPOLOGIA DEI DATI TRATTATI, BASE GIURIDICA, FINALITA' DEL TRATTAMENTO, TEMPI DI CONSERVAZIONE, OBBLIGATORIETA' DEL CONFERIMENTO</h2>
                
                <table style="width:100%; border-collapse: collapse; margin: 20px 0;">
                    <thead>
                        <tr style="background-color: var(--secondary); color: white;">
                            <th style="border: 1px solid #ddd; padding: 8px;">TIPOLOGIA DEI DATI TRATTATI</th>
                            <th style="border: 1px solid #ddd; padding: 8px;">BASE GIURIDICA</th>
                            <th style="border: 1px solid #ddd; padding: 8px;">FINALITÀ DEL TRATTAMENTO</th>
                            <th style="border: 1px solid #ddd; padding: 8px;">TEMPI DI CONSERVAZIONE</th>
                            <th style="border: 1px solid #ddd; padding: 8px;">OBBLIGATORIETÀ CONFERIMENTO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="border: 1px solid #ddd; padding: 8px;"><strong>I.</strong> Dati di navigazione cookie tecnici (strettamente necessari) e cookie analitici</td>
                            <td style="border: 1px solid #ddd; padding: 8px;">art. 130 D.lgs. 196/2003</td>
                            <td style="border: 1px solid #ddd; padding: 8px;"><strong>Erogazione del contenuto del Sito web e analisi statistiche aggregate</strong></td>
                            <td style="border: 1px solid #ddd; padding: 8px;">Si rinvia a quanto riportato nell'<a href="/cookies/cookiesRe.php">informativa cookie</a>.</td>
                            <td style="border: 1px solid #ddd; padding: 8px;">Si rinvia a quanto riportato nell'<a href="/cookies/cookiesRe.php">informativa cookie</a>.</td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid #ddd; padding: 8px;"><strong>II.</strong> Dati anagrafici e di contatto Dati attinenti al bene che si intende assicurare</td>
                            <td style="border: 1px solid #ddd; padding: 8px;">Esecuzione di un contratto o di misure precontrattuali richieste dall'interessato (art. 6, par. 1, lett. b), GDPR)</td>
                            <td style="border: 1px solid #ddd; padding: 8px;"><strong>Erogazione dei servizi di "Richiesta di informazioni" e "richiesta di assistenza" nell'area "contattaci" Erogazione dei servizi di "consulenza"</strong></td>
                            <td style="border: 1px solid #ddd; padding: 8px;">2 anni dalla richiesta del servizio e dalla richiesta di preventivo (per i prospect) 10 anni dalla cessazione del rapporto contrattuale (per i clienti)</td>
                            <td style="border: 1px solid #ddd; padding: 8px;">Il mancato conferimento dei dati comporterà l'impossibilità per Acrisure Re Italia S.r.l. di erogare i servizi richiesti, ma non influirà sulla fruizione del Sito web da parte dell'utente.</td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid #ddd; padding: 8px;"><strong>III.</strong> Dati personali comuni forniti dall'interessato, compresi quelli inerenti recapiti e contatti.</td>
                            <td style="border: 1px solid #ddd; padding: 8px;">Consenso dell'interessato (art. 6, par. 1, lett. a), GDPR)</td>
                            <td style="border: 1px solid #ddd; padding: 8px;"><strong>MARKETING</strong> (a titolo esemplificativo e non esaustivo: invio di comunicazioni promozionali, vendita diretta, targeting e re-targeting, compimento di ricerche di mercato mediante modalità automatizzate e digitali ad es. SMS, Posta elettronica, App di messaggistica istantanea...)</td>
                            <td style="border: 1px solid #ddd; padding: 8px;">24 mesi dalla richiesta di preventivo o dalla richiesta di consulenza ovvero fino alla revoca del consenso dell'interessato se precedente.</td>
                            <td style="border: 1px solid #ddd; padding: 8px;">Il conferimento dei dati è facoltativo e nel caso in cui decida di non prestare il consenso al trattamento lei non subirà alcuna conseguenza negativa riguardo al contratto in essere ovvero in corso di costituzione.</td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid #ddd; padding: 8px;"><strong>IV.</strong> - dati personali, da lei forniti e/o acquisiti da terzi (con esclusione dei dati di categorie particolari), - dati di contatto (mail e telefono) - dati acquisiti tramite questionari su bisogni, interessi e preferenze, allo scopo di analizzare aspetti riguardanti, tra gli altri, situazione economica, preferenze personali, interessi, abitudini, comportamento, e per migliorare l'offerta della Società stessa e dalle Società del gruppo di appartenenza.</td>
                            <td style="border: 1px solid #ddd; padding: 8px;">Consenso dell'interessato (art. 6, par. 1, lett. a), GDPR)</td>
                            <td style="border: 1px solid #ddd; padding: 8px;"><strong>PROFILAZIONE</strong> (trattamento automatizzato di dati personali per analizzare o prevedere aspetti riguardanti la situazione economica, le preferenze personali, gli interessi, il comportamento ai fini dell'attività di marketing)</td>
                            <td style="border: 1px solid #ddd; padding: 8px;">12 mesi dalla richiesta di preventivo o dalla richiesta di consulenza ovvero fino alla revoca del consenso dell'interessato se precedente.</td>
                            <td style="border: 1px solid #ddd; padding: 8px;">Il conferimento dei dati è facoltativo e nel caso in cui decida di non prestare il consenso al trattamento lei non subirà alcuna conseguenza negativa riguardo al contratto in essere ovvero in corso di costituzione.</td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid #ddd; padding: 8px;"><strong>V.</strong> Dati anagrafici e dati forniti ad esempio in occasione della compilazione obbligatoria per legge di questionari relativi ai suoi profili di rischio</td>
                            <td style="border: 1px solid #ddd; padding: 8px;">Adempimento di obblighi legali cui è soggetto il titolare del trattamento (art. 6, par. 1, lett. c), GDPR)</td>
                            <td style="border: 1px solid #ddd; padding: 8px;"><strong>Adempimento di obblighi legali gravanti sul Titolare</strong> (es. obblighi regolamentari relativi al settore assicurativo, obblighi per l'accessibilità del Sito web, etc.)</td>
                            <td style="border: 1px solid #ddd; padding: 8px;">10 anni oppure il diverso termine previsto dalle norme di legge applicabili</td>
                            <td style="border: 1px solid #ddd; padding: 8px;">Il conferimento dei dati personali è implicito ogniqualvolta l'utente navighi sul Sito web e/o richieda di usufruire dei servizi offerti dal Sito web.</td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid #ddd; padding: 8px;"><strong>VI.</strong> Dati anagrafici e precontrattuali, e qualsiasi dato rilevante nel caso concreto</td>
                            <td style="border: 1px solid #ddd; padding: 8px;">Legittimo interesse di Acrisure Re Italia S.r.l. e/o di terzi ad esercitare il diritto di difesa e di tutela di diritti e/o interessi di Acrisure Re Italia S.r.l. e/o di terzi (art. 6, par. 1, lett. f), GDPR).</td>
                            <td style="border: 1px solid #ddd; padding: 8px;"><strong>Accertamento, esercizio o difesa di un diritto di Acrisure Re Italia S.r.l. o di terzi</strong></td>
                            <td style="border: 1px solid #ddd; padding: 8px;">Per tutto il tempo necessario alla definizione dell'eventuale situazione contenziosa o precontenziosa fino al definitivo passaggio in giudicato o decorso dei tempi di prescrizione.</td>
                            <td style="border: 1px solid #ddd; padding: 8px;">Il conferimento dei dati personali è implicito ogniqualvolta l'utente navighi sul Sito web e/o richieda di usufruire dei servizi offerti dal Sito web.</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="privacy-section">
                <h2>4) COMUNICAZIONE DEI DATI</h2>
                <p>Il trattamento dei dati personali per le finalità sopra illustrate sarà effettuato dal personale interno appositamente incaricato di Acrisure Re Italia S.r.l. che agirà sulla base di specifiche istruzioni fornite dal Titolare stesso.</p>
                <p>Inoltre, i dati personali potranno essere comunicati anche ai seguenti soggetti:</p>
                <ul>
                    <li>a) Agenti di assicurazione e soggetti che trattano i dati personali per le finalità sopra illustrate per conto di Acrisure Re Italia S.r.l., appositamente nominati responsabili del trattamento ai sensi dell'art. 28 GDPR (ad esempio, fornitori di servizi IT o sviluppatori del Sito web);</li>
                    <li>b) soggetti pubblici o privati (a titolo meramente esemplificativo, assicurazioni, banche, consulenti legali, pubbliche autorità, organi giudiziari, agenzia delle entrate), che tratteranno i dati personali in qualità di autonomi titolari del trattamento.</li>
                </ul>
            </div>

            <div class="privacy-section">
                <h2>5) TRASFERIMENTO DEI DATI</h2>
                <p>Fermo quanto previsto per il trattamento dei dati effettuato tramite cookie, per il quale si rinvia alla <a href="/cookies/cookiesRe.php">relativa informativa</a>, non è previsto il trasferimento dei dati personali verso Paesi non appartenenti allo Spazio Economico Europeo ("SEE") o verso organizzazioni internazionali.</p>
                <p>Qualora tale trasferimento dovesse rendersi necessario, saranno messe in atto le misure previste dal GDPR, previo aggiornamento anche della presente informativa.</p>
            </div>

            <div class="privacy-section">
                <h2>6) DIRITTI DELL'UTENTE</h2>
                <p>Ai sensi degli artt. 15-22 GDPR, gli interessati possono rivolgersi al Titolare per esercitare specifici diritti quali:</p>
                <ul>
                    <li><strong>Diritto di accesso</strong>: diritto di ottenere dal Titolare la conferma che sia o meno in corso un trattamento di dati personali e, in tal caso, di ottenere l'accesso ai dati personali e ad ulteriori informazioni su origine, finalità, categoria di dati trattati, destinatari di comunicazione e/o trasferimento dei dati, etc;</li>
                    <li><strong>Diritto di rettifica</strong>: diritto di ottenere dal Titolare la rettifica dei dati personali inesatti senza ingiustificato ritardo, nonché l'integrazione dei dati personali incompleti, anche fornendo una dichiarazione integrativa;</li>
                    <li><strong>Diritto alla cancellazione</strong>: diritto di ottenere dal Titolare la cancellazione dei dati personali senza ingiustificato ritardo nel caso in cui:
                        <ul>
                            <li>i dati personali non sono più necessari rispetto alle finalità del trattamento;</li>
                            <li>il consenso su cui si basa il trattamento è revocato e non sussiste altro fondamento giuridico per il trattamento;</li>
                            <li>i dati personali sono stati trattati illecitamente;</li>
                            <li>i dati personali devono essere cancellati per adempiere un obbligo legale previsto dal diritto dell'Unione o dello Stato membro cui è soggetto il titolare del trattamento;</li>
                        </ul>
                    </li>
                    <li><strong>Diritto di opposizione al trattamento</strong>: diritto di opporsi in qualsiasi momento, per motivi connessi alla propria situazione particolare, al trattamento dei dati personali di cui all'art. 6, co. 1, lett. e) o f), GDPR, compresa la profilazione sulla base di tali disposizioni;</li>
                    <li><strong>Diritto di limitazione di trattamento</strong>: diritto di ottenere dal Titolare la limitazione del trattamento, nei casi in cui sia contestata l'esattezza dei dati personali (per il periodo necessario al titolare del trattamento per verificare l'esattezza di tali dati personali), se il trattamento è illecito e/o l'interessato si è opposto al trattamento;</li>
                    <li><strong>Diritto alla portabilità dei dati</strong>: diritto di ricevere in un formato strutturato, di uso comune e leggibile da dispositivo automatico i dati personali e di trasmettere tali dati ad altro titolare del trattamento, solo per i casi in cui il trattamento sia basato sul consenso e per i soli dati trattati tramite strumenti elettronici.</li>
                </ul>
                <p>Per esercitare tali diritti, effettuare segnalazioni e/o chiedere chiarimenti sul trattamento dei dati personali, gli interessati possono inviare una e-mail all'indirizzo: <a href="mailto:acrisurereitalia@pec.it">acrisurereitalia@pec.it</a> oppure una raccomandata all'indirizzo: Acrisure Re Italia S.r.l., Via Mazzini 3, 07100, Sassari.</p>
            </div>

            <div class="privacy-section">
                <h2>7) MODALITÀ DI ESERCIZIO DEI DIRITTI</h2>
                <p><strong>Le ricordiamo inoltre che ha il diritto di proporre reclamo a un'autorità di controllo.</strong> In particolare, fatto salvo ogni altro ricorso amministrativo o giurisdizionale, l'interessato che ritenga che il trattamento che lo riguarda violi il GDPR ha il diritto di proporre reclamo all'autorità di controllo dello Stato membro in cui risiede o lavora abitualmente, ovvero dello Stato in cui si è verificata la presunta violazione. Per l'Italia, l'Autorità competente è il Garante per la Protezione dei Dati Personali</p>
            </div>

            <div class="privacy-section">
                <h2>8) MODIFICHE E AGGIORNAMENTI DELLA PRESENTE INFORMATIVA</h2>
                <p>Anche in considerazione dei futuri cambiamenti che potranno intervenire sulla normativa in materia di protezione dei dati personali, Acrisure Re Italia S.r.l. potrà integrare e/o aggiornare, in tutto o in parte, la presente informativa. Resta inteso che qualunque modifica, integrazione o aggiornamento le sarà comunicato in conformità alla normativa vigente, a mezzo pubblicazione sul sito internet <a href="/re.php">Acrisure Re Italia S.r.l.</a></p>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="footer-content">
            <div class="footer-column">
                <h3><i class="fas fa-building"></i>Sede Legale</h3>
                <ul class="footer-links">
                    <li><i class="fas fa-file-contract"></i>Acrisure Re Italia S.r.l.</li>
                    <!-- <li><i class="fas fa-id-card"></i> P.IVA: 13147890969</li> -->
                    <li><i class="fas fa-map-marker-alt"></i>Via Giuseppe Mazzini, 3 - 07100 Sassari</li><br>
                    <li><img src="/img/Acrisure Re Italia.jpg" class="logo-footer" alt=""></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3><i class="fas fa-map-marked-alt"></i>Sedi Italiane</h3>
                <ul class="footer-links">
                    <li><i class="fas fa-city"></i> <strong>Sassari (SS)</strong><br>Via Giuseppe Mazzini, 3 - 07100</li>
                    <li><i class="fas fa-city"></i> <strong>Milano (MI)</strong><br>Via Santa Maria Segreta 6 - 20123</li>
                    <li><i class="fas fa-city"></i> <strong>Roma (RM)</strong><br>Via Lovanio 6 - 00198</li>
                </ul>
            </div>
            
            <div class="footer-column">
                <h3><i class="fas fa-headset"></i>Contatti</h3>
                <ul class="footer-links">
                    <li><i class="fas fa-phone-alt"></i>Amministrazione: 079 2016047</li>
                    <li><i class="fas fa-phone-volume"></i>Customer Care: 079 2853063</li>
                    <li><i class="fas fa-envelope"></i> <a href="mailto:info@acrisure.it">info@acrisure.it</a></li>
                    <li><i class="fas fa-file-alt"></i> <a href="mailto:acrisurereitalia@pec.it">acrisurereitalia@pec.it</a></li>
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
                    <a href="#header">Privacy Policy</a>
                    <a href="/cookies/cookiesRe.php">Cookie Policy</a>
                    <a href="/legal&comp/legalRe.php">Legal & Compliance</a>
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
            <p>Acrisure Re Italia S.r.l. - Società con socio unico soggetta alla direzione e coordinamento di Acrisure S.r.l. - Cap.sociale € 120.000,00 i.v.
                Iscritta alla Sez. B del RUI n° B000729790, è soggetta alla vigilanza IVASS.
                I dati identificativi e di iscrizione sopra forniti possono essere verificati consultando il Registro Unico degli Intermediari (RUI) sul sito Ivass: <a href="https://ruipubblico.ivass.it/rui-pubblica/ng/#/home" target="_blank">www.ivass.it</a>.
                Società partecipante al Gruppo IVA Acrisure P.IVA 13147890969- Cod. Fiscale e n. iscr.al registro Imprese di Sassari n.02942110905 REA SS-217191
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