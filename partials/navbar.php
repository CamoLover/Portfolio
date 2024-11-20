<nav class="navbar" id="navbar-transparent">
    <div class="container">
        <div class="navbar-header">
            <a href="https://camolover.dev" class="linear-wipe navbar-brand">camolover.dev</a>
        </div>
        <span class="fulll"></span>
        <div class="navbar-toggle" id="navbarToggle">
            <i class="fas fa-bars"></i>
        </div>
        <ul class="nav" id="navLinks">
            <li><a href="#about">A propos</a></li>
            <li><a href="#skills">Compétences</a></li>
            <li><a href="#experience">Expérience</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="media/CV.pdf" target="_blank" class="cvBTN"><i class="fa-solid fa-book"></i> Télécharger CV</a></li>
        </ul>
    </div>
</nav>
<style>
html {
    scroll-behavior: smooth;
}
</style>
<script>
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    });
});

</script>