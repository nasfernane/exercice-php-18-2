<?php 

require('./components/header.php');
require('./components/nav.php');

$arrayViews = [
    'home' => 'home.php',
    'contact' => 'contact.php',
    'blog' => 'blog.php',
];

// récupère l'url après "/index/"
$path = strtolower(substr($_SERVER["REQUEST_URI"], 1));

// si il y a un chemin existe
if ($path) {
    // si le chemin existe dans les vues
    if (array_key_exists($path, $arrayViews)) {
        require("views/$arrayViews[$path]");
    } else {
        require('views/404.php');
    }
}


require ('./components/footer.php');

?>