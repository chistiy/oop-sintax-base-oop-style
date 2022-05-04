<?php
final class bd {

    private static $host = 'localhost';
    private static $user = 'root';
    private static $pass = 'root';
    private static $db_name = 'test';
    private static $db;

    public static function getConnection() {

        if(self::$db === null) {
            $db = new mysqli(self::$host, self:: $user, self::$pass, self::$db_name);
            $db->set_charset('utf8');
            $db->character_set_name();
            $db->query("SET CHARACTER SET utf8");
            if(empty($db->errno)) {
                self::$db = $db;
            }
        }
        return self::$db;
    }

    private function __construct() { }
    private function __clone() { }
    public function __wakeup(){}
}
