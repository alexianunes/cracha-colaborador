<?php
namespace Controllers;
namespace Controllers\Error;

use \Core\Controller;

class NotfoundController extends Controller {

	public function index() {
		$this->loadView('Error','404', array());
	}

}