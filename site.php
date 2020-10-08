<?php

use \Hcode\Page;
use \Hcode\PageAdmin;
use \Hcode\Model\User;
use \PHPMailer\PHPMailer;
use \Hcode\Model\Category;
use \Hcode\Model\Products;


$app->get('/', function() {

	$products = Products::listAll();
    
	$page = new Page();

	$page->setTpl("index", [
		'products'=>Products::checkList($products)
	]);

});