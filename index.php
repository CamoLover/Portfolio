<?php

session_start();

// Get the target page parameter
$targetPage = isset($_GET['P']) ? $_GET['P'] : '0';

?>

<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://kit.fontawesome.com/8fc7bbbd50.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/styless.css">
    
    <title>Evan E - Portfolio</title>
</head>
    <!-- Header -->
    <header id="top">
        <div class="header-content">
            <h1>Evan E - Portfolio </h1>
        </div>
        <div class="menuHeader">
            <a href="?P=0" class="headerLink" ></i> Acceuil</a>
            <a href="?P=1" class="headerLink" ></i> Git Historique</a>
            <a href="?P=2" class="headerLink"></i> A propos</a>
            <a href="?P=3" class="headerLink"></i> Contacte</a>
        </div>
    </header>

    <!-- Content Area -->
    <div class="content">
        <div>
            <?php
            // Get the target page parameter
            $targetPage = isset($_GET['P']) ? $_GET['P'] : '0';

            // Define a mapping of page numbers to corresponding content files
            $contentFiles = [
                '0' => './Pages/home.php',
                '1' => './Pages/git_history.php',
                '2' => './Pages/about_me.php',
                '3' => './Pages/contact.php',
            ];

            // Include the content file based on the target page parameter
            if (isset($contentFiles[$targetPage])) {
                include $contentFiles[$targetPage];
            } else {
                echo '<p>Invalid page parameter</p>';
            }
            ?>
        </div>
    </div>
    <footer>
        <div class="container">
            <ul class="footer-menu">
            <li><a href="?P=0">Acceuil</a></li>
            <li><a href="?P=1">Git Historique</a></li>
            <li><a href="?P=2">A propos</a></li>
            <li><a href="?P=3">Contacte</a></li>
            </ul>
            <div class="footer-info">
            <h4>&copy; 2024 E. Evan <br> portfolio made from scratch, PhP, JS, Css and HTML</h4>
            </div>
        </div>
    </footer>

    <script src="./js/script.js"></script>
</body>
</html>
