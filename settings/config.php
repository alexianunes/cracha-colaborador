<?php
/** REQUIRES E INCLUDES */
require 'environment.php';

/** SET CONFIGURAÇÕES PHP.INI */
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
ini_set('max_execution_time', 300);

/** DEFINIR VARIAVEIS DE AMBIENTE E PRODUÇÃO */

if (ENVIRONMENT == 'development') {
    ini_set('display_errors',1);
    ini_set('display_startup_erros',1);
    error_reporting(E_ALL);
//    error_reporting(0);

    define("BASE_URL", "http://localhost/dev-pegasus-cracha/public");
    define("BASE_URL_COLABORADOR", "https://dev-pegasus-colaborador.test/");
    define("BASE_URL_EXTERNA", "");
    define("URL_SITE", "");
    define('BASE_DIR', dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR);
    define('DB_NAME', 'projeto_cracha');
    define('HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
} else {
    /** SET DISPLAY ERROS */
    // ini_set('display_errors',1);
    // ini_set('display_startup_erros',1);
    // error_reporting(E_ALL);
    error_reporting(0);

    define("BASE_URL", "");
    define("BASE_URL_COLABORADOR", "");
    define("BASE_URL_EXTERNA", "");
    define("URL_SITE", "");
    define('BASE_DIR', dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR);
    define('DB_NAME', '');
    define('HOST', '');
    define('DB_USER', '');
    define('DB_PASS', '');
}