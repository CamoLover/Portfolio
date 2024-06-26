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
        <?php
        $cards = [
            ['image' => 'media/image/card4.png', 'text' => 'Web Dev'],
            ['image' => 'media/image/card2.png', 'text' => 'Game Dev'],
            ['image' => 'media/image/card3.png', 'text' => 'App Dev'],
            ['image' => 'media/image/card1.png', 'text' => 'Bot Dev']
        ];

        foreach ($cards as $card) {
            echo "
            <figure>
                <img src='{$card['image']}' width='200px' height='350px' alt='Image'>
                <figcaption><a href='#' class='LinkIntext'>{$card['text']}</a></figcaption>
            </figure>";
        }
        ?>
    </div>
</section>
