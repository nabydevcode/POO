<?php
namespace App\app\Table;
use App\app\Database;

class App
{
    const DB_NAME = 'testdb';
    const DB_USER = 'root';
    const DB_HOST = 'localhost';
    const DB_PASS = '';
    private static $database;

    public static function getDB()
    {
        if (self::$database === null) {
            self::$database = new Database(self::DB_NAME, self::DB_HOST, self::DB_PASS, self::DB_USER);
        }
        return self::$database;
    }
}