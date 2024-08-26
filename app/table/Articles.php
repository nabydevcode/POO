<?php

namespace App\app\table;

use App\app\table\General;

class Articles extends General
{
    public int $id;
    public string $titre;
    public string $message;
    public $categorie;
    public $category_id;


    public function getURL()
    {
        return 'index.php?p=article&id=' . $this->id;
    }
    public function getExtrait()
    {
        $html = '<p>' . substr($this->message, 0, 100) . '<p>';
        $html .= '<p> . <a href="' . $this->getURL() . '"> Voir la suite ...</a><p>';
        return $html;
    }
    public static function articleBycategori($artile)
    {
        return App::getDB()->prepare('SELECT post.id,post.titre, post.message, categories.name as categorie FROM post LEFT JOIN categories on category_id=categories.id WHERE category_id=? ', [$_GET['id']], get_called_class(), false);
    }

}