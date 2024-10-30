<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evan E | Portfolio</title>
    <link href="style/portfolio.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/8fc7bbbd50.js" crossorigin="anonymous"></script>
</head>
<body>
<div id="app">
    <?php include 'partials/navbar.php'; ?>

    <section id="A-propos">
        <div class="presentation">
            <div class="lines">
                <span class="ball"></span>
                <span class="line"></span>
            </div>
            <div class="prez">
                <h1><span style="color:#ffffff">Bonjour, je suis<span style="color:#915EFF"> Escabasse Evan</span></span></h1>
                <h2>Bievenue sur mon site portfolio !<br>Développeur Fullstack indépendant &amp; Fondateur du studio Pixeleur</h2>
            </div>
        </div>
    </section>

    <?php include 'partials/about.php'; ?>
    <?php include 'partials/skills.php'; ?>
    <?php include 'partials/experience.php'; ?>
    <?php include 'partials/portfolio.php'; ?>

    <script src="js/scripts.js"></script>
</div>
</body>
</html>
