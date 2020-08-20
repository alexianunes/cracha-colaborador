<?php
namespace Core;

use Couchbase\Exception;
use PDO;

class Model
{
    private static $db;

	public function __construct(){
		$this->db = $this->conectar();
	}

    public static function conectar()
    {
        if (self::$db == null) {
            try {
                self::$db = new PDO('mysql:host=' . HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
				// self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				self::$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            } catch (PDOException $e) {
				echo '<h2>Erro ao conectar</h2>';
				//echo 'ERROR: '.$e->getMessage();
            }
        }

        return self::$db;
    }

}
