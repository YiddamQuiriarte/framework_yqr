<?php

class Bootstrap
{
	public static function run(Request $p){
		$controllerName = $p->getController()."Controller";
		$routeController = ROOT."controllers".DS.$controllerName.".php";
		$method = $p->getMethod();
		$args = $p->getArgs();

		if (is_readable($routeController)) {
			include_once($routeController);
			$controller = new $controllerName();

			if (is_callable(array($controller, $method))) {
				$method = $p->getMethod();	
			}else{
				$method = "index";
			}

			if ($method=="login") {
				
			}else{
				Authorization::logged();
			}
		
			if (isset($args)) {
				call_user_func_array(array($controller, $method), $args);
			}else{
				call_user_func(array($controller, $method));
			}
		}else{
			throw new Exception("Controlador no encontrado");
		}

	}
}