<?php
$config = [
    'name' => 'Escabasse Evan',
    'title' => 'CCI Vaucluse Provence<br>Épreuve E4 – Support et mise à disposition de services informatiques<br>BTS SIO option SLAM',
    'email' => 'escabasse.evan@pixeleur.fr',
    'github' => 'https://github.com/CamoLover',
    'projects' => [
        [
            'name' => 'GLPI',
            'url' => 'https://glpi-project.org/fr/',
            'description' => 'Installation de GLPI pour système de ticket et gestion de parc informatique pour un centre de formation.'
        ],
        [
            'name' => 'Fast Sushi',
            'url' => 'https://fastsushi.fr',
            'description' => 'Site web pour un restaurant de sushi, avec interface client pour commande, et un client lourd en java pour  la gestion du site et des commandes par les employés et préparateur de commandes.'
        ],
        [
            'name' => 'AixMobile',
            'url' => 'https://aixenprovence.fr/connect',
            'description' => 'Création d\'une application type linktree pour la mairie d\'Aix-en-Provence.'
        ],
        [
            'name' => 'DélibArch',
            'url' => 'https://aixenprovence.fr/Deliberations-du-conseil-municipal-1927',
            'description' => 'Mise à jour du code Legacy en PHP 5, en PHP 7.'
        ],
        [
            'name' => 'Pixeleur.fr',
            'url' => 'https://pixeleur.fr',
            'description' => 'Site web professionnel présentant le studio de développement de jeux vidéo Pixeleur. La plateforme met en avant les projets, l\'expertise et les services du studio, servant de vitrine principale pour l\'entreprise.'
        ],
        [
            'name' => 'Client.Pixeleur.fr',
            'url' => 'https://client.pixeleur.fr',
            'description' => 'Interface client pour les clients de Pixeleur, permettant aux clients d\'intéragir avec leurs commandes.'
        ],
        [
            'name' => 'Admin.Pixeleur.fr',
            'url' => 'https://admin.pixeleur.fr',
            'description' => 'Interface d\'administration pour le site web de Pixeleur, gestion des multiple sites web, des commandes en cours, et des projets.'
        ],
    ],
    'skills' => [
        'Langues' => ['C++', 'PHP', 'JavaScript', 'Python', 'Java', 'HTML5', 'CSS3'],
        'Frameworks' => ['Node.js', 'Discord.js', 'spring', 'TailwindCSS'],
        'Outils' => ['Unreal Engine', 'GitHub', 'GitLab', 'Git', 'VS Code', 'Android Studio', 'Intellij Idea'],
        'Base de données' => ['MySQL', 'Firebase', 'Postgre SQL', 'MariaDB', 'MongoDB']
    ],
    'experience' => [
        [
            'year' => '2019-Present',
            'company' => 'Pixeleur',
            'position' => 'Fondateur & Directeur développement',
            'description' => 'Studio de développement personnel, créateur de nombreux projets'
        ],
        [
            'year' => '2023-Present',
            'company' => 'Mairie d\'Aix-En-Provence',
            'position' => 'Développeur Web & Mobile (Alternance)',
            'description' => 'Développement d\'applications web et mobiles'
        ],
        [
            'year' => '2022',
            'company' => 'Mairie d\'Aix-En-Provence',
            'position' => 'Stagiaire',
            'description' => 'Stage de 4 semaines au service développement'
        ],
        [
            'year' => '2021',
            'company' => 'ITER Organisation',
            'position' => 'Stagiaire',
            'description' => 'Stage de 4 semaines en développement'
        ]
    ],
    'education' => [
        [
            'year' => '2023-Present',
            'school' => 'CCI Vaucluse Provence',
            'degree' => 'BTS SIO option SLAM',
            'description' => 'Formation en alternance - Solutions Logicielles et Applications Métiers'
        ],
        [
            'year' => '2020',
            'school' => 'Lycée Saint-Éloi Aix-En-Provence',
            'degree' => 'Bac Pro SN',
            'description' => 'Spécialité Systèmes Numériques'
        ]
    ]
];
// Add skill icons mapping to your config array
$config['skillIcons'] = [
    'C++' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/cplusplus/cplusplus-original.svg',
    'PHP' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg',
    'JavaScript' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg',
    'Python' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg',
    'Java' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original.svg',
    'HTML5' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg',
    'CSS3' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg',
    'Node.js' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg',
    'Discord.js' => 'https://icon.icepanel.io/Technology/svg/Discord.js.svg',
    'Unreal Engine' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/unrealengine/unrealengine-original.svg',
    'GitHub' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg',
    'GitLab' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/gitlab/gitlab-original.svg',
    'VS Code' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vscode/vscode-original.svg',
    'Android Studio' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/androidstudio/androidstudio-original.svg',
    'MySQL' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg',
    'Firebase' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/firebase/firebase-plain.svg',
    'Git' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg',
    'Postgre SQL' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/postgresql/postgresql-original.svg',
    'MongoDB' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mongodb/mongodb-original.svg',
    'Intellij Idea' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/intellij/intellij-original.svg',
    'spring' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/spring/spring-original.svg',
    'MariaDB' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mariadb/mariadb-original.svg',
    'TailwindCSS' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tailwindcss/tailwindcss-original.svg',
];

// Add project ownership types
$config['projectOwners'] = [
    'personal' => [
        'image' => 'https://avatars.githubusercontent.com/u/118671532?v=4',
        'text' => 'Personnelle'
    ],
    'pixeleur' => [
        'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShBUVdjDkqcl03ysB5UfYr-R2KbK9s09-nzg&s',
        'text' => 'Pixeleur'
    ],
    'Mairie' => [
        'image' => 'https://www.aixeninfo.fr/public/articles/mairie-aix.jpg',
        'text' => 'Mairie d\'Aix-En-Provence'
    ],
    'Ecole' => [
        'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPmxnFHoeax0enU_k9oNBHZz3TVNL0czLrMQ&s',
        'text' => 'CCI'
    ],
];

// Add project skills mapping
$config['projectSkills'] = [
    'GLPI' => ['Informatique', 'Gestion de parc', 'Gestion de ticket'],
    'Fast Sushi' => ['PHP8', 'Java', 'MySQL', 'HTML5', 'CSS3', 'JavaScript', 'Java', 'JavaFX'],
    'Pixeleur.fr' => ['PHP8', 'JavaScript', 'HTML5', 'CSS3', 'MySQL'],
    'Client.Pixeleur.fr' => ['PHP8', 'JavaScript', 'HTML5', 'CSS3', 'MySQL'],
    'Admin.Pixeleur.fr' => ['PHP8', 'JavaScript', 'HTML5', 'CSS3', 'MySQL'],
    'AixMobile' => ['PHP7', 'JavaScript', 'HTML5', 'CSS3', 'MySQL'],
    'DélibArch' => ['PHP5', 'PHP7', 'JavaScript', 'HTML5', 'CSS3', 'MySQL'],
];

// Add ownership to projects
$config['projectOwnership'] = [
    'GLPI' => 'Ecole',
    'Fast Sushi' => 'Ecole',
    'Pixeleur.fr' => 'pixeleur',
    'Client.Pixeleur.fr' => 'pixeleur',
    'Admin.Pixeleur.fr' => 'pixeleur',
    'AixMobile' => 'Mairie',
    'DélibArch' => 'Mairie',
];
$config['certifications'] = [
    [
        'name' => 'ANSII',
        'image' => './media/image/certification/ANSII.png',
    ],
    [
        'name' => 'Netacad',
        'image' => './media/image/certification/netacad.png',
    ],
    [
        'name' => 'Certification PIX',
        'image' => './media/image/certification/pix.png',
    ],
];




// Add this to your config.php after the existing configurations:

$config['projectDetails'] = [
    'GLPI' => [
        'fullDescription' => 'Installation de GLPI pour système de ticket et gestion de parc informatique pour un centre de formation. Basé sur Kali Linux.',
        'features' => [
            'Gestion de ticket',
            'Gestion de parc',
        ],
        'challenges' => [
            'Installation du serveur GLPI sur KaliLinux'
        ],
        'gallery' => [
            [
                'url' => './media/projects/glpi/interface.png',
                'title' => 'Interface principale de GLPI'
            ],
            [
                'url' => './media/projects/glpi/ticket.png',
                'title' => 'Système de tickets'
            ]
        ],
        'technicalDetails' => [
            'Basée sur KaliLinux',
            'Base de données MariaDB'
        ],
        'competence' => [
            'Gérer le patrimoine informatique'
        ]
    ],
    'Fast Sushi' => [
        'fullDescription' => 'En tant que Responsable développement, j\'ai dirigé mon équipe dans la création d\'une d\'un site de sushi, avec interface client pour commande, et un client lourd en java pour  la gestion du site et des commandes par les employés et préparateur de commandes.',
        'features' => [
            'Application web pour les clients (Achat, voir les plats, commander)',
            'Interface administration pour les employés via client lourd en java (gestion des commandes, préparation des commandes, gestion des produits)',
        ],
        'challenges' => [
            'Gestion d\'équipe: Coordination de multiples développeurs',
            'Architecture: Conception d\'un système modulaire et évolutif en PHP laravel pour le client léger et Java FX pour le client lourd',
        ],
        'gallery' => [
            [
                'url' => './media/projects/fastsushi/trello.png',
                'title' => 'Organisation Trello'
            ],
            [
                'url' => './media/projects/fastsushi/prez.png',
                'title' => 'Présentation du projet'
            ],
            [
                'url' => './media/projects/fastsushi/home.png',
                'title' => 'Page d\'accueil'
            ],
            [
                'url' => './media/projects/fastsushi/codeLayout.png',
                'title' => 'Structure du code'
            ],
            [
                'url' => './media/projects/fastsushi/api.png',
                'title' => 'API Documentation'
            ],
            [
                'url' => './media/projects/fastsushi/migration.png',
                'title' => 'Schéma de migration'
            ]
        ],
        'githubUrl' => 'https://github.com/CamoLover/-FastSushi',
        'technicalDetails' => [
            'Frontend: Tailwind CSS, JavaScript, PHP Laravel',
            'Backend: Java FX',
            'Base de données MySQL'
        ],
        'competence' => [
            'Travailler en mode projet'
        ]
    ],
    //////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////
    'AixMobile' => [
        'fullDescription' => 'Création d\'une application type linktree pour la mairie d\'Aix-en-Provence. Le premier projet ou j\'ai était chef de projet dans l\'équipe développement de la mairie.',
        'features' => [
            'Création de page par n\'importe quelle utilisateur',
            'Ajout de lien vers n\'importe quelle page web',
            'Modification de n\'importe quelle page linktree',
            'Suppression de n\'importe quelle page linktree',
        ],
        'challenges' => [
            'Création d\'une application type linktree pour la mairie d\'Aix-en-Provence.',
        ],
        'gallery' => [
            './media/projects/aixmobile/Client.png',
            './media/projects/aixmobile/editor.png',
            './media/projects/aixmobile/quire.png',
        ],
        'liveDemo' => 'https://aixenprovence.fr/connect',
        'technicalDetails' => [
            'Frontend: Tailwind CSS, JavaScript, PHP Laravel',
            'Backend: Java FX',
            'Base de données MySQL'
        ],
        'competence' => [
            'Développer la présence en ligne',
            'Travailler en mode projet',
            'Mettre à disposition un service informatique'
        ]
    ],
    'DélibArch' => [
        'fullDescription' => 'Mise à jour du code Legacy en PHP 5, en PHP 7. Du site des délibérations du conseil municipal d\'Aix-en-Provence.',
        'features' => [
            'Mise à jour du code Legacy de PHP 5, en PHP 7.',
            'Mise à jour du CSS de la page pour le mettre en accord avec les couleurs de la mairie.',
        ],
        'challenges' => [
            'Mise à jour du code Legacy de PHP 5, en PHP 7.',
        ],
        'gallery' => [
            './media/projects/delibarch/old.png',
            './media/projects/delibarch/new.png',
        ],
        'liveDemo' => 'https://aixenprovence.fr/Deliberations-du-conseil-municipal-1927',
        'technicalDetails' => [
            'Frontend: HTML5, CSS3, JavaScript',
            'Backend: PHP 5, PHP 7',
            'Base de données MySQL'
        ],
        'competence' => [
            'Répondre aux incidents et aux demandes d\'assistance',
            'Développer la présence en ligne',
            'Travailler en mode projet',
            'Mettre à disposition un service informatique'
        ]
    ],
    //////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////
    'Pixeleur.fr' => [
        'fullDescription' => 'Site web professionnel présentant le studio de développement de jeux vidéo Pixeleur. La plateforme met en avant les projets, l\'expertise et les services du studio, servant de vitrine principale pour l\'entreprise.',
        'features' => [
            'Présentation du studio',
            'Présentation des projets (jeux vidéo, applications mobiles, sites web, bots discord etc...)',
        ],
        'challenges' => [
            'Création d\'un site web professionnel',
            'Intégration avec la base de données pour modification depuis la base admin',
        ],
        'gallery' => [
            './media/projects/pixeleur/pixeleur.png',
            './media/projects/pixeleur/rulebreaker.png',
            './media/projects/pixeleur/service.png',
        ],
        'liveDemo' => 'https://new.pixeleur.fr',
        'technicalDetails' => [
            'Frontend: CSS3, JavaScript, HTML5',
            'Backend: PHP8',
            'Base de données MySQL'
        ],
        'competence' => [
            'Développer la présence en ligne',
            'Travailler en mode projet',
            'Organiser son développement professionnel'
        ]
    ],
    'Client.Pixeleur.fr' => [
        'fullDescription' => 'Interface client pour les clients de Pixeleur, permettant aux clients de voir leurs commandes, et de les modifier/télécharger/mettre a jour et ouvrir des tickets envers les développeur de pixeleur en rapport avec leurs commandes.',
        'features' => [
            'Voir les commandes',
            'Modifier les commandes',
            'Télécharger les commandes',
            'Ouvrir des tickets en rapport avec leurs commandes', 
        ],
        'challenges' => [   
            'Création d\'une interface client pour les clients de Pixeleur',
            'Création d\'un système de ticket de 0',
        ],
        'gallery' => [
            './media/projects/clientpixeleur/home.png',
            './media/projects/clientpixeleur/produit.png',
            './media/projects/clientpixeleur/ticket.png',
        ],
        'liveDemo' => 'https://client.pixeleur.fr',
        'technicalDetails' => [
            'Frontend: CSS3, JavaScript, HTML5',
            'Backend: PHP8',
            'Base de données MySQL'
        ],
        'competence' => [
            'Développer la présence en ligne',
            'Travailler en mode projet',
            'Mettre à disposition un service informatique',
            'Organiser son développement professionnel'
        ]   
    ],
    'Admin.Pixeleur.fr' => [
        'fullDescription' => 'Interface d\'administration pour le site web de Pixeleur, gestion des multiple sites web, des commandes en cours, et des projets.',
        'features' => [
            'Gestion des multiple sites web',
            'Gestion des commandes en cours', 
        ],
        'challenges' => [
            'Création d\'une interface d\'administration pour le site web de Pixeleur',
        ],
        'gallery' => [
            './media/projects/adminpixeleur/admin.png',
            './media/projects/adminpixeleur/commande.png',
            './media/projects/adminpixeleur/commande-detail.png',
            './media/projects/adminpixeleur/profil.png',
            './media/projects/adminpixeleur/banner.png',
            './media/projects/adminpixeleur/bdd.png',
            './media/projects/adminpixeleur/bdd2.png',
            './media/projects/adminpixeleur/page.png',
        ],  
        'liveDemo' => 'https://admin.pixeleur.fr',
        'technicalDetails' => [
            'Frontend: CSS3, JavaScript, HTML5',
            'Backend: PHP8',
            'Base de données MySQL'
        ],
        'competence' => [
            'Répondre aux incidents et aux demandes d\'assistance',
            'Travailler en mode projet',
            'Organiser son développement professionnel'
        ]
    ],  






];





$config['veille_informatique'] = [
    [
        'titre' => 'Intelligence Artificielle',
        'description' => "L'IA Générative dans le Développement Informatique et le Jeu Vidéo",
        'description_full' => './veille/ia.md',
        'sources' => [
            'GitHub - AI Python Game Comparison' => 'https://github.com/CamoLover/AI_PythonGame_Comparison',
            'KPMG Report' => 'https://kpmg.com/fr/fr/articles/data-ia/ia-generative-developpement-logiciel.html',
            'Twitter - @levelsio' => 'https://x.com/levelsio',
            'Twitter - @Camo_Enjoyer' => 'https://x.com/Camo_Enjoyer/status/1897235924175741424',
            'Cadenaser - WHAM' => 'https://cadenaser.com/nacional/2025/02/19/microsoft-presenta-wham-una-ia-para-generar-mundos-en-videojuegos-cadena-ser/',
            'Reddit - r/unrealengine' => 'https://cadenaser.com/nacional/2025/02/19/microsoft-presenta-wham-una-ia-para-generar-mundos-en-videojuegos-cadena-ser/',
            'Le Monde - Cloud Security' => 'https://www.lemonde.fr/securite-cloud/article/2024/09/06/avec-l-essor-de-l-ia-generative-la-securite-cloud-se-reinvente_6305557_475.html'
        ],
        'mots_cles' => [
            'IA générative', 
            'Développement de jeux', 
            'GitHub Copilot',
            'Génération de code',
            'Game design',
            'Assets génératifs',
            'Sécurité du code',
            'Vibe coding'
        ],
        'derniere_mise_a_jour' => '2024-03-31'
    ],
];




$password_CT = "password";
$password_CA = "test";
$password_TS = "synthèse";

$CT_link = "./ressource/pdf/ct.pdf";
$CA_link = "./ressource/pdf/ca.pdf";

// Social Media Links
$config['social_links'] = [
    'github' => [
        'url' => 'https://github.com/CamoLover',
        'icon' => 'fab fa-github'
    ],
    'linkedin' => [
        'url' => 'https://www.linkedin.com/in/evan-escabasse-8a205a264/',
        'icon' => 'fab fa-linkedin'
    ],
    'email' => [
        'url' => 'mailto:escabasse.evan@pixeleur.fr',
        'icon' => 'fas fa-envelope'
    ],
    'npm' => [
        'url' => 'https://www.npmjs.com/~camolover',
        'icon' => 'fab fa-npm'
    ],
    'codepen' => [
        'url' => 'https://codepen.io/CamoLover',
        'icon' => 'fab fa-codepen'
    ]
];