<?php 
	// router
	$tokens = explode('/', rtrim($_SERVER['REQUEST_URI'], '/'));
	
	// Dispatcher
	$controllerName = ucfirst($tokens[1]);
	if (file_exists('controllers/'.$controllerName. '.php'))
	{
			require_once ('controllers/'.$controllerName. '.php');
			$controller = New $controllerName;
			$actionName = $tokens[2] . 'Action';
			$controller->{$actionName}($tokens[3]);

	}
	else{
			require_once ('controllers/error.php');
			$controllerName = 'Errors';
			$controller = New $controllerName;
			$controller->IndexAction();
	}
?>