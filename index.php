<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formations Coding</title>
</head>
<body>
    <header>
        <div class="container1_header" id="header">
            <img src="img/logo-IIM.png" alt="Logo IIM" class="logo">
            <h1>DEVENEZ UN <br> DEVELOPPEUR</h1>
            <p>Création de site web, Programmation de 
                jeux vidéos, Découverte de nouvelles 
                technologies
            </p>
            <div class="button-container">
                <div class="button-formation">
                    <a href="#mini-formations">Mini formations</a>
                </div>
                <div class="button-decouvrir">
                    <a href="https://www.iim.fr">Découvrir l'IIM</a>
                </div>
            </div>
        </div>
        <div class="form-container">
            <form action="" method="POST">
                <input type="text" placeholder="Nom" name="nom">
                <input type="text" placeholder="Prénom" name="prenom">
                <input type="text" placeholder="Adresse mail" name="mail">
                <input type="text" placeholder="Numéro de téléphone" name="num">
                <select name="formation">
                    <option value="" disabled selected>Choisir une formation</option>
                    <option value="Web Coding Html / CSS">Web Coding Html / CSS</option>
                    <option value="Python Algoritmhie">Pyhton Algorithmie</option>
                    <option value="C# Unity">C# Unity</option>
                </select>
                <input type="submit" value="S'INSCRIRE">
            </form>
        </div>
    </header>

    <?php

require 'vendor/autoload.php';
use \Mailjet\Resources;
$mj = new \Mailjet\Client(getenv('MJ_APIKEY_PUBLIC'), getenv('MJ_APIKEY_PRIVATE'),true,['version' => 'v3']);
$body = [
  'IsExcludedFromCampaigns' => "true",
  'Name' => $_POST['nom'],
  'Prenom' => $_POST['prenom'],
  'Email' => $_POST['mail'],
  'Numero' => $_POST['num'],
  'Formation' => $_POST['formation']
];
$response = $mj->post(Resources::$Contact, ['body' => $body]);
$response->success() && var_dump($response->getData());
?>
    
   
    
    <section>
<h2 class="title_section" id="mini-formations">NOS PROGRAMMES</h2>
    <div class="html">
        
            <div class="contenthtml">
    
    <h3 class="h3_section">HTML / CSS</h3>
    <p>Si vous ne connaissez pas HTML et CSS, apprenez les base de ces languages de programmation essentiels a tout developpeur. Vous serez capable de créer les différents éléments de votre page web tout en y ajoutant du style.</p>
    <a href="#header"><button class="button_section">S'inscrire</button></a>
    <div class="barre"></div>   
</div>
    <div class="imghtml">
            <img src="img/Image 2.png" alt="">
        </div>
    </div>

    <div class="html">
        
            <div class="contenthtml">
    
    <h3 class="h3_section">C / C++ / C#</h3>
    <p>Débutant ou n'ayant pas encore touché aux langage C / C++ / C#, grâce à cette formation vous comprendrez et maitrisez les principes de base de la programmation dans ces trois langages.
</p>
<a href="#header"><button class="button_section">S'inscrire</button></a>
    <div class="barre"></div>   
</div>
    <div class="imgc">
            <img src="img/1_sz9n_vb48iaY9vuzIgqJqQ.png" alt="">
        </div>
    </div>

    <div class="html">
        
            <div class="contenthtml">
    
    <h3 class="h3_section">PHP / MYSQL</h3>
    <p>Apprenez à utiliser le PHP ou un framework PHP en suivant l'une de nos formations. Avec SQL vous serez capable de vous connecter à une base de données afin de les lier à vos sites web.</p>
    <a href="#header"><button class="button_section">S'inscrire</button></a>
    <div class="barre"></div>   
</div>
    <div class="imgphp">
            <img src="img/php-mysql-development_IDEALCONCEPTION.png" alt="">
        </div>
    </div>
</section>

    <footer>
        <div class="flex-logo">
            <a href="https://www.youtube.com/c/IIMfr"><img src="img/youtube-logo-24.png" alt="youtube"></a>
            <a href="https://www.linkedin.com/school/iim---institut-de-l'internet-et-du-multim%C3%A9dia/"><img src="img/linkedin-logo-24.png" alt="linkedin"></a>
            <a href="https://twitter.com/IIMparis?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><img src="img/twitter-logo-24.png" alt="twitter"></a>
            <a href="https://fr-fr.facebook.com/Institut.Internet.Multimedia/"><img src="img/facebook-logo-24.png" alt="facebook"></a>
            <a href="https://www.instagram.com/iim_paris/?hl=fr"><img src="img/instagram-logo-24.png" alt="instagram"></a>
        </div>
        <h3>IIM Digital School Paris</h3>
        <p>www.iim.fr</p>
        <p>92 916 Paris La Défense Cedex</p>
        <p>Admissions : 01 81 00 30 33</p>
        <p>admissions@iim.fr</p>
    </footer>
</body>
</html>
