<?php
namespace App\app\table;
use App\app\Table\App;

class General
{
    private array $data = [];

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        return $this->data[$name] ?? null;
    }
    public static function getLastarticle()
    {
        if (isset($_GET['id'])) {
            return App::getDB()->prepare('SELECT * FROM post WHERE id=?', [$_GET['id']], get_called_class(), true);
        } else {
            return App::getDB()->query('SELECT post.id,post.titre, post.message, categories.name as categorie FROM post LEFT JOIN categories on category_id=categories.id', get_called_class());
        }

    }

}