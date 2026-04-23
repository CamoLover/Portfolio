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