<?php
//phpinfo();exit;

session_start();

/** REQUIRES */
require 'settings/config.php';
require 'vendor/autoload.php';

/** RETORNA ARRAY COM TODAS AS INFORMAÇÕES PASSADAS NA URL */
global $urlConfig;
if(isset($_GET['url']) && !empty($_GET['url'])){
    $urlConfig = retornarUrlConfig($_GET['url']);
}else{
    header("Location: ".URL_SITE);
	exit;
}

/** EXECUTA O SISTEMA  */
$core = new Core\Core();
$core->run();



