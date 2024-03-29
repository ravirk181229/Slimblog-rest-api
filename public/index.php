<?php

require '../app/db.php';



use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;

//Get Page Name

$_SERVER['REQUEST_URI_PATH'] = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$segments = explode('/', $_SERVER['REQUEST_URI_PATH']);

if(isset($segments[2])){
	$page_name = $segments['2'];
	
	if($page_name == 'categories' || $page_name == 'category'){
		require_once('../app/api/category.php');
	}
	 elseif($page_name == 'posts' || $page_name == 'post'){
		 require_once('../app/api/post.php');
	 } else {

	  die('Please use API endpoints');
	 }

}






$app->run();