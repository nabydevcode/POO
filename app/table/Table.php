<?php
use App\app\Table\App;

class Table
{

    public static function getLastarticle()
    {
        if (isset($_GET['id'])) {
            return App::getDB()->prepare('SELECT * FROM post WHERE id=?', [$_GET['id']], __CLASS__, true);
        } else {
            return App::getDB()->query('SELECT post.id,post.titre, post.message, categories.name as categorie FROM post LEFT JOIN categories on category_id=categories.id', __CLASS__);
        }

    }

}