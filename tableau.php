<?php
session_start();
include "./other/config.php";

// Check if user is authorized
if (!isset($_SESSION['TS_authorized']) || $_SESSION['TS_authorized'] !== true) {
    header('Location: ./index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $config['name']; ?> | Tableau de Synthèse</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style/stylings.css">
    <link rel="stylesheet" href="./style/retro-sunset.css">
</head>
<body class="bg-gray-900 text-white flex flex-col min-h-screen">
    <nav class="fixed w-full bg-black bg-opacity-80 backdrop-filter backdrop-blur-lg z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex-shrink-0">
                    <a href="https://camolover.dev" class="gradient-text font-bold text-xl">camolover.dev</a>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="./index.php" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Retour au Portfolio</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main class="pt-24 pb-12 px-4 flex-grow">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-3xl font-bold mb-8 text-center gradient-text">Tableau de synthèse des réalisations professionnelles</h1>
            
            <div class="text-center mb-6">
                <a href="./media/TableauSyntheseE5.pdf" target="_blank" class="inline-flex items-center px-6 py-3 bg-purple-600 hover:bg-purple-700 text-white font-medium rounded-lg transition-colors">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 12l-4-4h8l-4 4z"/>
                    </svg>
                    Télécharger la version PDF
                </a>
            </div>

            <div class="overflow-x-auto bg-gray-800 bg-opacity-50 rounded-lg shadow-xl p-4 border border-purple-900">
                <table class="w-full border-collapse">
                    <thead>
                        <tr>
                            <th class="bg-purple-900 bg-opacity-40 text-white font-medium py-4 px-4 text-sm text-left border-b-2 border-purple-500">Réalisations Pro</th>
                            <th class="bg-purple-900 bg-opacity-40 text-white font-medium py-4 px-4 text-sm text-center border-b-2 border-purple-500">Gérer le patrimoine informatique</th>
                            <th class="bg-purple-900 bg-opacity-40 text-white font-medium py-4 px-4 text-sm text-center border-b-2 border-purple-500">Répondre aux incidents et aux demandes d'assistance</th>
                            <th class="bg-purple-900 bg-opacity-40 text-white font-medium py-4 px-4 text-sm text-center border-b-2 border-purple-500">Développer la présence en ligne</th>
                            <th class="bg-purple-900 bg-opacity-40 text-white font-medium py-4 px-4 text-sm text-center border-b-2 border-purple-500">Travailler en mode projet</th>
                            <th class="bg-purple-900 bg-opacity-40 text-white font-medium py-4 px-4 text-sm text-center border-b-2 border-purple-500">Mettre à disposition un service informatique</th>
                            <th class="bg-purple-900 bg-opacity-40 text-white font-medium py-4 px-4 text-sm text-center border-b-2 border-purple-500">Organiser son développement professionnel</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-purple-900 hover:bg-opacity-20 transition-colors duration-200">
                            <td class="bg-purple-800 bg-opacity-30 font-medium py-3 px-4 text-white border-b border-purple-700">GLPI</td>
                            <td class="bg-purple-700 bg-opacity-30 text-center py-3 px-4 border-b border-purple-700"><span class="text-green-400 text-xl">✅</span></td>
                            <td class="text-center py-3 px-4 border-b border-purple-700"></td>
                            <td class="text-center py-3 px-4 border-b border-purple-700"></td>
                            <td class="text-center py-3 px-4 border-b border-purple-700"></td>
                            <td class="text-center py-3 px-4 border-b border-purple-700"></td>
                            <td class="text-center py-3 px-4 border-b border-purple-700"></td>
                        </tr>
                        <tr class="hover:bg-purple-900 hover:bg-opacity-20 transition-colors duration-200">
                            <td class="bg-purple-800 bg-opacity-30 font-medium py-3 px-4 text-white border-b border-purple-700">Fast Sushi</td>
                            <td class="text-center py-3 px-4 border-b border-purple-700"></td>
                            <td class="text-center py-3 px-4 border-b border-purple-700"></td>
                            <td class="text-center py-3 px-4 border-b border-purple-700"></td>
                            <td class="bg-purple-700 bg-opacity-30 text-center py-3 px-4 border-b border-purple-700"><span class="text-green-400 text-xl">✅</span></td>
                            <td class="text-center py-3 px-4 border-b border-purple-700"></td>
                            <td class="text-center py-3 px-4 border-b border-purple-700"></td>
                        </tr>
                        <tr class="hover:bg-purple-900 hover:bg-opacity-20 transition-colors duration-200">
                            <td class="bg-purple-800 bg-opacity-30 font-medium py-3 px-4 text-white border-b border-purple-700">pixeleur.fr</td>
                            <td class="text-center py-3 px-4 border-b border-purple-700"></td>
                            <td class="text-center py-3 px-4 border-b border-purple-700"></td>
                            <td class="bg-purple-700 bg-opacity-30 text-center py-3 px-4 border-b border-purple-700"><span class="text-green-400 text-xl">✅</span></td>
                            <td class="text-center py-3 px-4 border-b border-purple-700"></td>
                            <td class="text-center py-3 px-4 border-b border-purple-700"></td>
                            <td class="bg-purple-700 bg-opacity-30 text-center py-3 px-4 border-b border-purple-700"><span class="text-green-400 text-xl">✅</span></td>
                        </tr>
                        <tr class="hover:bg-purple-900 hover:bg-opacity-20 transition-colors duration-200">
                            <td class="bg-purple-800 bg-opacity-30 font-medium py-3 px-4 text-white">Ultraline.app</td>
                            <td class="bg-purple-700 bg-opacity-30 text-center py-3 px-4 border-b border-purple-700"><span class="text-green-400 text-xl">✅</span></td>
                            <td class="text-center py-3 px-4 border-b border-purple-700"></td>
                            <td class="bg-purple-700 bg-opacity-30 text-center py-3 px-4 border-b border-purple-700"><span class="text-green-400 text-xl">✅</span></td>
                            <td class="text-center py-3 px-4 border-b border-purple-700"></td>
                            <td class="bg-purple-700 bg-opacity-30 text-center py-3 px-4 border-b border-purple-700"><span class="text-green-400 text-xl">✅</span></td>
                            <td class="bg-purple-700 bg-opacity-30 text-center py-3 px-4 border-b border-purple-700"><span class="text-green-400 text-xl">✅</span></td>                            
                        </tr>
                        <tr class="hover:bg-purple-900 hover:bg-opacity-20 transition-colors duration-200">
                            <td class="bg-purple-800 bg-opacity-30 font-medium py-3 px-4 text-white border-b border-purple-700">AixMobile</td>
                            <td class="text-center py-3 px-4 border-b border-purple-700"></td>
                            <td class="text-center py-3 px-4 border-b border-purple-700"></td>
                            <td class="bg-purple-700 bg-opacity-30 text-center py-3 px-4 border-b border-purple-700"><span class="text-green-400 text-xl">✅</span></td>
                            <td class="text-center py-3 px-4 border-b border-purple-700"></td>
                            <td class="bg-purple-700 bg-opacity-30 text-center py-3 px-4 border-b border-purple-700"><span class="text-green-400 text-xl">✅</span></td>
                            <td class="text-center py-3 px-4 border-b border-purple-700"></td>
                        </tr>
                        <tr class="hover:bg-purple-900 hover:bg-opacity-20 transition-colors duration-200">
                            <td class="bg-purple-800 bg-opacity-30 font-medium py-3 px-4 text-white">DélibArch</td>
                            <td class="text-center py-3 px-4"></td>
                            <td class="bg-purple-700 bg-opacity-30 text-center py-3 px-4"><span class="text-green-400 text-xl">✅</span></td>
                            <td class="bg-purple-700 bg-opacity-30 text-center py-3 px-4"><span class="text-green-400 text-xl">✅</span></td>
                            <td class="text-center py-3 px-4"></td>
                            <td class="text-center py-3 px-4"></td>
                            <td class="text-center py-3 px-4"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="mt-8 mb-8">
                <h2 class="text-2xl font-bold mb-4 text-center gradient-text">Version PDF intégrée</h2>
                <div class="w-full bg-gray-800 bg-opacity-50 rounded-lg shadow-xl p-4 border border-purple-900">
                    <object data="./media/TableauSyntheseE5.pdf" type="application/pdf" class="w-full" style="height: 800px;">
                        <p class="text-center text-gray-400">
                            Votre navigateur ne peut pas afficher le PDF directement. 
                            <a href="./media/TableauSyntheseE5.pdf" class="text-purple-400 hover:text-purple-300" target="_blank">Cliquez ici pour le télécharger</a>.
                        </p>
                    </object>
                </div>
            </div>
            
            <div class="mt-12 text-center">
                <a href="./index.php" class="inline-block bg-purple-600 text-white px-6 py-3 rounded-md hover:bg-purple-700 transition-colors">
                    Retour au Portfolio
                </a>
            </div>
        </div>
    </main>
    
    <footer class="bg-black py-8 border-t border-gray-800 mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-gray-400">© <?php echo date('Y'); ?> <?php echo $config['name']; ?>. Tous droits réservés.</p>
        </div>
    </footer>
</body>
</html> 