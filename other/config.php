<?php
$config = [
    'name' => 'Escabasse Evan',
    'title' => 'Développeur Fullstack & Technicien en système IA',
    'email' => 'escabasse.evan@pixeleur.fr',
    'github' => 'https://github.com/CamoLover',
    'projects' => [
        [
            'name' => 'ASR-7',
            'url' => 'https://github.com/CamoLover/AssaultronProject',
            'description' => 'Un agent d\'IA incarné avancé, doté d\'interactions guidées par la personnalité, d\'une perception multimodale (vision, parole), d\'une exécution autonome des tâches et d\'une synthèse vocale en temps réel. Inspiré des architectures de subsomption en robotique, il fait le lien entre le raisonnement cognitif, la prise de décision comportementale et le contrôle d\'un corps virtuel ou physique pour des expériences d\'IA immersives.',
            'skills' => ['Python', 'HTML5', 'CSS3', 'JavaScript', 'Mistral AI', 'Openrouter'],
            'ownership' => 'personal'
        ],
        [
            'name' => 'Morse Assembly Language',
            'url' => 'https://esolangs.org/wiki/Morse-Assembly-Language',
            'description' => 'Morse Assembly Language est un langage de programmation esotérique conçu pour être écrit en code Morse. Chaque instruction est représentée par une séquence de points et de traits, ce qui rend la programmation à la fois un défi et une expérience unique. Ce langage explore les limites de la communication et de la programmation, offrant une perspective originale sur la manière dont les instructions peuvent être codées et interprétées.',
            'skills' => ['Python', 'Code Morse', 'Assembleur'],
            'ownership' => 'personal'
        ],
        [
            'name' => 'Profen.app',
            'url' => 'https://profen.app',
            'description' => 'Profen.app est une plateforme de gestion de projets et de portfolio en ligne, conçue pour les développeurs et les créateurs. Elle offre une interface intuitive pour présenter des projets, partager des compétences et mettre en avant des réalisations professionnelles. La plateforme permet également de créer un portfolio personnalisé, facilitant ainsi la mise en valeur des compétences et des expériences dans le domaine du développement informatique.',
            'skills' => ['PHP', 'JavaScript', 'HTML5', 'CSS3', 'MySQL', 'TailwindCSS', 'Argon2Id', 'AES-256-GCM'],
            'ownership' => 'pixeleur'
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
            'year' => '2025-Present',
            'company' => 'TravelJuice',
            'position' => 'Développeur Java Angular (Alternance)',
            'description' => 'Développement d\'applications Java et Angular pour la plateforme DMP (data management platform) de TravelJuice'
        ],
        [
            'year' => '2023-2025',
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
            'year' => '2025-2026',
            'school' => 'Ynov Sophia Antipolis',
            'degree' => 'Bachelor 3 Informatique',
            'description' => 'Formation en alternance'
        ],
        [
            'year' => '2023-2025',
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
        'text' => 'Personnel'
    ],
    'pixeleur' => [
        'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShBUVdjDkqcl03ysB5UfYr-R2KbK9s09-nzg&s',
        'text' => 'Pixeleur'
    ]
];

// Legacy arrays maintained for backward compatibility (deprecated - use $config['projects'] instead)
$config['projectSkills'] = [];
$config['projectOwnership'] = [];

// Populate legacy arrays from unified projects structure
foreach ($config['projects'] as $project) {
    if (isset($project['skills'])) {
        $config['projectSkills'][$project['name']] = $project['skills'];
    }
    if (isset($project['ownership'])) {
        $config['projectOwnership'][$project['name']] = $project['ownership'];
    }
}
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
    //////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////
    'ASR-7' => [
        'fullDescription' => 'ASR-7 est un projet de développement d\'un assistant vocal intelligent, conçu pour offrir une expérience utilisateur fluide et intuitive. L\'assistant utilise des technologies avancées de reconnaissance vocale et de traitement du langage naturel pour comprendre et répondre aux commandes vocales de manière efficace.',
        'paragraphe1' => [
            '',
            '',
            ''
        ],
        'paragraphe2' => [
            '',
            '',
            ''
        ],
        'gallery' => [
            './media/projects/camolover/asr1.png',
            './media/projects/camolover/asr2.png',
            './media/projects/camolover/asr3.png',
        ],
        'githubUrl' => 'https://github.com/CamoLover/AssaultronProject',
        'liveDemo' => 'https://camolover.dev/APP/ASR-7/',
        'competence' => [
            'Création d\'un assistant vocal intelligent',
            'Création d\'un système agentic personnel garantissant le fonctionnement avec n\'importe quelle LLM'
        ]
    ],
    'Morse Assembly Language' => [
        'fullDescription' => 'Morse Assembly Language est un langage de programmation esotérique conçu pour être écrit en code Morse. Chaque instruction est représentée par une séquence de points et de traits, ce qui rend la programmation à la fois un défi et une expérience unique. Ce langage explore les limites de la communication et de la programmation, offrant une perspective originale sur la manière dont les instructions peuvent être codées et interprétées.',
        'paragraphe1' => [
            '',
            '',
            ''
        ],
        'paragraphe2' => [
            '',
            '',
            ''
        ],
        'gallery' => [
            './media/projects/camolover/morse1.png',
            './media/projects/camolover/morse2.png',
            './media/projects/camolover/morse3.png',
        ],
        'githubUrl' => 'https://github.com/CamoLover/Morse-Assembly-Language',
        'liveDemo' => 'https://esolangs.org/wiki/Morse-Assembly-Language',
        'competence' => [
            'Création d\'un langage de programmation esotérique basé sur le code Morse',
            'Développement d\'un interpréteur Python pour exécuter le code Morse'
        ]
    ],
    'Profen.app' => [
        'fullDescription' => '',
        'paragraphe1' => [
            '',
            '',
            ''
        ],
        'paragraphe2' => [
            '',
            '',
            ''
        ],
        'paragraphe3' => [
            '',
            '',
            ''
        ],
        'gallery' => [
            './media/projects/pixeleur/profen1.png',
            './media/projects/pixeleur/profen2.png',
            './media/projects/pixeleur/profen3.png',
        ],
        'liveDemo' => 'https://new.pixeleur.fr',
        'competence' => [
            '',
            '',
        ]
    ]
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
            'Reddit - r/unrealengine' => 'https://www.reddit.com/r/unrealengine/comments/1apqdfe/the_marketplace_is_infested_with_ai_art_doesnt_it/',
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