<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Hcode\Page;

$app = new Slim();

$app->config('debug', true);

// qual rota está chamando
$app->get('/', function() {
    
	$page = new Page();

	$page->setTpl("index");

});

$app->run();

 ?>