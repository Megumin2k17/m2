<?php 

require_once "../vendor/autoload.php";

// var_dump($_SERVER['REQUEST_URI']); die;


// if($_SERVER['REQUEST_URI'] === '/home') {
// 	require '../app/controllers/homepage.php';
// }

$templates = new League\Plates\Engine('../app/views/templates');

$templates->addFolder('layout', '../app/views/layout');



switch($_SERVER['REQUEST_URI']) {

	case '/create':
		echo $templates->render('create_user', ['name' => 'Jonathan']);
		break;
	case '/edit':
		echo $templates->render('edit', ['name' => 'Jonathan']);
		break;
	case '/login':
		echo $templates->render('page_login', ['name' => 'Jonathan']);
		break;
	case '/media':
		echo $templates->render('media', ['name' => 'Jonathan']);
		break;
	case '/profile':
		echo $templates->render('page_profile', ['name' => 'Jonathan']);
		break;
	case '/register':
		echo $templates->render('page_register', ['name' => 'Jonathan']);
		break;
	case '/security':
		echo $templates->render('security', ['name' => 'Jonathan']);
		break;
	case '/users':
		echo $templates->render('users', ['name' => 'Jonathan']);
		break;
	default:		
		echo "<h1>ERROR 404 PAGE NOT FOUND</h1>";
		break;
}



