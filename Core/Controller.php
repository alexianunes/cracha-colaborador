<?php
namespace Core;

class Controller {

	public function loadView($viewModulo = '', $viewName, $viewData = array()) {
		extract($viewData);
		
		if($viewModulo != ''){
			require 'Views/'.$viewModulo.'/'.$viewName.'.php';
		}else{
			require 'Views/'.$viewName.'.php';
		}
		
	}

	public function loadTemplate($viewName, $viewData = array()) {
		require 'Views/template.php';
	}

	public function loadViewInTemplate($viewModulo, $viewName, $viewData = array()) {
		extract($viewData);
		require 'Views/'.$viewModulo.'/'.$viewName.'.php';
	}

}