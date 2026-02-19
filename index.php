<?php
include "./other/config.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $config['name']; ?> | Portfolio</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/@tailwindcss/typography@0.4.1/dist/typography.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="./style/stylings.css">
    <link rel="stylesheet" href="./style/retro-sunset.css">
    <!-- Add custom styles for markdown content -->
    <style>
        .prose-custom {
            color: #e5e7eb;
        }
        .prose-custom h1 {
            color: white;
            font-size: 2.25rem;
            margin-top: 2rem;
            margin-bottom: 1rem;
            font-weight: 700;
        }
        .prose-custom h2 {
            color: white;
            font-size: 1.875rem;
            margin-top: 2rem;
            margin-bottom: 1rem;
            font-weight: 600;
        }
        .prose-custom h3 {
            color: #a78bfa;
            font-size: 1.5rem;
            margin-top: 1.5rem;
            margin-bottom: 0.75rem;
            font-weight: 600;
        }
        .prose-custom p {
            margin-top: 1rem;
            margin-bottom: 1rem;
            line-height: 1.75;
        }
        .prose-custom a {
            color: #a78bfa;
            text-decoration: none;
            transition: color 0.2s;
        }
        .prose-custom a:hover {
            color: #c4b5fd;
            text-decoration: underline;
        }
        .prose-custom ul {
            margin-top: 1rem;
            margin-bottom: 1rem;
            padding-left: 1.5rem;
            list-style-type: disc;
        }
        .prose-custom li {
            margin-top: 0.5rem;
            margin-bottom: 0.5rem;
            padding-left: 0.5rem;
        }
        .prose-custom code {
            color: #e5e7eb;
            background-color: rgba(107, 114, 128, 0.2);
            padding: 0.2rem 0.4rem;
            border-radius: 0.25rem;
            font-size: 0.875em;
        }
        .prose-custom pre {
            background-color: rgba(17, 24, 39, 0.8);
            padding: 1rem;
            border-radius: 0.5rem;
            overflow-x: auto;
            margin: 1rem 0;
        }
        .prose-custom blockquote {
            border-left: 4px solid #a78bfa;
            padding-left: 1rem;
            margin: 1.5rem 0;
            color: #9ca3af;
        }
    </style>
</head>
<body>
    <nav class="fixed w-full bg-black bg-opacity-80 backdrop-filter backdrop-blur-lg z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex-shrink-0">
                    <a href="https://camolover.dev" class="gradient-text font-bold text-xl">camolover.dev</a>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="#about" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">À Propos</a>
                        <a href="#skills" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Compétences</a>
                        <a href="#experience" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Expérience</a>
                        <a href="#projects" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Projets</a>
                        <a href="./media/CV.pdf" target="_blank" class="bg-purple-600 text-white px-4 py-2 rounded-md text-sm font-medium">CV</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <main>
        <!-- Hero Section -->
        <section id="hero" class="min-h-screen flex items-center justify-center relative overflow-hidden retro-hero">
            <!-- Parallax wrapper for fixed elements -->
            <div class="parallax-wrapper">
                <!-- Retro Background -->
                <div class="scene-container">
                    <div class="background-80s animated-clouds stars" style="--background-height:100vh">
                        <div class="sun"></div>
                        <div class="grid" style="--grid-color:rgba(115,59,139,0.7);--grid-size:30px;--grid-blur:1px;"></div>
                        <div class="mountain" style="--mountain-base:10vw;--mountain-height:5vw;--mountain-color1:#a684cb;--mountain-color2:#b533b3;--mountain-offset:10vw;--mountain-tilt:-20deg"></div>
                        <div class="mountain" style="--mountain-base:10vw;--mountain-height:5vw;--mountain-color1:#a684cb;--mountain-color2:#681e6b;--mountain-tilt:59deg;--mountain-offset:20vw;"></div>
                        <div class="mountain" style="--mountain-base:8vw;--mountain-height:4vw;--mountain-color1:#a684cb;--mountain-color2:#b533b3;--mountain-offset:20vw;--mountain-tilt:-20deg"></div>
                        <div class="mountain" style="--mountain-base:3vw;--mountain-height:4vw;--mountain-color1:#a684cb;--mountain-color2:#681e6b;--mountain-tilt:45deg;--mountain-offset:28vw;"></div>
                        <div class="mountain" style="--mountain-base:5vw;--mountain-height:5vw;--mountain-color1:#a684cb;--mountain-color2:#681e6b;--mountain-offset:-40vw;--mountain-tilt:-20deg"></div>
                        <div class="mountain" style="--mountain-base:5vw;--mountain-height:5vw;--mountain-color1:#a684cb;--mountain-color2:#b533b3;--mountain-tilt:33deg;--mountain-offset:-35vw;"></div>
                        <div class="mountain" style="--mountain-base:5vw;--mountain-height:5vw;--mountain-color1:#a684cb;--mountain-color2:#681e6b;--mountain-tilt:-62deg;--mountain-offset:-5vw;"></div>
                        <div class="mountain" style="--mountain-base:10vw;--mountain-height:5vw;--mountain-color1:#a684cb;--mountain-color2:#2a025d;--mountain-tilt:-20deg"></div>
                        <div class="mountain" style="--mountain-base:10vw;--mountain-height:5vw;--mountain-color1:#a684cb;--mountain-color2:#150030;--mountain-tilt:59deg;--mountain-offset:10vw;"></div>
                        <div class="mountain" style="--mountain-base:10vw;--mountain-height:10vw;--mountain-color1:#a684cb;--mountain-color2:#150030;--mountain-tilt:-33deg;--mountain-offset:-30vw;"></div>
                        <div class="mountain" style="--mountain-base:10vw;--mountain-height:10vw;--mountain-color1:#a684cb;--mountain-color2:#2a025d;--mountain-offset:-20vw;--mountain-tilt:20deg"></div>
                        <div class="mountain" style="--mountain-base:3vw;--mountain-height:10vw;--mountain-color1:#a684cb;--mountain-color2:#681e6b;--mountain-tilt:45.5deg;--mountain-offset:-10vw;"></div>
                        <div class="road"></div>
                        <div class="overlay"></div>
                    </div>
                </div>

                <!-- SVG Filter for clouds -->
                <svg width="0" height="0">
                    <defs>
                        <filter id="filter">
                            <feTurbulence type="fractalNoise" baseFrequency=".01" numOctaves="3" id="fractalNoise"/>
                            <feDisplacementMap id="displacementMap" in="SourceGraphic" scale="120" />
                        </filter>
                    </defs>
                    <animate xlink:href="#displacementMap" id="animclouds1" begin="0; animclouds2.end"
                        attributeName="scale" from="50" to="180" dur="4s" fill="freeze" />
                    <animate xlink:href="#displacementMap" id="animclouds2" begin="animclouds1.end"
                        attributeName="scale" from="180" to="50" dur="4s" fill="freeze" />
                    <animate xlink:href="#fractalNoise" id="animclouds3" begin="0;animclouds4.end"
                        attributeName="baseFrequency" from="0.02" to="0.01" dur="40s" fill="freeze" />
                    <animate xlink:href="#fractalNoise" id="animclouds4" begin="animclouds3.end"
                        attributeName="baseFrequency" from="0.01" to="0.02" dur="40s" fill="freeze" />
                </svg>
            </div>
            
            <!-- Black overlay for better text readability -->
            <div class="absolute inset-0 bg-black bg-opacity-30 z-7" style="z-index: 9;"></div>

            <!-- Content that will be positioned over the parallax background -->
            <div class="content-wrapper text-center relative z-10">
                <h1 class="text-4xl md:text-6xl font-bold mb-4">
                    Bonjour, je suis <span class="gradient-text"><?php echo $config['name']; ?></span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-400"><?php echo $config['title']; ?></p>
            </div>
            
            <!-- Bouncing Chevron -->
            <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 z-10">
                <svg class="animate-bounce w-8 h-8 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </div>
        </section>
        <!-- About Section -->
        <section id="about" class="py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold mb-8">À Propos</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="card p-6 rounded-lg">
                        <p class="text-gray-300 leading-relaxed">
                            En 2019, j'ai créé mon studio de développement Pixeleur, 
                            qui m'a permis de découvrir le monde de la programmation. 
                            Aujourd'hui, à 20 ans, je suis en BTS SIO option SLAM, 
                            tout en travaillant sur des projets personnels passionnants.
                        </p>
                    </div>
                    <div class="card p-6 rounded-lg">
                        <h3 class="text-xl font-bold mb-4">Spécialités</h3>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="text-center p-4 bg-purple-900 bg-opacity-20 rounded-lg">
                                <h4 class="font-bold">Web Dev</h4>
                            </div>
                            <div class="text-center p-4 bg-purple-900 bg-opacity-20 rounded-lg">
                                <h4 class="font-bold">Game Dev</h4>
                            </div>
                            <div class="text-center p-4 bg-purple-900 bg-opacity-20 rounded-lg">
                                <h4 class="font-bold">App Dev</h4>
                            </div>
                            <div class="text-center p-4 bg-purple-900 bg-opacity-20 rounded-lg">
                                <h4 class="font-bold">Bot Dev</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Skills Section -->
        <section id="skills" class="py-20 bg-black bg-opacity-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-white mb-8">Compétences</h2>
                <!-- Slideshow for Certifications -->
                <div class="mb-12">
                    <h3 class="text-2xl font-bold text-white mb-4">Certifications</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                        <?php foreach ($config['certifications'] as $certification): ?>
                        <div class="relative">
                            <img src="<?php echo $certification['image']; ?>" 
                                alt="<?php echo $certification['name']; ?>" 
                                class="rounded-lg shadow-lg w-full cursor-pointer transition-transform transform hover:scale-105"
                                onclick="openLightbox('<?php echo $certification['image']; ?>')">
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!-- Skills Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <?php foreach ($config['skills'] as $category => $skills): ?>
                    <div class="card p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-white mb-4 capitalize"><?php echo $category; ?></h3>
                        <ul class="space-y-4">
                            <?php foreach ($skills as $skill): ?>
                            <li class="skill-container flex items-center">
                                <?php if (isset($config['skillIcons'][$skill])): ?>
                                    <img src="<?php echo $config['skillIcons'][$skill]; ?>" 
                                        alt="<?php echo $skill; ?>" 
                                        class="skill-icon h-6 w-6 mr-2" 
                                        title="<?php echo $skill; ?>">
                                <?php endif; ?>
                                <span class="text-gray-300"><?php echo $skill; ?></span>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- Experience Section -->
        <section id="experience" class="py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold mb-8">Expérience</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-2xl font-bold mb-6">Parcours Professionnel</h3>
                        <?php foreach ($config['experience'] as $exp): ?>
                        <div class="card p-6 rounded-lg mb-4">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h4 class="font-bold"><?php echo $exp['company']; ?></h4>
                                    <p class="text-purple-400"><?php echo $exp['position']; ?></p>
                                </div>
                                <span class="text-gray-400"><?php echo $exp['year']; ?></span>
                            </div>
                            <p class="text-gray-300 mt-2"><?php echo $exp['description']; ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold mb-6">Formation</h3>
                        <?php foreach ($config['education'] as $edu): ?>
                        <div class="card p-6 rounded-lg mb-4">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h4 class="font-bold"><?php echo $edu['school']; ?></h4>
                                    <p class="text-purple-400"><?php echo $edu['degree']; ?></p>
                                </div>
                                <span class="text-gray-400"><?php echo $edu['year']; ?></span>
                            </div>
                            <p class="text-gray-300 mt-2"><?php echo $edu['description']; ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- Projects Section -->
        <section id="projects" class="py-20 bg-black bg-opacity-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold mb-8">Projets</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php foreach ($config['projects'] as $project): ?>
                    <div class="card p-6 rounded-lg flex flex-col h-full cursor-pointer hover:bg-purple-900 hover:bg-opacity-20 transition-colors duration-300" 
                                onclick="openProjectModal('<?php echo $project['name']; ?>')"> <!-- Added flex flex-col and h-full -->
                        <!-- Project ownership badge -->
                        <?php if (isset($config['projectOwnership'][$project['name']])): ?>
                            <?php 
                                $ownerType = $config['projectOwnership'][$project['name']];
                                $owner = $config['projectOwners'][$ownerType];
                            ?>
                            <div class="flex items-center mb-4 space-x-2">
                                <img src="<?php echo $owner['image']; ?>" 
                                    alt="<?php echo $owner['text']; ?>" 
                                    class="w-6 h-6 rounded-full">
                                <span class="text-sm text-gray-400"><?php echo $owner['text']; ?></span>
                            </div>
                        <?php endif; ?>

                        <h3 class="text-xl font-bold mb-2"><?php echo $project['name']; ?></h3>
                        <p class="text-gray-300 mb-4"><?php echo $project['description']; ?></p>
                        
                        <!-- Add skill tags -->
                        <?php if (isset($config['projectSkills'][$project['name']])): ?>
                        <div class="mb-4">
                            <?php foreach ($config['projectSkills'][$project['name']] as $skill): ?>
                            <span class="skill-tag"><?php echo $skill; ?></span>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>
                        
                        <div class="mt-auto"> <!-- Added mt-auto to push the button to the bottom -->
                            <a href="<?php echo $project['url']; ?>" target="_blank" 
                            class="inline-block bg-purple-600 text-white px-4 py-2 rounded-md text-sm font-medium">
                                Voir le projet
                            </a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- Veille Informatique Section -->
        <section id="veille" class="py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold mb-8">Veille Informatique</h2>
                <div class="grid grid-cols-1 gap-8">
                    <?php foreach ($config['veille_informatique'] as $veille): ?>
                    <div class="card p-6 rounded-lg">
                        <h3 class="text-2xl font-bold mb-4"><?php echo $veille['titre']; ?></h3>
                        <p class="text-gray-300 mb-4"><?php echo $veille['description']; ?></p>
                        
                        <!-- Sources -->
                        <div class="mb-4">
                            <h4 class="text-lg font-semibold text-purple-400 mb-2">Sources</h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <?php foreach ($veille['sources'] as $name => $url): ?>
                                <a href="<?php echo $url; ?>" target="_blank" 
                                   class="text-purple-400 hover:text-purple-300 flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                              d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                    </svg>
                                    <?php echo $name; ?>
                                </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        
                        <!-- Mots clés -->
                        <div class="mb-4">
                            <h4 class="text-lg font-semibold text-purple-400 mb-2">Mots clés</h4>
                            <div class="flex flex-wrap gap-2">
                                <?php foreach ($veille['mots_cles'] as $mot): ?>
                                <span class="bg-purple-900 bg-opacity-20 px-3 py-1 rounded-full text-sm">
                                    <?php echo $mot; ?>
                                </span>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <!-- Full Description (Markdown) -->
                        <div class="mt-6">
                            <button onclick="toggleVeilleContent('<?php echo md5($veille['titre']); ?>')"
                                    class="text-purple-400 hover:text-purple-300 flex items-center mb-4">
                                <svg class="w-4 h-4 mr-2 transform transition-transform" id="icon-<?php echo md5($veille['titre']); ?>"
                                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                                Voir plus
                            </button>
                            <div id="content-<?php echo md5($veille['titre']); ?>" class="hidden">
                                <div class="prose-custom">
                                    <?php
                                    require_once 'vendor/autoload.php';
                                    $Parsedown = new Parsedown();
                                    $Parsedown->setSafeMode(true); // Enable safe mode for security
                                    $markdownContent = file_get_contents($veille['description_full']);
                                    echo $Parsedown->text($markdownContent);
                                    ?>
                                </div>
                            </div>
                        </div>
                        
                        <div class="text-sm text-gray-400 mt-4">
                            Dernière mise à jour: <?php echo $veille['derniere_mise_a_jour']; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </main>
    <!-- Enhanced Footer -->
    <footer class="bg-black py-12 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                <div class="text-center md:text-left">
                    <h3 class="text-xl font-bold text-white mb-4">Contact</h3>
                    <p class="text-gray-400">N'hésitez pas à me contacter pour toute opportunité ou collaboration.</p>
                </div>
                <div class="text-center">
                    <h3 class="text-xl font-bold text-white mb-4">Réseaux Sociaux</h3>
                    <div class="flex justify-center space-x-6">
                        <?php foreach ($config['social_links'] as $platform => $data): ?>
                        <a href="<?php echo $data['url']; ?>" target="_blank" 
                           class="text-gray-400 hover:text-white transition-colors">
                            <i class="<?php echo $data['icon']; ?> text-2xl"></i>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="text-center md:text-right">
                    <h3 class="text-xl font-bold text-white mb-4">Localisation</h3>
                    <p class="text-gray-400">France</p>
                </div>
            </div>
            <div class="text-center pt-8 border-t border-gray-800">
                <p class="text-gray-400">© <?php echo date('Y'); ?> <?php echo $config['name']; ?>. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <!-- Add Font Awesome for social icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <script>
        // Make project details available globally
        window.projectDetails = <?php echo json_encode($config['projectDetails']); ?>;
    </script>
    <script src="./js/scripts.js"></script>
    

    
    <!-- Lightbox -->
    <div id="lightbox" class="fixed inset-0 bg-black bg-opacity-90 hidden flex items-center justify-center z-50">
        <img id="lightbox-image" src="" alt="Lightbox image" class="max-w-[90%] max-h-[90vh] object-contain">
    </div>

    <!-- Project Modal Widget -->
    <div id="project-modal" class="fixed inset-0 bg-black bg-opacity-90 hidden z-50 overflow-y-auto">
        <div class="min-h-screen px-4 py-8 text-center">
            <!-- Background overlay -->
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-black opacity-75"></div>
            </div>

            <!-- Modal panel -->
            <div class="inline-block w-full max-w-6xl text-left align-middle transition-all transform bg-gray-900 shadow-xl rounded-lg overflow-hidden">
                <!-- Close button -->
                <button onclick="closeProjectModal()" class="absolute top-4 right-4 text-gray-400 hover:text-white z-50">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <!-- Header section -->
                <div class="p-6 border-b border-gray-800">
                    <h2 id="modal-project-title" class="text-3xl font-bold text-white mb-4"></h2>
                    <p id="modal-project-description" class="text-gray-300"></p>
                    
                    <!-- Project links -->
                    <div class="flex space-x-4 mt-4">
                        <a id="modal-github-link" href="#" target="_blank" 
                           class="flex items-center justify-center px-4 py-2 bg-gray-800 text-white rounded-md hover:bg-gray-700">
                            <i class="fab fa-github mr-2"></i>
                            GitHub
                        </a>
                        <a id="modal-demo-link" href="#" target="_blank"
                           class="flex items-center justify-center px-4 py-2 bg-purple-600 text-white rounded-md hover:bg-purple-700">
                            <i class="fas fa-external-link-alt mr-2"></i>
                            Demo
                        </a>
                    </div>
                </div>

                <!-- Content sections -->
                <div class="p-6 space-y-12" id="modal-content-sections">
                    <!-- Paragraphe1 section -->
                    <div class="flex flex-col md:flex-row items-center gap-8">
                        <div class="w-full md:w-1/2 space-y-4">
                            <div id="modal-project-paragraphe1" class="text-gray-300"></div>
                        </div>
                        <div class="w-full md:w-1/2 project-image-container">
                            <!-- First image will be inserted here -->
                        </div>
                    </div>

                    <!-- Paragraphe2 section -->
                    <div class="flex flex-col md:flex-row-reverse items-center gap-8">
                        <div class="w-full md:w-1/2 space-y-4">
                            <div id="modal-project-paragraphe2" class="text-gray-300"></div>
                        </div>
                        <div class="w-full md:w-1/2 project-image-container">
                            <!-- Second image will be inserted here -->
                        </div>
                    </div>

                    <!-- Paragraphe3 section -->
                    <div class="flex flex-col md:flex-row items-center gap-8">
                        <div class="w-full md:w-1/2 space-y-4">
                            <div id="modal-project-paragraphe3" class="text-gray-300"></div>
                        </div>
                        <div class="w-full md:w-1/2 project-image-container">
                            <!-- Third image will be inserted here -->
                        </div>
                    </div>

                    <!-- Competencies section -->
                    <div class="mt-8">
                        <h3 class="text-xl font-bold text-white mb-4">Compétences</h3>
                        <div id="modal-project-competencies" class="flex flex-wrap gap-2"></div>
                    </div>

                    <!-- Additional images -->
                    <div class="mt-8">
                        <h3 class="text-xl font-bold text-white mb-4">Galerie</h3>
                        <div class="grid grid-cols-4 gap-4" id="modal-project-gallery">
                            <!-- Thumbnails will be inserted here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Image Preview Modal -->
    <div id="image-preview-modal" class="hidden">
        <div class="preview-image-wrapper">
            <img id="preview-image" src="" alt="Preview">
            <button class="close-button" onclick="window.closeImagePreview()">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div id="preview-title"></div>
    </div>
</body>
</html>