<!DOCTYPE html>
<html lang="fr">
 <?php 
 // cv.php 
 // definir mon cv 
 $titre=" mon cv ";
 ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titre;?> Mon CV en HTML</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/script.js"></script>
</head>

<body>
    <header>
        <img src="/assets/images/image.jpg" alt="Photo de profil">
        <h1>ÉTUDIANT EN WEB DESIGN</h1>
        <p>Bienvenue sur mon CV interactif.</p>
        <p>Numéro de téléphone : <a href="tel:+330616401691">+33 06 16 40 16 91</a></p>
        <p>Contactez-moi par e-mail : <a href="mailto:awima@normandiewebschool.fr">awima@normandiewebschool.fr</a></p>
        <p>Date de naissance : 06 novembre 1999</p>
    </header>
    
    <nav>
        <button>Accueil</button>
        <button>Expériences professionnelles</button>
        <button>Certifications</button>
        <button>Compétences</button>
        <button>Qualités</button>
        <button>Centres d'intérêts</button>
        <button>Formations</button>
    </nav>
    
    <main>
        <section id="Accueil">
            <h2>Accueil</h2>
            <p>Bonjour et bienvenue ! Je suis IMA ABDALLAH WILFRIED, étudiant en première année à la 
                <strong>Normandie Web School</strong>, une école spécialisée dans les métiers du web. 
                Passionné par le développement et le design web, je me forme chaque jour pour acquérir de nouvelles 
                compétences et devenir un expert dans ce domaine en constante évolution.
            </p>
            <p>Actuellement en formation, j'acquiers des bases solides en développement, ainsi qu'en 
                gestion de projets numériques. Mon objectif est de maîtriser toutes les facettes de la 
                création de sites web et d'applications pour offrir des solutions innovantes aux 
                entreprises et aux particuliers.
            </p>
            <p>Je suis constamment à la recherche de nouveaux défis et opportunités d'apprentissage, 
                car je suis convaincu que c'est en pratiquant que l'on progresse le plus. 
                En dehors de mes études, je m'intéresse aux activités culturelles, 
                ce qui me permet de rester curieux et de trouver des idées créatives qui 
                nourrissent mes projets.
            </p>
            <p>Je vous invite à parcourir mon CV en ligne pour en savoir plus sur mes expériences, 
                mes compétences et mes projets. N'hésitez pas à me contacter pour toute opportunité de 
                collaboration ou de stage dans le domaine du web et du design.
            </p>
        </section>
        
        <section id="Experiences-professionnelles">
            <h2>Expériences Professionnelles</h2>
            <h3>Stagiaire en réseau télécommunication</h3>
            <p><strong>MOOV AFRICA</strong> (Août 2023 - Octobre 2023)</p>
            <ul>
                <li>Établir un diagnostic de situation et proposer des solutions adaptées.</li>
                <li>Mettre en place une architecture réseau.</li>
                <li>Garantir l'efficacité des logiciels systèmes et infrastructures de communication.</li>
                <li>Assurer une veille technologique.</li>
                <li>Améliorer la performance du réseau.</li>
                <li>Installer et intégrer de nouveaux outils.</li>
                <li>Évaluer les risques et opportunités techniques.</li>
            </ul>
            
            <h3>Assistant réseau</h3>
            <p><strong>ECODEV</strong> (Mars 2022 - Juillet 2023)</p>
            <ul>
                <li>Câblage et installation de systèmes de visioconférence et de communication unifiée.</li>
                <li>Câblage réseau interne auprès de clients professionnels.</li>
                <li>Participation au déploiement de la fibre optique avec <strong>ORANGE, TELECEL, MOOV AFRICA</strong>.</li>
                <li>Développeur WordPress & infographiste digital.</li>
            </ul>
        </section>
        
        <section id="Certifications">
            <h2>Certifications Obtenues</h2>
            <ul>
                <li>Décembre 2022 : Formation en robotique, programmation, drones et intelligence artificielle.</li>
                <li>Novembre 2022 : Certificat en community management.</li>
                <li>Novembre 2022 : Certificat en prise de parole en visio et en présentiel.</li>
                <li>Octobre 2022 : Certificat d'accomplissement - Installation de WordPress.</li>
                <li>Octobre 2022 : Certificat d'accomplissement - L'essentiel de Photoshop 2021.</li>
                <li>Septembre 2022 : Certificat d'accomplissement - Installation de WordPress.</li>
            </ul>
        </section>
        
        <section id="Competences">
            <h2>Compétences</h2>
            <ul>
                <li>Conception de sites web avec WordPress.</li>
                <li>Création d'un CV interactif en HTML, CSS et JavaScript.</li>
                <li>Création d'une charte graphique.</li>
                <li>Réalisation d'un CV avec InDesign.</li>
                <li>Maîtrise des outils : Photoshop, Illustrator, InDesign, Cisco, Filmora.</li>
            </ul>
        </section>
        
        <section id="Qualites">
            <h2>Qualités</h2>
            <ul>
                <li>Autonome.</li>
                <li>Méthodique.</li>
                <li>Capacité à gérer les situations d'urgence.</li>
                <li>Esprit de synthèse et d'analyse.</li>
                <li>Sens du travail en équipe.</li>
            </ul>
        </section>
        
        <section id="Centres-Interets">
            <h2>Centres d'Intérêts</h2>
            <ul>
                <li>Lecture.</li>
                <li>Boxe.</li>
                <li>Karaté.</li>
                <li>Musique & voyage.</li>
            </ul>
        </section>
        
        <section id="Formations">
            <h2>Formations</h2>
            <ul>
                <li>2025-2028 : Normandie Web School - Bachelor Chef de Projets.</li>
                <li>Formation en UX/UI Design & Développement.</li>
                <li>2023-2024 : Brevet Professionnel de Technicien en Réseau et Maintenance Informatique.</li>
                <li>2022-2023 : Terminal H (Informatique).</li>
            </ul>
        </section>
    </main>
    
    <footer>
        <h1>Merci, à bientôts.</h1>
        <img src="assets/images/Logo-NWS-blanc.svg" alt="Logo Normandie Web School">
    </footer>
</body>
</html>
