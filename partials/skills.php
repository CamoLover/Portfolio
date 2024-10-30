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
                <?php
                $skills = [
                    'cplusplus', 'unrealengine', 'gitlab', 'github', 'git', 'html5', 
                    'css3', 'javascript', 'nodejs', 'php', 'discordjs', 'filezilla', 
                    'firebase', 'java', 'python', 'androidstudio', 'arduino', 'mysql', 
                    'polygon', 'trello', 'vscode'
                ];

                $counter = 0;
                foreach ($skills as $skill) {
                    echo "<img src='https://cdn.jsdelivr.net/gh/devicons/devicon/icons/$skill/$skill-original.svg' height='48' alt='$skill logo' />";
                    $counter++;
                    if ($counter % 4 == 0) {
                        echo "<br>";
                    } else {
                        echo "<img width='12' />";
                    }
                }
                ?>
            </div>
        </div>
        <div class="linesss">
            <span class="ball"></span>
            <span class="liness"></span>
        </div>
        <div>
            <h3>Certifications</h3>
            <div class="slideshow-container">
                <?php
                $certifications = ['netacad.png', 'ANSII.png', 'pix.png'];
                foreach ($certifications as $index => $certification) {
                    $slideIndex = $index + 1;
                    echo "<div class='mySlides fade'>
                            <img src='media/image/certification/$certification' style='width:100%'>
                          </div>";
                }
                ?>
                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>
            </div>
            <br>
            <div style="text-align:center">
                <?php
                for ($i = 1; $i <= count($certifications); $i++) {
                    echo "<span class='dot' onclick='currentSlide($i)'></span>";
                }
                ?>
            </div>
        </div>
    </div>
</section>
