<?php
/**
 * Created by PhpStorm.
 * User: Alexia
 * Date: 12/04/2019
 * Time: 10:35
 */

namespace Controllers;
namespace Controllers\Error;

use \Core\Controller;

class ForbiddenController extends Controller
{
    public function index() {
        $this->loadView('Error','403', array());
    }
}