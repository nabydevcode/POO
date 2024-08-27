<?php

namespace App\app\table;

use App\app\table\General;
use App\app\Table\Categorie;



class Articles extends General
{
    public int $id;
    public string $titre;
    public string $message;
    public $categorie;
    public int $category_id;
    public static $table = "post";




    public function getUrl(): string
    {
        return 'index.php?p=article&id=' . $this->id;
    }

    public function getExtrait(): string
    {
        $html = '<p>' . substr($this->message, 0, 100) . '<p>';
        $html .= '<p><a href="' . $this->getUrl() . '"> Voir la suite ...</a></p>';
        return $html;
    }

    public function articleByCategorie()
    {
        return App::getDB()->query(
            'SELECT post.id, post.titre, post.message, categories.name as categorie 
            FROM post 
            LEFT JOIN categories ON post.category_id = categories.id ',
            get_called_class(),
            false
        );
    }
    public static function articleBycategori($categoryId)
    {
        // Assurez-vous que la requête SQL est correctement formée
        $query = 'SELECT post.id, post.titre, post.message, categories.name AS categorie 
                  FROM post 
                  LEFT JOIN categories ON post.category_id = categories.id 
                  WHERE post.category_id = ?';

        // Exécutez la requête et récupérez les résultats
        return App::getDB()->prepare($query, [$categoryId], get_called_class(), false);
    }
}
