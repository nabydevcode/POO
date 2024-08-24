<?php
namespace App\app\Table;
use App\app\Table\Articles;

class Categorie
{

    public int $id;
    public string $name;

    private static $table = 'categories';



    public static function all()
    {
        return App::getDB()->query("SELECT * FROM " . self::$table . " ", __CLASS__);
    }
    public function getURL()
    {
        return 'index.php?p=categorie&id=' . $this->id;
    }


}