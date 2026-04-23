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
            'description' => 'Profen.app est une plateforme de chiffrement client-side sécurisée permettant de partager textes et fichiers de manière confidentielle. Le système utilise AES-256-GCM et Argon2id pour garantir une sécurité cryptographique de niveau professionnel. Disponible en application web, mobile, extension Chrome/Firefox, et entièrement open-source.',
            'skills' => ['PHP', 'JavaScript', 'HTML5', 'CSS3', 'MySQL', 'TailwindCSS', 'Argon2Id', 'AES-256-GCM'],
            'ownership' => 'pixeleur'
        ],
    ],
    'skills' => [
        'Langues' => ['C++', 'PHP', 'JavaScript', 'TypeScript', 'Python', 'Java', 'Shell', 'HTML5', 'CSS3'],
        'Frameworks' => ['Node.js', 'React', 'Angular', 'Discord.js', 'spring', 'Expo Go', 'TailwindCSS'],
        'Outils' => ['Unreal Engine', 'Docker', 'GitHub', 'GitLab', 'Bitbucket', 'Jira', 'Git', 'VS Code', 'Android Studio', 'Intellij Idea'],
        'Base de données' => ['MySQL', 'SQLite', 'Firebase', 'Postgre SQL', 'MariaDB', 'MongoDB']
    ],
    'experience' => [
        [
            'year' => '2019-Present',
            'company' => 'Pixeleur',
            'position' => 'Fondateur & Directeur développement',
            'description' => 'Studio de développement personnel, créateur de nombreux projets',
            'logo' => './media/image/logo/pixeleur.png'
        ],
        [
            'year' => '2025-Present',
            'company' => 'TravelJuice',
            'position' => 'Développeur Java Angular (Alternance)',
            'description' => 'Développement d\'applications Java et Angular',
            'logo' => './media/image/logo/traveljuice.jpg'
        ],
        [
            'year' => '2023-2025',
            'company' => 'Mairie d\'Aix-En-Provence',
            'position' => 'Développeur Web & Mobile (Alternance)',
            'description' => 'Développement d\'applications web et mobiles',
            'logo' => './media/image/logo/aix.webp'
        ],
        [
            'year' => '2021',
            'company' => 'ITER Organisation',
            'position' => 'Stagiaire',
            'description' => 'Stage de 4 semaines au service développement informatique',
            'logo' => './media/image/logo/iter.webp'
        ]
    ],
    'education' => [
        [
            'year' => '2026-2029',
            'school' => 'Polytech Marseille',
            'degree' => 'Diplôme d\'ingénieur en informatique',
            'description' => 'Formation en alternance',
            'logo' => './media/image/logo/polytech.jpg'
        ],
        [
            'year' => '2025-2026',
            'school' => 'Ynov Sophia Antipolis',
            'degree' => 'Bachelor 3 Informatique',
            'description' => 'Formation en alternance',
            'logo' => './media/image/logo/ynov.jpg'
        ],
        [
            'year' => '2023-2025',
            'school' => 'CCI Vaucluse Provence',
            'degree' => 'BTS SIO option SLAM',
            'description' => 'Formation en alternance',
            'logo' => './media/image/logo/cci.jpg'
        ],
        [
            'year' => '2020',
            'school' => 'Lycée Saint-Éloi Aix-En-Provence',
            'degree' => 'Bac Pro SN',
            'description' => 'Spécialité Systèmes Numériques',
            'logo' => './media/image/logo/saint-eloi.png'
        ]
    ]
];
// Add skill icons mapping to your config array
$config['skillIcons'] = [
    'C++' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/cplusplus/cplusplus-original.svg',
    'PHP' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg',
    'JavaScript' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg',
    'TypeScript' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/typescript/typescript-original.svg',
    'Python' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg',
    'Java' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original.svg',
    'Shell' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bash/bash-original.svg',
    'HTML5' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg',
    'CSS3' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg',
    'Node.js' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg',
    'React' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg',
    'Angular' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/angularjs/angularjs-original.svg',
    'Discord.js' => 'https://icon.icepanel.io/Technology/svg/Discord.js.svg',
    'Expo Go' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/expo/expo-original.svg',
    'Unreal Engine' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/unrealengine/unrealengine-original.svg',
    'Docker' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-original.svg',
    'GitHub' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg',
    'GitLab' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/gitlab/gitlab-original.svg',
    'Bitbucket' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bitbucket/bitbucket-original.svg',
    'Jira' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/jira/jira-original.svg',
    'VS Code' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vscode/vscode-original.svg',
    'Android Studio' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/androidstudio/androidstudio-original.svg',
    'MySQL' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg',
    'SQLite' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/sqlite/sqlite-original.svg',
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
            'Interface de paramétrage avancée',
            'L\'interface de configuration offre un contrôle total : activation de la synthèse vocale xVAsynth, gestion des souvenirs, modes d\'interaction (texte, vocal, immersif), verbosité des réponses et langue (anglais, français, espagnol).',
            'Paramètres avancés avec gestion de l\'état émotionnel (curiosité, irritation, ennui, attachement) et affichage temps réel du corps virtuel (posture, luminance, mains). Personnalisation complète via un tableau de bord intuitif.'
        ],
        'paragraphe2' => [
            'Mode immersif conversationnel',
            'Vue immersive avec synthèse vocale xVAsynth et modèle Assaultron de Fallout 4. Interface minimaliste créant une personnalité distinctive (25% amical, 70% sarcastique, 5% séducteur).',
            'Reconnaissance vocale temps réel (Mistral Voxtral) pour conversations mains-libres et vision webcam (MediaPipe) pour détection contextuelle. Architecture embodied agent traduisant les intentions en expressions corporelles virtuelles.'
        ],
        'paragraphe3' => [
            'Tableau de bord administrateur',
            'Monitoring temps réel (port 8081) affichant performances système : métriques API, synthèse vocale, tokens LLM et délais composants. Graphiques Chart.js avec stats min/avg/max sur 1000 points.',
            'Interface montrant uptime, statut services (AI Core, Voice, Discord Bot) et journal d\'erreurs. Export JSON et rapports Markdown automatiques. Monitoring production-grade thread-safe sans impact performance.'
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
            'Documentation Esolangs.org',
            'Morse Assembly Language (MAL) est référencé sur Esolangs.org, la plateforme de référence pour les langages ésotériques. Le langage fusionne assembly et code Morse, créant un système Turing-complet avec instructions, registres et valeurs encodés en points et traits.',
            'La documentation complète détaille la syntaxe (espaces entre caractères, " / " entre tokens, newlines entre lignes), l\'architecture VM (6 registres, 1024 cellules mémoire, stack, flags CPU), et le jeu d\'instructions complet (MOV, ADD, JMP, OUT, etc.).'
        ],
        'paragraphe2' => [
            'Exemple de programme',
            'Comparaison directe entre assembly classique et Morse Assembly. Le programme "Hello World" illustre la conversion : MOV AX, 72 devient "-- --- ...- / .- -..- --..-- / --... ..---". Chaque instruction assembly est transformée caractère par caractère en séquence Morse.',
            'L\'interpréteur Python (morse_interpreter.py) exécute les fichiers .morse, avec support complet des opérations arithmétiques (ADD, SUB, MUL, DIV), logiques (AND, OR, XOR, NOT), sauts conditionnels (JE, JNE, JG, JL) et I/O (IN, OUT).'
        ],
        'paragraphe3' => [
            'Alphabet Morse complet',
            'Table de correspondance complète : lettres A-Z (.- à --...), chiffres 0-9 (.---- à -----), et caractères spéciaux (virgule --..-- , point .-.-.- , etc.). Encodage standard Morse international utilisé pour toutes les conversions.',
            'L\'assembleur (morse_assembler.py) convertit assembly → Morse tandis que l\'interpréteur peut aussi servir d\'outil standalone de conversion texte ↔ Morse (--encode / --decode). Tribute aux télécommunications historiques via programmation moderne.'
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
        'fullDescription' => 'Profen.app est une plateforme de chiffrement client-side sécurisée permettant de partager textes et fichiers de manière confidentielle. Le système utilise AES-256-GCM et Argon2id pour garantir une sécurité cryptographique de niveau professionnel. Disponible en application web, mobile, extension Chrome/Firefox, et entièrement open-source.',
        'paragraphe1' => [
            'Interface de chiffrement',
            'Page principale offrant chiffrement texte/fichier avec sécurité client-side. AES-256-GCM (256-bit security, NIST approved) et Argon2id KDF (64MB memory, 4 iterations, résistant GPU/ASIC). Toutes opérations cryptographiques dans le navigateur via Web Crypto API.',
            'Interface intuitive avec validation password strength, normalisation encodage, génération CSPRNG (256-bit entropy). Zéro plaintext transmis au serveur - confidentialité totale garantie par design cryptographique.'
        ],
        'paragraphe2' => [
            'Résultat et partage',
            'Module post-chiffrement affichant QR code, message succès et lien slug unique (128-bit entropy). Data key chiffrée séparément avec password-derived key (Argon2id). GCM authentication tag (128-bit) garantissant intégrité.',
            'Système double-encryption : data key aléatoire chiffre contenu, password key chiffre data key. Architecture résistante brute-force (~2¹²⁸ opérations) et forgery (2⁻¹²⁸ probabilité). Partage sécurisé via URL courte.'
        ],
        'paragraphe3' => [
            'Page de déchiffrement',
            'Interface déchiffrement avec validation authentification GCM et vérification intégrité. Constant-time comparison prévient timing attacks. Support IND-CCA2 security via unique IVs (96-bit) par opération.',
            'Multi-plateforme : web app, mobile app, extensions Chrome/Firefox. Open-source avec compliance NIST SP 800-38D/132, RFC 9106, FIPS 140-2. Post-quantum ready (AES-256 = 128-bit quantum resistance).'
        ],
        'gallery' => [
            './media/projects/pixeleur/profen1.png',
            './media/projects/pixeleur/profen2.png',
            './media/projects/pixeleur/profen3.png',
        ],
        'liveDemo' => 'https://new.pixeleur.fr',
        'competence' => [
            'Implémentation cryptographie client-side AES-256-GCM et Argon2id',
            'Architecture multi-plateforme (web, mobile, extensions navigateur) open-source'
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