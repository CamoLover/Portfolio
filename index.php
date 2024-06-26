<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evan E | Portfolio</title>
    <link href="./style/styless.css" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8fc7bbbd50.js" crossorigin="anonymous"></script>

    <script src="https://threejs.org/build/three.min.js"></script>
    <script src="https://threejs.org/examples/js/loaders/GLTFLoader.js"></script>
    <script src="https://threejs.org/examples/js/loaders/DRACOLoader.js"></script>
    <script src="https://threejs.org/examples/js/controls/OrbitControls.js"></script>
</head>
<body>
<div id="app">
<nav class="navbar" id="navbar-transparent">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="https://unisteal.site">Unisteal.site</a>
            </div>
            <span class="fulll"></span>
            <div class="HeaderRight" id="navMain">
                <ul class="nav">
                    <li><a href="#about">A propos</a></li>
                    <li><a href="#skills">Compétences</a></li> 
                    <li><a href="#experience">Expérience</a></li>
                    <li><a href="#">Portfolio</a></li> 
                    <li><a href="#">Contact</a></li> 
                    <li><a href="#" class="cvBTN"><i class="fa-solid fa-book"></i> Télécharger CV</a></li> 
                </ul>
            </div>
        </div>
    </nav>
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
    <section id="about">
        <div class="presentation">
            <div class="prez2">
                <h2>A Propos</h2>
                <p>Bonjour, je suis<span style="color:#915EFF"> Escabasse Evan</span>. Un développeur fullstack indépendant de 20 ans.</p>
                <p>En 2019 j'ai crée mon studio de développement au nom de Pixeleur. Ce studio a permis de découvrir le monde de la programmation.</p>
                <p>Aujourd'hui, je suis en Études supérieur, un BTS SIO (service informatique au organisations) en option SLAM (solutions logiciel application métiers).</p>
                <p>Nombre de mes projets on vu le jours auprès de Pixeleur, dont 2 des mes projets favorie a savoir <a href="https://pixeleur.itch.io/valor-sold" class="LinkIntext" target="_blank">Valor Sold</a> ainsi que <a href="https://store.steampowered.com/app/2580210/SCP_Rulebreaker/" class="LinkIntext" target="_blank">SCP: Rulebreaker</a>.</p>
                <p>Ses derniers sont 2 jeux vidéo crée via Unreal engine, Valor Sold en blueprint en 48h a l'occasion de la GMTK 2023 et le derniers pendant plusieurs années en C++.</p>
            </div>
        </div>
        <div class="card">
            <figure>
                <img src="./media/image/card4.png" width="200px" height="350px" alt="Mountains">
                <figcaption><a href="#" class="LinkIntext">Web Dev</a></figcaption>
            </figure>
            <figure>
                <img src="./media/image/card2.png" width="200px" height="350px" alt="Mountains">
                <figcaption><a href="#" class="LinkIntext">Game Dev</a></figcaption>
            </figure>
            <figure>
                <img src="./media/image/card3.png" width="200px" height="350px" alt="Mountains">
                <figcaption><a href="#" class="LinkIntext">App Dev</a></figcaption>
            </figure>
            <figure>
                <img src="./media/image/card1.png" width="200px" height="350px" alt="Mountains">
                <figcaption><a href="#" class="LinkIntext">Bot Dev</a></figcaption>
            </figure>
        </div>
    </section>

    <section id="skills">
        <div class="presentation">
            <div class="prez2">
                <h2>Compétences</h2>
                <p>Voici mes différentes <span style="color:#915EFF">compétences</span> (languages et logicielles), mes différentes <span style="color:#915EFF">attestations</span> & <span style="color:#915EFF">diplôme</span>.</p>
                <p>Les languages afficher on était utilisée pour terminée au minimum un projets & plusieurs pour d'autres.</p>
                <p>Les logiciel et applications afficher sont des logiciel/applications que j'utilise et/ou utiliser lors de mes différents projet.</p>
                <h4>Quelques exemple : </h4>
                <p>Unreal engine : <a href="https://pixeleur.itch.io/valor-sold" class="LinkIntext" target="_blank">Valor Sold</a> & <a href="https://store.steampowered.com/app/2580210/SCP_Rulebreaker/" class="LinkIntext" target="_blank">SCP: Rulebreaker</a></p>
                <p>Java : <a href="https://play.google.com/store/apps/details?id=com.thepixeleur.SCPrankup" class="LinkIntext" target="_blank">SCP Rank-Up</a> (mobile uniquement)</p>
                <p>github & gitlab : <a href="https://github.com/CamoLover" target="_blank" class="LinkIntext">Github</a></p>
                <p>etc...</p>
           </div>
        </div>
        <div class="card">
            <div>
                <h3>Compétences</h3>
                <div align="center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/cplusplus/cplusplus-original.svg" height="48" alt="cplusplus logo"  />
                    <img width="12" />
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/unrealengine/unrealengine-original.svg" height="48" alt="unrealengine logo"  />
                    <img width="12" />
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/gitlab/gitlab-original.svg" height="48" alt="gitlab logo"  />
                    <img width="12" />
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg" height="48" alt="github logo"  />
                    <img width="12" /><br>
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg" height="48" alt="git logo"  />
                    <img width="12" />
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" height="48" alt="html5 logo"  />
                    <img width="12" />
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" height="48" alt="css3 logo"  />
                    <img width="12" />
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" height="48" alt="javascript logo"  />
                    <img width="12" /><br>
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" height="48" alt="nodejs logo"  />
                    <img width="12" />
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" height="48" alt="php logo"  />
                    <img width="12" />
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/discordjs/discordjs-original.svg" height="48" alt="discordjs logo"  />
                    <img width="12" />
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/filezilla/filezilla-plain.svg" height="48" alt="filezilla logo"  />
                    <img width="12" /><br>
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/firebase/firebase-plain.svg" height="48" alt="firebase logo"  />
                    <img width="12" />
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original.svg" height="48" alt="java logo"  />
                    <img width="12" />
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg" height="48" alt="python logo"  />
                    <img width="12" />
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/androidstudio/androidstudio-original.svg" height="48" alt="androidstudio logo"  />
                    <img width="12" /><br>
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/arduino/arduino-original.svg" height="48" alt="arduino logo"  />
                    <img width="12" />
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" height="48" alt="mysql logo"  />
                    <img width="12" />
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/polygon/polygon-original.svg" height="48" alt="polygon logo"  />
                    <img width="12" />
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/trello/trello-plain.svg" height="48" alt="trello logo"  />
                    <img width="12" /><br>
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vscode/vscode-original.svg" height="48" alt="vscode logo"  />
                </div>
            </div>
            <div class="linesss">
                <span class="ball"></span>
                <span class="liness"></span>
            </div>
            <div>
                <h3>Diplôme</h3>
                <div class="slideshow-container">
                    <div class="mySlides fade" >
                        <img src="./media/image/certification/netacad.png" style="width:100%">
                    </div>
                    <div class="mySlides fade">
                        <img src="./media/image/certification/ANSII.png" style="width:100%">
                    </div>
                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                    <a class="next" onclick="plusSlides(1)">❯</a>
                </div>
                <br>
                <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span> 
                <span class="dot" onclick="currentSlide(2)"></span>  
            </div>
            </div>

        </div>
    </section>

    <section id="experience">

        <div class="cardTimeline">
                    <div>
                        <h2 class="mb-4">Éxperiences</h2>
                        <div class="timeline">
                            <div class="timeline-wrapper">
                                <div class="timeline-yr">
                                    <span>2018</span>
                                </div>
                                <div class="timeline-info">
                                    <h3>Pixeleur <small class="txtsmall">Fondateur & Directeur développement</small></h3>
                                    <p>Mon propre studio de développement, a l'origine des nombreux projet visible dans "mes projets".</p>
                                </div>
                            </div>

                            <div class="timeline-wrapper">
                                <div class="timeline-yr">
                                    <span>2021</span>
                                </div>
                                <div class="timeline-info">
                                    <h3>ITER Organisation <small class="txtsmall">4 semaines</small></h3>
                                    <p>Stage de 4 semaines en immersion avec les développeur de ITER Organisation.</p>
                                </div>
                            </div>

                            <div class="timeline-wrapper">
                                <div class="timeline-yr">
                                    <span>2022</span>
                                </div>
                                <div class="timeline-info">
                                    <h3>Mairie d'Aix-En-Provence <small class="txtsmall">4 semaines</small></h3>
                                    <p>Stage de 4 semaines en immersion avec le services développement de la mairie d'Aix-En-Provence.</p>
                                </div>
                            </div>

                            <div class="timeline-wrapper">
                                <div class="timeline-yr">
                                    <span>2023</span>
                                </div>
                                <div class="timeline-info">
                                    <h3>Mairie d'Aix-En-Provence <small class="txtsmall">2 ans</small></h3>
                                    <p>Alternance au services développement web et mobile de la Mairie d'Aix-En-Provence.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rigthEdu">
                        <h2 class="mb-4 mobile-mt-2">Éducations</h2>
                        <div class="timeline">
                            <div class="timeline-wrapper">
                                <div class="timeline-yr">
                                    <span>2020</span>
                                </div>
                                <div class="timeline-info">
                                    <h3>Lycée bac pro SN <small class="txtsmall">3 ans</small></h3>
                                    <p>Lycée Saint-Éloi Aix-En-Provence | Bac pro en option Sysème numérique.</p>
                                </div>
                            </div>

                            <div class="timeline-wrapper">
                                <div class="timeline-yr">
                                    <span>2023</span>
                                </div>
                                <div class="timeline-info">
                                    <h3>BTS SIO option SLAM <small class="txtsmall">2 ans</small></h3>
                                    <p>Nextech Antenne Pertuis | BTS en alternance en option Solution Logiciel et Application Métiers.</p>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </section>


    <section id="portfolio">
        <div class="presentation">
                <div class="prez2">
                    <h2>Portfolio</h2>
                    <p>Lorem Ipsum Dolor sit amet</p>
                </div>
            </div>
            <div class="card">
                <div class="nft">
                    <div class='main'>
                    <img class='tokenImage' src="https://images.unsplash.com/photo-1621075160523-b936ad96132a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="NFT" />
                    <h2>SCP: Rulebreaker</h2>
                    <p class='description'>Plus gros projets du studio Pixeleur, le jeu d'horreru SCP: Rulebreaker sur l'univers de la fondation SCP</p>
                    <hr />
                    <div class='creator'>
                        <div class='wrapper'>
                        <img src="https://images.unsplash.com/photo-1620121692029-d088224ddc74?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1932&q=80" alt="Creator" />
                        </div>
                        <p><ins>Projets : </ins> Pixeleur</p>
                    </div>
                    </div>
                </div>
            </div>
    </section>
    <script src="./js/script.js"></script>
</body>
</html>