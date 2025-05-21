# Veille Technologique : L'IA Générative dans le Développement Informatique et le Jeu Vidéo

## Introduction
L'intelligence artificielle générative révolutionne la manière dont les logiciels et les jeux vidéo sont conçus. Capable de générer du code, des images, voire des mondes entiers, elle soulève autant d'enthousiasme que de controverses. Si elle promet une automatisation accrue et une créativité décuplée, elle suscite également des débats sur la qualité du contenu produit, l'éthique de son utilisation et son impact sur l'industrie du développement.

## 1. IA et génération de code : outil révolutionnaire ou simplification excessive ?
L'un des premiers domaines touchés par l'IA générative est la production de code. Des outils comme GitHub Copilot et Tabnine facilitent la programmation en automatisant des tâches complexes, mais la qualité du code produit varie selon le modèle utilisé. Une étude de cas [AI_PythonGame_Comparison](https://github.com/CamoLover/AI_PythonGame_Comparison) compare plusieurs IA (Claude, ChatGPT-4o, Deepseek etc...) sur la création d'un jeu en Python à partir d'un même prompt. Les résultats montrent des différences notables en termes de structuration du code et de compréhension du cahier des charges, mettant en lumière les limites de l'IA pour des tâches demandant une logique approfondie.

en voici les résultat : 
### **Le prompt**
Les models on reçu l'exacte même prompt :
```
Make a Python game with a window, where the player controls a circle using the arrow keys. The movement should feel like ice—meaning the circle doesn't stop immediately when the arrow keys are released.

Randomly spawning squares should appear on the map. When the player hovers over them, they should be consumed, causing the circle to grow.

If the circle becomes too large, the screen should zoom out, making all squares smaller.

Include a score system and ensure a good UI/UX.
```

### **Les IA tester :**
Les modèles suivant on était tester : 
- **Claude** ([claude.ai](https://claude.ai)) 
- **ChatGPT-4o** ([chatgpt.com](https://chatgpt.com/)) 
- **Deepseek** ([chat.deepseek.com](https://chat.deepseek.com/)) 
- **Deepseek (DeepThink Mode)** ([chat.deepseek.com](https://chat.deepseek.com/))
- **Mistral** ([chat.mistral.ai](https://chat.mistral.ai/))
- **Gemini** ([gemini.google.com](https://gemini.google.com/app))
- **Blackbox AI** ([blackbox.ai](https://www.blackbox.ai/))`
- **Copilot** ([copilot.microsoft.com](https://copilot.microsoft.com/))
   

### Comparatif des résultats
| Model                     | Ice-Like Movement | Square Spawning | Circle Growth | Screen Resize | Stability |
|--------------------------|-----------------|----------------|---------------|---------------|------------|
| **ChatGPT-4o**           | ✅              | 🔄 (Only on consumption) | ✅ | ❌ | ❌ (Crashes) |
| **Claude**               | ✅              | ✅             | ❌           | ❌ (Resizes window) | ❌ (Flickers) |
| **Deepseek**             | ✅              | ✅ (Buggy)    | ✅           | ✅ (Buggy)    | ❌ |
| **Deepseek (DeepThink)** | ✅              | ❌             | ❌           | ❌           | ❌ (Unplayable) |
| **Mistral**              | ✅              | 🔄 (Only on consumption) | ✅ | ❌ | ✅ (No crashes) |
| **Gemini**               | ❌              | ✅             | ❌           | ❌           | ❌ |
| **BlackboxAI**           | ✅              | 🔄 (Only on consumption) | ✅           | ✅           | ✅ |
| **Copilot**              | ✅              | 🔄 (Only on consumption) | ❌           | ❌ (in fact shrink the windows) | 🔄 (crash if the windows become too small) |

----
Cependant, cette assistance à la programmation n'est pas sans risques. Un rapport de [KPMG](https://kpmg.com/fr/fr/articles/data-ia/ia-generative-developpement-logiciel.html) souligne que si ces outils améliorent la productivité, ils posent aussi des problèmes de fiabilité et de sécurité. Un code mal optimisé ou biaisé peut entraîner des failles exploitables, d'où l'importance de ne pas se reposer entièrement sur ces générateurs.

## 2. L'IA dans le jeu vidéo : création ou dénaturation ?
L'impact de l'IA générative dans l'industrie du jeu vidéo va bien au-delà de la simple assistance au codage. Certains développeurs adoptent une approche radicale, comme [@levelsio](https://x.com/levelsio), qui a conçu un jeu multijoueur de simulation de vol presque entièrement codé par IA. Son expérience met en avant les avantages de cette méthode, notamment une rapidité de développement impressionnante et une expérimentation facilitée. Cependant, il souligne également que l'IA n'est pas encore capable de comprendre pleinement les nuances du game design et qu'un travail humain reste nécessaire pour peaufiner les détails.

Dans une autre direction, [Oasis AI](oasis-ai.org) pousse l'expérimentation encore plus loin. Ce projet propose le jeu Minecraft entièrement généré par IA, mais sans véritable code derrière lui. Chaque élément visuel du jeu est issu d'images créées par des modèles génératifs, ce qui engendre une esthétique unique, proche de minecraft, mais aussi un manque de cohérence et d'interaction structurelle. Ce type d'approche montre les limites actuelles de l'IA dans le domaine du développement de jeux véritablement interactifs et fonctionnels, mais montre également a quoi le futur du développement de jeux pourrait ressembler, plus de développeur, mais juste une ia générative d'image.

D'autres développeurs, comme [Camo Enjoyer](https://x.com/Camo_Enjoyer/status/1897235924175741424) et d'autres, explorent le "vibe coding", une approche où l'IA est utilisée pour transformer des idées abstraites en prototypes fonctionnels grâce à des outils comme Bolt.new et Cursor. Cette approche illustre la manière dont l'IA peut libérer la créativité des développeurs en leur permettant de se concentrer sur l'aspect conceptuel plutôt que sur la syntaxe du code.

En parallèle, des entreprises comme Microsoft développent des IA telles que [WHAM](https://cadenaser.com/nacional/2025/02/19/microsoft-presenta-wham-una-ia-para-generar-mundos-en-videojuegos-cadena-ser/), capables de créer des mondes ouverts dynamiques et interactifs en analysant des données de gameplay. Bien que cette technologie offre des possibilités fascinantes, elle pose aussi la question de l'uniformisation des expériences de jeu et du rôle réduit des concepteurs humains.

## 3. Controverses et limites 
L'IA générative ne fait pas l'unanimité, notamment dans le domaine des assets graphiques. Une discussion sur [Reddit](https://www.reddit.com/r/unrealengine/comments/1apqdfe/the_marketplace_is_infested_with_ai_art_doesnt_it/) met en évidence la frustration des créateurs face à l'invasion d'images générées par IA sur le Marketplace Unreal Engine. Si ces assets permettent aux développeurs indépendants d'accéder à des ressources à moindres coûts, ils posent des problèmes de qualité et d'éthique. La difficulté à distinguer les créations humaines des productions automatisées soulève des interrogations sur la place des artistes dans l'industrie du jeu vidéo.

D'un point de vue plus technique, la sécurité du code généré par IA reste un enjeu crucial. Un article du [Monde](https://www.lemonde.fr/securite-cloud/article/2024/09/06/avec-l-essor-de-l-ia-generative-la-securite-cloud-se-reinvente_6305557_475.html) met en garde contre les risques de failles de sécurité liés à ces technologies, notamment dans le cloud. Sans une vérification rigoureuse, des systèmes entiers pourraient être vulnérables à des attaques exploitant les erreurs commises par ces IA.

## Conclusion
L'IA générative modifie profondément la façon dont les logiciels et les jeux vidéo sont conçus. Si elle ouvre des possibilités innovantes en termes de rapidité de développement et d'accessibilité à la création, elle entraîne aussi des problèmes de qualité, d'éthique et de sécurité. Le débat autour de son utilisation, entre enthousiasme et méfiance, montre que son intégration devra se faire avec précaution, en trouvant un équilibre entre assistance automatisée et intervention humaine.



