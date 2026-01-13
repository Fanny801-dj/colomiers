<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>US Colomiers - SAE 301</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=PT+Sans+Narrow:wght@400;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/index.css">
</head>
<?php
 include "./php/components/header.php";
?>

<body>

    <section class="hero-section">
        <div class="hero-content">
            <h1 class="hero-title">US Colomiers Football</h1>
            <p class="hero-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
    </section>

    <section class="match-weather-container">
        <div class="match-box">
            <div class="match-info">
                <span class="match-label">PROCHAIN MATCH - NATIONAL 3</span>
                <div class="versus">
                    <span class="team">US COLOMIERS</span>
                    <span class="vs">VS</span>
                    <span class="team">STADE BORDELAIS</span>
                </div>
                <div class="date-time">Samedi 24 Janvier - 18h00</div>
            </div>
            
            <div class="separator"></div>

            <div class="weather-info">
                <span class="weather-label">MÉTÉO DU MATCH</span>
                <div class="weather-data">
                    <span class="weather-icon">☁️</span> 
                    <span class="temperature">12°C</span>
                </div>
                <span class="weather-desc">Nuageux</span>
            </div>
        </div>
    </section>

    <section class="news-section">
        <div class="container">
            <h2 class="section-title">Dernières Actus</h2>
            
            <div class="news-grid">
                <article class="news-card">
                    <img src="" alt="Image Actualité" class="news-img">
                    
                    <div class="news-content">
                        <h3 class="news-title">Victoire éclatante de l'équipe réserve</h3>
                        <p class="news-meta">Nom Prénom - 12/01/2026</p>
                        <a href="#" class="read-more">Lire l'article</a>
                    </div>
                </article>

                </div>
        </div>
    </section>

    <section class="partners-section">
        <div class="container">
            <h2 class="section-title">Nos partenaires</h2>
            
            <div class="partners-grid">
                <div class="partner-box">
                    <img src="" alt="Partenaire" class="partner-logo">
                    <span class="partner-name">Nom partenaire</span>
                </div>
                <div class="partner-box">
                    <img src="" alt="Partenaire" class="partner-logo">
                    <span class="partner-name">Nom partenaire</span>
                </div>
                <div class="partner-box">
                    <img src="" alt="Partenaire" class="partner-logo">
                    <span class="partner-name">Nom partenaire</span>
                </div>
                <div class="partner-box">
                    <img src="" alt="Partenaire" class="partner-logo">
                    <span class="partner-name">Nom partenaire</span>
                </div>
                <div class="partner-box">
                    <img src="" alt="Partenaire" class="partner-logo">
                    <span class="partner-name">Nom partenaire</span>
                </div>
            </div>
        </div>
    </section>

</body>

<?php
 include "./php/components/footer.php";
?>

</html>