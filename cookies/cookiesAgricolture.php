<?php include('../../includes/auth.php'); ?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acrisure Agricolture - Cookie Policy</title>
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
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/img/colture3.jpg');
            background-size: cover;
            background-position: center;
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

    <section class="policy-hero">
        <div class="hero-content">
            <h1>Cookie Policy</h1>
        </div>
    </section>

    <div class="policy-container">
        <div class="policy-section">
            <h2>Introduzione</h2>
            <p>Questa Cookie Policy spiega come Acrisure Italia ("noi", "nostro" o "nostri") utilizza i cookie e tecnologie simili quando visiti il nostro sito web <a href="https://www.acrisureitalia.com">www.acrisureitalia.com</a> ("Sito"). Ti informiamo su cosa sono i cookie, come li utilizziamo e come puoi gestirli.</p>
            <p>Utilizzando il nostro Sito, acconsenti all'uso dei cookie in conformità con questa Cookie Policy. Se non accetti il nostro uso dei cookie, ti preghiamo di disabilitarli seguendo le istruzioni in questa policy o di non utilizzare il nostro Sito.</p>
        </div>

        <div class="policy-section">
            <h2>Cosa sono i cookie?</h2>
            <p>I cookie sono piccoli file di testo che i siti web visitati dall'utente inviano e registrano sul suo computer o dispositivo mobile, per essere poi ritrasmessi agli stessi siti alla visita successiva. Grazie ai cookie, un sito ricorda le azioni e le preferenze dell'utente (come dati di accesso, lingua, dimensioni dei caratteri, altre impostazioni di visualizzazione, ecc.) in modo che non debbano essere indicate nuovamente quando l'utente torna a visitare detto sito o naviga da una pagina all'altra dello stesso.</p>
            <p>I cookie sono utilizzati per eseguire autenticazioni informatiche, monitoraggio di sessioni e memorizzazione di informazioni riguardanti le attività degli utenti che accedono a un sito e possono contenere anche un codice identificativo univoco che consente di tenere traccia della navigazione dell'utente all'interno del sito stesso per finalità statistiche o pubblicitarie.</p>
        </div>

        <div class="policy-section">
            <h2>Tipi di cookie che utilizziamo</h2>
            <p>Il nostro Sito utilizza diverse tipologie di cookie, ciascuna con una specifica funzione:</p>
            
            <h3>1. Cookie tecnici</h3>
            <p>Questi cookie sono essenziali per il corretto funzionamento del nostro Sito e per consentirti di navigare e utilizzare le sue funzionalità. Senza questi cookie, alcune funzionalità del Sito potrebbero non essere disponibili.</p>
            <ul>
                <li><strong>Cookie di sessione</strong>: vengono cancellati quando chiudi il browser e sono necessari per il funzionamento del sito (es. mantenimento della sessione di navigazione).</li>
                <li><strong>Cookie di funzionalità</strong>: ricordano le tue scelte (come lingua o regione) per migliorare la tua esperienza.</li>
            </ul>
            
            <h3>2. Cookie analitici</h3>
            <p>Questi cookie ci aiutano a comprendere come i visitatori interagiscono con il nostro Sito, fornendoci informazioni sul numero di visitatori, le pagine visitate, il tempo trascorso sul sito, ecc. Utilizziamo queste informazioni per migliorare il nostro Sito e l'esperienza dell'utente.</p>
            <p>Questi cookie sono raccolti in forma anonima e aggregata.</p>
            
            <h3>3. Cookie di terze parti</h3>
            <p>Alcune pagine del nostro Sito possono contenere cookie di terze parti che gestiscono contenuti e servizi come social plugin o servizi di analisi. Queste terze parti possono impostare cookie propri per tracciare l'attività dell'utente e fornire i propri servizi.</p>
            <p>Non abbiamo controllo sul contenuto di questi cookie, che sono gestiti interamente dalle terze parti secondo le loro rispettive policy.</p>
        </div>

        <div class="policy-section">
            <h2>Dettaglio dei cookie utilizzati</h2>
            <p>Di seguito è riportato un elenco dettagliato dei cookie utilizzati sul nostro Sito:</p>
            
            <table>
                <thead>
                    <tr>
                        <th>Nome cookie</th>
                        <th>Tipo</th>
                        <th>Scopo</th>
                        <th>Durata</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>PHPSESSID</td>
                        <td>Tecnico</td>
                        <td>Mantiene lo stato della sessione dell'utente durante la navigazione</td>
                        <td>Fino alla chiusura del browser</td>
                    </tr>
                    <tr>
                        <td>cookie_consent</td>
                        <td>Tecnico</td>
                        <td>Memorizza la scelta dell'utente riguardo l'accettazione dei cookie</td>
                        <td>1 anno</td>
                    </tr>
                    <tr>
                        <td>_ga</td>
                        <td>Analitico (Google Analytics)</td>
                        <td>Distingue gli utenti unici assegnando un numero generato casualmente come identificatore del cliente</td>
                        <td>2 anni</td>
                    </tr>
                    <tr>
                        <td>_gid</td>
                        <td>Analitico (Google Analytics)</td>
                        <td>Distingue gli utenti</td>
                        <td>24 ore</td>
                    </tr>
                    <tr>
                        <td>_gat</td>
                        <td>Analitico (Google Analytics)</td>
                        <td>Utilizzato per limitare la frequenza delle richieste</td>
                        <td>1 minuto</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="policy-section">
            <h2>Come gestire i cookie</h2>
            <p>Puoi gestire le tue preferenze sui cookie attraverso le impostazioni del tuo browser. La maggior parte dei browser ti permette di:</p>
            <ul>
                <li>Visualizzare i cookie presenti sul tuo dispositivo e cancellarli</li>
                <li>Bloccare i cookie di terze parti</li>
                <li>Bloccare i cookie da determinati siti</li>
                <li>Bloccare l'impostazione di tutti i cookie</li>
                <li>Cancellare tutti i cookie quando chiudi il browser</li>
            </ul>
            
            <p>Se scegli di disabilitare i cookie, alcune parti del nostro Sito potrebbero non funzionare correttamente. Alcune funzionalità potrebbero non essere disponibili e alcune pagine potrebbero non essere visualizzate correttamente.</p>
            
            <h3>Guide per browser specifici:</h3>
            <ul>
                <li><a href="https://support.google.com/chrome/answer/95647" target="_blank">Google Chrome</a></li>
                <li><a href="https://support.mozilla.org/it/kb/Attivare%20e%20disattivare%20i%20cookie" target="_blank">Mozilla Firefox</a></li>
                <li><a href="https://support.microsoft.com/it-it/help/17442/windows-internet-explorer-delete-manage-cookies" target="_blank">Internet Explorer</a></li>
                <li><a href="https://support.apple.com/it-it/guide/safari/sfri11471/mac" target="_blank">Safari</a></li>
                <li><a href="https://help.opera.com/en/latest/web-preferences/#cookies" target="_blank">Opera</a></li>
            </ul>
            
            <p>Per disattivare specificamente i cookie di Google Analytics, puoi scaricare il componente aggiuntivo del browser disponibile al seguente link: <a href="https://tools.google.com/dlpage/gaoptout" target="_blank">https://tools.google.com/dlpage/gaoptout</a></p>
        </div>

        <div class="policy-section">
            <h2>Modifiche alla Cookie Policy</h2>
            <p>Ci riserviamo il diritto di apportare modifiche a questa Cookie Policy in qualsiasi momento. Tutte le modifiche saranno pubblicate su questa pagina e, se significative, verranno comunicate attraverso un avviso ben visibile sul nostro Sito.</p>
            <p>Ti invitiamo a consultare periodicamente questa pagina per essere informato su eventuali cambiamenti.</p>
        </div>

        <div class="policy-section">
            <h2>Contatti</h2>
            <p>Per qualsiasi domanda o richiesta di chiarimenti riguardanti questa Cookie Policy, puoi contattarci:</p>
            <ul>
                <li>Via email: <a href="mailto:privacy@acrisureitalia.com">privacy@acrisureitalia.com</a></li>
                <li>Per posta: Acrisure S.r.l. - Via Giuseppe Mazzini, 3 - 07100 Sassari (SS)</li>
            </ul>
        </div>

        <p class="last-updated">Ultimo aggiornamento: 15 Giugno 2024</p>
    </div>

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
                    <a href="/policy/policyAgricolture.html">Privacy Policy</a>
                    <a href="#header">Cookie Policy</a>
                    <a href="/legal&comp/legalAgricolture.html">Legal & Compliance</a>
                </div>
            </div>
            <div class="footer-badge">
                <img src="/img/ivass-badge.png" alt="Autorizzato IVASS" width="80">
            </div>
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
                    // window.location.href = '/en/services.html';
                } else {
                    // Cambia a italiano
                    console.log('Cambio a italiano');
                    // window.location.href = '/services.html';
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