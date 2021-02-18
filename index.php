<?php 

require('./components/header.php');
require('./components/nav.php');

$arrayPages = [
    'home' => 'home.php',
    'contact' => 'contact.php',
    'blog' => 'blog.php',
];

// La variable $page existe-elle dans l'url ?
if (!empty($_GET['page'])) {
    // Vérification de la valeur passée dans l'url : est-elle une clé du tableau ?
    if(array_key_exists(strtolower($_GET['page']), $arrayPages)) {
    // Oui, alors on l'importe
    require('views/'. $arrayPages[ strtolower($_GET['page']) ] );
    } else {
    // Non, alors on importe un fichier par défaut
    include('views/home.php');
    }
} else {
// Non, on affiche la page d'accueil par défaut
require('views/'. $arrayPages['home']);
}

require ('./components/footer.php');

?>