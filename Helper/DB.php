<?php
namespace Helper;

/**
 * Class DB
 * @package Helper
 */
class DB
{
    private static $db = null;

    public static function get()
    {
        if(is_null(self::$db)){
            self::$db = new \PDO('mysql:host=paulineehrportfo.mysql.db;dbname=paulineehrportfo','paulineehrportfo','Pauline14');
            self::$db->exec('SET NAMES UTF8;');
        }
        return self::$db;
    }
}

