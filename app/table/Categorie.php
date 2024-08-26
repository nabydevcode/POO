<?php
namespace App\app\Table;
use App\app\Table\Articles;

class Categorie
{

    public int $id;
    public string $name;
    public string $message;
    public string $titre;
    public $categorie;

    private static $table = 'categories';



    public static function all($id = null)
    {
        if (isset($id)) {
            return App::getDB()->prepare('SELECT * FROM categories WHERE id=?', [$id], get_called_class(), true);
        } else {
            return App::getDB()->query("SELECT * FROM " . self::$table . " ", get_called_class(), false);
        }


    }
    public function getURL()
    {
        return 'index.php?p=categorie&id=' . $this->id;
    }




}