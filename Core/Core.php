<?php
namespace Core;

class Core {

	public function run() {

		// $url = ''; //nginx
		$url = '/'; //apache
		$currentAction = '';

		if(isset($_GET['url'])) {
			$url .= $_GET['url'];
		}

		$params = array();
		
		if(!empty($url) && $url != '/') {
			
			$url = explode('/', $url);
			array_shift($url);

			$currentModulo = ucfirst($url[0]);
			array_shift($url);

			if(isset($url[0]) && !empty($url[0])) {
				//se a url[0] for igual a add, edit ou delete. O préfixo do controller é o nome do módulo
				//se a url[0] for igual a add, edit ou delete. A ação é a url[0]
				if($url[0] == 'add' || $url[0] == 'edit' || $url[0] == 'delete'){
					$currentController = $currentModulo.'Controller';
					$currentAction = $url[0];
				}else if($currentModulo == 'View'){
					$currentController = $currentModulo.'Controller';
					$currentAction = $url[0];
				}else{
					$currentController = $url[0].'Controller';
				}
				array_shift($url);
			} else {
				$currentController = $currentModulo.'Controller';
			}


			if($currentModulo == 'View'){
				$currentAction = $currentAction;
			} else if(isset($url[0]) && !empty($url[0])) {
				$currentAction = $url[0];
				array_shift($url);
			} else {

			    //se o controller for Logout, a ação será deslogar
                if($currentController == 'logoutController'){
                    $currentController = 'LoginController';
                    $currentAction = 'logout';
                }elseif($currentController == 'logarController'){
                    //se o controller for Logar , a ação será logar
                    $currentController = 'LoginController';
                    $currentAction = 'logar';
                }elseif($currentAction == ''){
                    //se a ação estiver vazia ou seja não é add/edit/delete, assume o valor index
					$currentAction = 'index';
				}


			}
			if(count($url) > 0) {
				$params = $url;
			}


		} else {
			$currentModulo = 'Home';
			$currentController = 'HomeController';
			$currentAction = 'index';
		}
		

		$currentController = ucfirst($currentController);

		$prefix = '\Controllers\\'.$currentModulo.'\\';


		if(!file_exists('Controllers/'.$currentModulo.'/'.$currentController.'.php') ||
			!method_exists($prefix.$currentController, $currentAction)) {

			$prefix = '\Controllers\\Error\\';
			$currentController = 'NotfoundController';
			$currentAction = 'index';

		}

		$newController = $prefix.$currentController;
	
		$c = new $newController;


		call_user_func_array(array($c, $currentAction), $params);

	}

}