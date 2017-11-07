<?php 
$routes = [
  '' => 'controller/indexController.php',
  'about' => 'controller/aboutController.php',
  'contact' => 'controller/contactController.php',
  'notfound' => 'controller/notfoundController.php',
  'product' => 'controller/productController.php'
];
$uri = trim ($_SERVER['REQUEST_URI'], '/');
if (array_key_exists($uri, $routes)) {
  require $routes[$uri];
} else {
  require $routes['notfound'];
}

 ?>