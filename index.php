<?php
/* TEST FILE */
require_once('./vendor/autoload.php');

use Src\PhpRest\Router;

$router = new Router("Src\PhpRest");
$routes = $router->setRoute('/', "Rest");


$test = $router->getHandler();
echo "<br>";
//var_dump($test);

echo "<br>";
var_dump($routes);

echo "<br>url: ______";
var_dump($_GET['url']); //Retorna o path da rota
 

/* echo '<br>url: ______';
var_dump($_REQUEST); //Tambem retora o path da rota */

/* echo '<br>RequestMethod: ______';
var_dump($_SERVER['REQUEST_METHOD']); //Descobre o metodo utilizado

echo '<br>Body: ______';
$entityBody = file_get_contents('php://input'); //Recebe Body da msg
var_dump($entityBody); */