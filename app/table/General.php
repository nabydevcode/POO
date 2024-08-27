<?php
namespace App\app\table;
use App\app\Table\App;

class General
{
    protected static $table;

    public static function getTable()
    {
        if (isset(static::$table)) {
            return static::$table;
        } else {
            throw new \Exception("Le nom de la table n'est pas défini.");
        }
    }
    public static function allOrbyid($attributes = null)
    {
        $table = static::getTable();
        if (isset($attributes)) {
            return App::getDB()->prepare("SELECT * FROM  " . $table . "  WHERE id=?", [$attributes], get_called_class(), true);
        } else {
            return App::getDB()->query("SELECT * FROM " . $table . " ", get_called_class(), false);
        }
    }

}