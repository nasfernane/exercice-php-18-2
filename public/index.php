<?php 
require('./components/header.php');
require('./components/nav.php');

require '../vendor/autoload.php';

$router = new AltoRouter();

$router->map('GET', '/', function () {
    require './views/home.php';
});

$router->map('GET', '/home', function () {
    require './views/home.php';
});

$router->map('GET', '/blog', function () {
    require __DIR__ . '/views/blog.php';
});

$router->map('GET', '/contact', function () {
    require __DIR__ . '/views/contact.php';
});

$match = $router->match();
if ($match !== null) {
    $match['target']();
}

require ('./components/footer.php');



// $arrayViews = [
//     'home' => 'home.php',
//     'contact' => 'contact.php',
//     'blog' => 'blog.php',
// ];


// // récupère l'url après "/index/"
// $path = strtolower(substr($_SERVER["REQUEST_URI"], 1));

// // si il y a un chemin 
// if ($path) {
//     // si le chemin existe dans les vues
//     if (array_key_exists($path, $arrayViews)) {
//         require("views/$arrayViews[$path]");
//     } else {
//         require('views/404.php');
//     }
// }

?>