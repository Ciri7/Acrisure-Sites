<?php include('../includes/auth.php'); ?>
<?php
// Recupera l'ID dell'articolo dalla query string
$article_id = isset($_GET['id']) ? intval($_GET['id']) : 1;

// Array con i dati degli articoli
$articles = [
    1 => [
        'title' => 'Nuova partnership nel settore agricolo',
        'date' => '15 Marzo 2024',
        'image' => '/img/news1-large.jpg',
        'author' => 'Marco Rossi',
        'author_img' => '/img/author1.jpg',
        'content' => '
            <p>Acrisure Agricolture è lieta di annunciare una nuova collaborazione strategica con il Consorzio Agricolo Nazionale (CAN), il principale consorzio agricolo italiano, per offrire soluzioni assicurative ancora più vantaggiose e su misura per gli operatori del settore agricolo.</p>
            
            <h2>Una partnership che unisce competenze</h2>
            
            <p>Questa partnership unisce l\'esperienza pluriennale di Acrisure nel settore assicurativo con la profonda conoscenza del settore agricolo del CAN. Insieme, svilupperemo polizze innovative che rispondano alle reali esigenze degli agricoltori italiani, con particolare attenzione alla sostenibilità e alla gestione del rischio climatico.</p>
            
            <blockquote>
                "Siamo entusiasti di questa collaborazione con il Consorzio Agricolo Nazionale. Insieme possiamo offrire soluzioni realmente personalizzate che proteggano il lavoro e gli investimenti degli agricoltori italiani", ha dichiarato il CEO di Acrisure Italia.
            </blockquote>
            
            <h3>Le nuove soluzioni</h3>
            
            <p>Tra le novità introdotte da questa partnership:</p>
            
            <ul>
                <li>Polizze multirischio per coltivazioni con coperture estese</li>
                <li>Soluzioni per la protezione dagli eventi climatici estremi</li>
                <li>Coperture innovative per le nuove tecniche di agricoltura sostenibile</li>
                <li>Servizi di consulenza e risk management dedicati</li>
            </ul>
            
            <img src="/img/agricoltura1.jpg" alt="Agricoltura sostenibile">
            <p class="image-caption">Nuove tecniche di agricoltura sostenibile che saranno coperte dalle polizze</p>
            
            <h2>Vantaggi per gli associati CAN</h2>
            
            <p>Gli associati al Consorzio Agricolo Nazionale avranno accesso a condizioni privilegiate e a un servizio dedicato, con consulenti specializzati nel settore agricolo. Inoltre, sarà disponibile una piattaforma digitale per la gestione delle polizze e la segnalazione dei sinistri con tempi di risposta rapidi.</p>
            
            <p>Le nuove polizze saranno disponibili a partire dal prossimo mese di aprile in tutte le sedi del CAN e attraverso i canali digitali di Acrisure Agricolture.</p>
            
            <h3>Prospettive future</h3>
            
            <p>Questa partnership rappresenta solo il primo passo di una collaborazione più ampia che vedrà Acrisure e il CAN lavorare insieme su progetti di ricerca e sviluppo per creare prodotti assicurativi sempre più innovativi e rispondenti alle esigenze del settore agricolo italiano.</p>
        ',
        'tags' => ['Agricoltura', 'Partnership', 'Innovazione', 'Assicurazioni'],
        'related' => [4, 5, 6]
    ],
    2 => [
        'title' => 'Premio Innovazione Assicurativa 2024',
        'date' => '28 Febbraio 2024',
        'image' => '/img/news2-large.jpg',
        'author' => 'Laura Bianchi',
        'author_img' => '/img/author2.jpg',
        'content' => '
            <p>Acrisure Italia si è aggiudicata il prestigioso Premio Innovazione Assicurativa 2024 per la sua piattaforma digitale di risk management avanzato, riconoscimento che conferma la leadership dell\'azienda nel campo della tecnologia applicata al settore assicurativo.</p>
            
            <h2>Una piattaforma rivoluzionaria</h2>
            
            <p>La piattaforma premiata rappresenta un punto di riferimento nel settore, combinando intelligenza artificiale, analisi predittiva e machine learning per offrire soluzioni di risk management personalizzate e proattive.</p>
            
            <blockquote>
                "Questo premio riconosce il nostro impegno costante nell\'innovazione tecnologica. Siamo orgogliosi di essere all\'avanguardia nel settore assicurativo italiano", ha commentato il CTO di Acrisure Italia.
            </blockquote>
            
            <p>La cerimonia di premiazione si è tenuta a Roma alla presenza delle principali autorità del settore assicurativo italiano.</p>
        ',
        'tags' => ['Innovazione', 'Premio', 'Tecnologia', 'Risk Management'],
        'related' => [1, 3, 6]
    ],
    3 => [
        'title' => 'Espansione della rete italiana',
        'date' => '10 Gennaio 2024',
        'image' => '/img/news3-large.jpg',
        'author' => 'Giuseppe Verdi',
        'author_img' => '/img/author3.jpg',
        'content' => '
            <p>Acrisure Italia annuncia l\'apertura del nuovo ufficio di Torino, rafforzando ulteriormente la sua presenza sul territorio nazionale con un team specializzato in assicurazioni per il settore automotive.</p>
            
            <h2>Nuove opportunità nel settore automotive</h2>
            
            <p>Il nuovo ufficio, situato in via Roma 123, sarà dedicato esclusivamente alle esigenze del settore automotive, offrendo soluzioni assicurative tailor-made per concessionarie, officine e aziende di trasporto.</p>
            
            <p>Con questa apertura, Acrisure Italia consolida la sua presenza in Piemonte e rafforza il suo impegno nel supportare le imprese del territorio.</p>
        ',
        'tags' => ['Espansione', 'Torino', 'Automotive', 'Crescita'],
        'related' => [1, 2, 4]
    ],
    4 => [
        'title' => 'Nuovo servizio di welfare',
        'date' => '5 Dicembre 2023',
        'image' => '/img/news4-large.jpg',
        'author' => 'Maria Rossi',
        'author_img' => '/img/author4.jpg',
        'content' => '
            <p>Acrisure Italia lancia un innovativo pacchetto di benefit per i dipendenti delle aziende clienti, offrendo soluzioni di welfare personalizzabili che rispondono alle esigenze specifiche di ogni realtà aziendale.</p>
            
            <h2>Welfare su misura</h2>
            
            <p>Il nuovo servizio permette alle aziende di costruire pacchetti benefit modulari, scegliendo tra diverse opzioni tra cui assicurazioni sanitarie, previdenza complementare, buoni pasto e servizi di conciliazione vita-lavoro.</p>
        ',
        'tags' => ['Welfare', 'Benefit', 'Risorse Umane', 'Servizi'],
        'related' => [1, 5, 6]
    ],
    5 => [
        'title' => 'Convegno annuale',
        'date' => '20 Novembre 2023',
        'image' => '/img/news5-large.jpg',
        'author' => 'Andrea Neri',
        'author_img' => '/img/author5.jpg',
        'content' => '
            <p>Successo per il convegno "Innovazione e assicurazioni" organizzato da Acrisure Italia a Milano, che ha riunito oltre 300 professionisti del settore per discutere le nuove frontiere dell\'assicurazione digitale.</p>
            
            <h2>Un evento di riferimento</h2>
            
            <p>L\'evento ha rappresentato un momento di confronto importante per tutto il settore assicurativo italiano, con interventi di esperti nazionali e internazionali.</p>
        ',
        'tags' => ['Convegno', 'Evento', 'Milano', 'Innovazione'],
        'related' => [2, 3, 4]
    ]
];

// Se l'ID non esiste, reindirizza all'articolo 1
if (!isset($articles[$article_id])) {
    $article_id = 1;
}

$article = $articles[$article_id];
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News - Alta Broker & Partners</title>
    <meta name="description" content="Acrisure Agricolture annuncia una collaborazione strategica con il principale consorzio agricolo nazionale per offrire polizze ancora più vantaggiose.">
    <meta name="keywords" content="assicurazioni agricole, partnership Acrisure, polizze agricoltura, Acrisure Agricolture">
    <link rel="canonical" href="https://www.acrisureitalia.com/news-article.html?id=1" />
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
        .article-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('/img/777.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            height: 50vh;
            min-height: 400px;
            display: flex;
            align-items: center;
            padding-top: 80px;
            color: white;
            text-align: center;
        }
        
        .article-hero-content {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 5%;
            width: 100%;
        }
        
        .article-hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }
        
        .breadcrumb {
            display: flex;
            justify-content: center;
            margin-bottom: 2rem;
            font-size: 1rem;
            opacity: 0.9;
        }
        
        .breadcrumb a {
            color: var(--accent);
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .breadcrumb a:hover {
            color: white;
            text-decoration: underline;
        }
        
        .breadcrumb span {
            margin: 0 0.5rem;
            color: rgba(255, 255, 255, 0.7);
        }
        
        /* Article Content */
        .news-article {
            max-width: 900px;
            margin: 0 auto;
            padding: 0 5% 6rem;
        }
        
        .article-header {
            margin-bottom: 3rem;
        }
        
        .news-date {
            font-size: 1rem;
            color: var(--accent);
            margin-bottom: 1rem;
            display: block;
        }
        
        .article-header h1 {
            color: var(--secondary);
            font-size: 2.5rem;
            line-height: 1.3;
            margin-bottom: 1.5rem;
        }
        
        .article-meta {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            color: #666;
            font-size: 0.9rem;
        }
        
        .article-meta .author {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .article-meta .author img {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            object-fit: cover;
        }
        
        .article-image {
            width: 100%;
            height: 500px;
            object-fit: cover;
            border-radius: 8px;
            margin: 2rem 0 3rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        .article-content {
            line-height: 1.8;
            font-size: 1.1rem;
            color: #333;
        }
        
        .article-content p {
            margin-bottom: 1.8rem;
        }
        
        .article-content h2 {
            color: var(--secondary);
            margin: 3rem 0 1.5rem;
            font-size: 1.8rem;
            line-height: 1.4;
        }
        
        .article-content h3 {
            color: var(--secondary);
            margin: 2.5rem 0 1.2rem;
            font-size: 1.5rem;
        }
        
        .article-content ul, .article-content ol {
            margin: 1.5rem 0 1.5rem 2rem;
        }
        
        .article-content li {
            margin-bottom: 0.8rem;
        }
        
        .article-content blockquote {
            border-left: 4px solid var(--accent);
            padding: 1rem 1.5rem;
            margin: 2.5rem 0;
            font-style: italic;
            color: #555;
            background-color: rgba(77, 143, 209, 0.05);
            border-radius: 0 4px 4px 0;
        }
        
        .article-content img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin: 2rem 0;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .article-content .image-caption {
            text-align: center;
            font-size: 0.9rem;
            color: #666;
            margin-top: -1.5rem;
            margin-bottom: 2rem;
        }
        
        /* Article Footer */
        .article-footer {
            margin-top: 5rem;
            padding-top: 3rem;
            border-top: 1px solid #eee;
        }
        
        .tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.8rem;
            margin-bottom: 3rem;
        }
        
        .tag {
            display: inline-block;
            padding: 0.6rem 1.2rem;
            background-color: rgba(77, 143, 209, 0.1);
            color: var(--accent);
            border-radius: 20px;
            font-size: 0.9rem;
            text-decoration: none;
            transition: all 0.3s;
            font-weight: 500;
        }
        
        .tag:hover {
            background-color: var(--accent);
            color: white;
        }
        
        .social-share {
            display: flex;
            gap: 1rem;
            margin-bottom: 3rem;
        }
        
        .share-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #f5f5f5;
            color: var(--secondary);
            transition: all 0.3s;
        }
        
        .share-btn:hover {
            background-color: var(--accent);
            color: white;
            transform: translateY(-3px);
        }
        
        .back-to-news {
            display: inline-flex;
            align-items: center;
            color: var(--accent);
            font-weight: 600;
            text-decoration: none;
            margin-top: 2rem;
            padding: 0.8rem 1.5rem;
            border: 2px solid var(--accent);
            border-radius: 4px;
            transition: all 0.3s;
        }
        
        .back-to-news i {
            margin-right: 0.5rem;
            transition: transform 0.3s;
        }
        
        .back-to-news:hover {
            background-color: var(--accent);
            color: white;
        }
        
        .back-to-news:hover i {
            transform: translateX(-5px);
        }
        
        /* Related News */
        .related-news {
            margin-top: 5rem;
        }
        
        .related-news h2 {
            color: var(--secondary);
            margin-bottom: 3rem;
            font-size: 1.8rem;
            text-align: center;
            position: relative;
            padding-bottom: 1rem;
        }
        
        .related-news h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: var(--accent);
        }
        
        .related-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }
        
        .related-card {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s;
            border: 1px solid #eee;
        }
        
        .related-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
            border-color: var(--accent);
        }
        
        .related-image {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }
        
        .related-content {
            padding: 1.5rem;
        }
        
        .related-date {
            font-size: 0.8rem;
            color: var(--accent);
            margin-bottom: 0.5rem;
            display: block;
        }
        
        .related-card h3 {
            color: var(--secondary);
            margin-bottom: 1rem;
            font-size: 1.2rem;
            line-height: 1.4;
        }
        
        .related-link {
            display: inline-flex;
            align-items: center;
            color: var(--accent);
            font-weight: 600;
            text-decoration: none;
            font-size: 0.9rem;
            transition: all 0.3s;
        }
        
        .related-link i {
            margin-left: 0.5rem;
            transition: transform 0.3s;
        }
        
        .related-link:hover {
            color: var(--primary);
        }
        
        .related-link:hover i {
            transform: translateX(5px);
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

        .logo-footer {
            height: 50px;
            transition: transform 0.3s;
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
            .article-hero h1 {
                font-size: 2.8rem;
            }
            
            .article-image {
                height: 400px;
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
            
            .article-hero {
                height: 50vh;
                min-height: 400px;
            }
            
            .article-header h1 {
                font-size: 2.2rem;
            }
            
            .article-image {
                height: 300px;
            }
            
            .article-meta {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.5rem;
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
        }
        
        @media (max-width: 480px) {
            .article-hero h1 {
                font-size: 2rem;
            }
            
            .article-header h1 {
                font-size: 1.8rem;
            }
            
            .article-image {
                height: 250px;
            }
            
            .related-grid {
                grid-template-columns: 1fr;
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
    <header id="header">
        <div class="navbar">
            <div class="navbar-brand">
                <a href="/altabroker.php">
                    <img src="/img/logoAltaBroker.png" alt="Acrisure Services Logo" class="logo">
                </a>
                <div class="menu-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <nav>
                <ul>
                    <li><a href="/altabroker.php#news" class="nav-link">News</a></li>
                    <li><a href="/altabroker.php#gruppo" class="nav-link">Leadership</a></li>
                    <li><a href="/altabroker.php#services" class="nav-link">Servizi</a></li>
                    <li><a href="/index.php#gruppo" class="nav-link">Il Nostro Gruppo</a></li>
                    <li><a href="/lavora-con-noi/lcn-acrisure.php" class="nav-link">Lavora con noi</a></li>
                </ul>
            </nav>
            <nav class="language-switcher">
                <ul>
                    <li><a onclick="window.location.href='#'" class="language-btn active">IT</a></li>
                    <li><a href="/eng/" class="language-btn">EN</a></li>
            </nav>
        </div>
    </header>

    <!-- Article Hero -->
    <section class="article-hero">
        <div class="article-hero-content">
            <h1>News & Aggiornamenti</h1>
        </div>
    </section>

    <!-- Article Content -->
    <article class="news-article">
        <div class="article-header">
            <span class="news-date"><?php echo $article['date']; ?></span>
            <h1><?php echo htmlspecialchars($article['title']); ?></h1>
            <div class="article-meta">
                <span class="author"><img src="<?php echo $article['author_img']; ?>" alt="Autore"> <?php echo $article['author']; ?></span>
                <span>•</span>
                <span>3 minuti di lettura</span>
            </div>
        </div>
        
        <img src="<?php echo $article['image']; ?>" alt="<?php echo htmlspecialchars($article['title']); ?>" class="article-image">
        
        <div class="article-content">
            <?php echo $article['content']; ?>
        </div>
        
        <div class="article-footer">
            <div class="tags">
                <?php foreach ($article['tags'] as $tag): ?>
                    <a href="#" class="tag"><?php echo $tag; ?></a>
                <?php endforeach; ?>
            </div>
            
            <div class="social-share">
                <span>Condividi:</span>
                <a href="#" class="share-btn" aria-label="Condividi su Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="share-btn" aria-label="Condividi su LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="share-btn" aria-label="Condividi su Twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" class="share-btn" aria-label="Condividi via Email"><i class="fas fa-envelope"></i></a>
            </div>
            
            <a href="../news/newsAltabroker.php" class="back-to-news"><i class="fas fa-arrow-left"></i> Torna alle news</a>
            
            <div class="related-news">
                <h2>Potrebbero interessarti anche</h2>
                <div class="related-grid">
                    <?php 
                    $related_articles = [
                        4 => ['title' => 'Nuovo servizio di risk management', 'date' => '5 Dicembre 2023', 'image' => '/img/news4.jpg'],
                        5 => ['title' => 'Partnership con l\'Università di Sassari', 'date' => '20 Novembre 2023', 'image' => '/img/news5.jpg'],
                        6 => ['title' => 'Successo dell\'evento annuale Acrisure Italia', 'date' => '15 Ottobre 2023', 'image' => '/img/news6.jpg']
                    ];
                    
                    foreach ($article['related'] as $related_id): 
                        if (isset($related_articles[$related_id])):
                            $related = $related_articles[$related_id];
                    ?>
                    <article class="related-card">
                        <img src="<?php echo $related['image']; ?>" alt="<?php echo htmlspecialchars($related['title']); ?>" class="related-image">
                        <div class="related-content">
                            <span class="related-date"><?php echo $related['date']; ?></span>
                            <h3><?php echo htmlspecialchars($related['title']); ?></h3>
                            <a href="singleAcrisure.php?id=<?php echo $related_id; ?>" class="related-link">Leggi l'articolo <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>
                    <?php 
                        endif;
                    endforeach; 
                    ?>
                </div>
            </div>
        </div>
    </article>

    <!-- FOOTER ------------------------------------------------------------------------------------------------------------------ -->
    <footer>
        <div class="footer-content">
            <div class="footer-column">
                <h3><i class="fas fa-building"></i>Sede Legale</h3>
                <ul class="footer-links">
                    <li><i class="fas fa-file-contract"></i>Alta Broker & Partners S.r.l.</li>
                    <!-- <li><i class="fas fa-id-card"></i> P.IVA: 13147890969</li> -->
                    <li><i class="fas fa-map-marker-alt"></i>Via Assarotti, 5/1 - 16122 Genova</li><br>
                    <li><img src="/img/logoAltaBroker.png" class="logo-footer" alt=""></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3><i class="fas fa-map-marked-alt"></i>Sedi Italiane</h3>
                <ul class="footer-links">
                    <li><i class="fas fa-city"></i> <strong>Genova (GE)</strong><br>Via Assarotti, 5 - 16122</li>
                    <li><i class="fas fa-city"></i> <strong>Tortona (AL)</strong><br>Corso Montebello, 5 - 15057</li>
                </ul>
            </div>
            
            <div class="footer-column">
                <h3><i class="fas fa-headset"></i>Contatti</h3>
                <ul class="footer-links">
                    <li><i class="fas fa-phone-alt"></i>Amministrazione: 010 9860606</li>
                    <li><i class="fas fa-fax"></i>Telefax: +39 010 9868018</li>
                    <li><i class="fas fa-envelope"></i> <a href="mailto:info@altabroker.it">info@altabroker.it</a></li>
                    <li><i class="fas fa-envelope"></i> <a href="mailto:altabrokerandpartners@pec.it">altabrokerandpartners@pec.it</a></li>
                </ul>
                
                <div class="social-links">
                    <a href="https://it.linkedin.com/company/acrisureitalia" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                    <a href="https://www.instagram.com/acrisureitalia/" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                </div>

                <br>
                <div class="footer-column">
                    <h3><i class="fas fa-exclamation-circle"></i> <a href="/reclami/reclamiAltabroker.php" class="footer-title-link">Reclami</a></h3>
                    <ul class="footer-links">
                        <li><i class="fas fa-envelope"></i> <a href="mailto: reclami@altabroker.it"> reclami@altabroker.it</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-column">
                <h3><i class="fas fa-clock"></i> Orari Ufficio</h3>
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
                    <a href="/policy/policyAltabroker.php">Privacy Policy</a>
                    <a href="/cookies/cookiesAltabroker.php">Cookie Policy</a>
                    <a href="/legal&comp/legalAltabroker.php">Legal & Compliance</a>
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
            <p>Alta Broker & Partners S.r.l. - Società con socio unico soggetta alla direzione e coordinamento di Acrisure S.r.l.- Cap. sociale € 60.000,00 i.v. REA GE-494327
                Iscritta nella Sezione B del RUI al n°000605520, è soggetta alla vigilanza IVASS.
                I dati identificativi e di iscrizione sopra forniti possono essere verificati consultando il Registro Unico degli Intermediari (RUI) sul sito Ivass: <a href="https://ruipubblico.ivass.it/rui-pubblica/ng/#/home" target="_blank">www.ivass.it</a>.
                P.IVA 02547920997 Cod. Fiscale e n. iscr. Registro Imprese di Genova 02547920997.
            </p>
        </div>
    </footer>

    <!-- Cookie banner -->
    <!-- <div id="cookie-banner" class="cookie-banner">
        <p>Utilizziamo cookie per migliorare la tua esperienza. <a href="/cookies/cookiesAcrisure.html">Maggiori informazioni</a></p>
        <button id="accept-cookies" class="btn">Accetta</button>
    </div> -->

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
        
        // Animazione al caricamento della pagina
        window.addEventListener('load', () => {
            // Animazione dell'hero
            const heroContent = document.querySelector('.article-hero-content');
            heroContent.style.opacity = '1';
            heroContent.style.transform = 'translateY(0)';
            
            // Animazione del contenuto dell'articolo
            const articleContent = document.querySelector('.article-content');
            articleContent.style.opacity = '1';
        });
        
        // Funzionalità di condivisione
        document.querySelectorAll('.share-btn').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                const type = this.querySelector('i').classList[1];
                
                let url = '';
                const currentUrl = encodeURIComponent(window.location.href);
                const title = encodeURIComponent(document.title);
                
                switch(type) {
                    case 'fa-facebook-f':
                        url = `https://www.facebook.com/sharer/sharer.php?u=${currentUrl}`;
                        break;
                    case 'fa-linkedin-in':
                        url = `https://www.linkedin.com/shareArticle?mini=true&url=${currentUrl}&title=${title}`;
                        break;
                    case 'fa-twitter':
                        url = `https://twitter.com/intent/tweet?url=${currentUrl}&text=${title}`;
                        break;
                    case 'fa-envelope':
                        url = `mailto:?subject=${title}&body=Leggi questo articolo: ${currentUrl}`;
                        break;
                }
                
                if (url) {
                    window.open(url, '_blank', 'width=600,height=400');
                }
            });
        });
    </script>
</body>
</html>